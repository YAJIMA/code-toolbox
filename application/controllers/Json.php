<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yajima
 * Date: 2018-8月-29
 * Time: 1:24
 */

class Json extends CI_Controller
{
    public $data = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('json', $this->data);
        $this->load->view('footer', $this->data);
    }

    public function excel()
    {
        // 必要モジュールを読み込み
        require BASEPATH.'../includes/classes/PHPExcel.php';
        require BASEPATH.'../includes/classes/PHPExcel/IOFactory.php';

        $apiurl = $data = "";
        $resultColumnName = "results";

        if ( ! empty($this->input->post('colname')))
        {
            $resultColumnName = $this->input->post('colname');
        }

        if ( ! empty($this->input->post('apiurl')))
        {
            $apiurl = $this->input->post('apiurl');
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $apiurl);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $data = curl_exec($ch);

            if (curl_errno($ch)) {
                print "Error: " . curl_error($ch);
            } else {
                // Show me the result
                //var_dump($data);
                curl_close($ch);
            }

            if ( ! empty($data) && ! empty($this->input->post('mode')))
            {
                $dataarr = json_decode($data, true);// レスポンスデータ（JSONを配列にデコード）
                //var_dump($dataarr);

                // ヘッダー行を作成
                $headers = array();
                foreach($dataarr[$resultColumnName] as $val)
                {
                    $tempheaders = array_keys($val);
                    $diff = array_diff($tempheaders, $headers);
                    foreach($diff as $d)
                    {
                        $headers[] = $d;
                    }
                }
                unset($val);

                if (strpos($this->input->post('mode'), 'excel') !== FALSE)
                {
                    $excel = new PHPExcel();//新しいExcelオブジェクトを作成
                    $excel->getProperties()
                        ->setCreator("Y.Yajima")
                        ->setLastModifiedBy("Y.Yajima")
                        ->setCompany('Hatchbit & Co.')
                        ->setCreated(time())
                        ->setModified(time())
                        ->setManager('Y.Yajima')
                        ->setTitle("This file created by Hatchbit & Co.")
                        ->setSubject("http://code.hatchbit.jp/json/excel")
                        ->setDescription("このファイルは、code.hatchbit.jpで作成されました。")
                        ->setKeywords("PHP Excel PHPExcel")
                        ->setCategory("JSON to Excel");
                    $excel->setActiveSheetIndex(0);//何番目のシートに有効にするか
                    $sheet = $excel->getActiveSheet();//有効になっているシートを取得
                    $sheet->setTitle('シート 1');//シート名を設定します。

                    //数値で指定する場合

                    // ヘッダー行書き出し
                    $col = 0;
                    $row = 1;
                    foreach ($headers as $hval)
                    {
                        //$value = mb_convert_encoding($hval, "SJIS-WIN", "UTF-8");
                        $value = $hval;
                        $sheet->setCellValueByColumnAndRow($col, $row, $value);
                        $col++;
                    }
                    unset($hval);

                    // データ書き出し
                    foreach($dataarr[$resultColumnName] as $val)
                    {
                        $row++;
                        $lines = array();
                        $col = 0;
                        foreach ($headers as $hval)
                        {
                            if (isset($val[$hval]))
                            {
                                $value = $val[$hval];
                                $sheet->setCellValueByColumnAndRow($col, $row, $value);
                            }
                            $col++;
                        }
                        unset($hval);
                    }
                    unset($val);

                    switch($this->input->post('mode')) {
                        case "excel5":
                            $filename = "response.xls";
                            $filekind = "Excel5";
                            break;
                        case "excel2007":
                            $filename = "response.xlsx";
                            $filekind = "Excel2007";
                            break;
                    }

                    if(file_exists('uploads/'.$filename)) unlink('uploads/'.$filename);// 既存のファイルを削除
                    $writer = PHPExcel_IOFactory::createWriter($excel, $filekind);// Excelファイルを作成
                    $writer->save('uploads/'.$filename);// Excelファイルを保存

                    header("Content-Type: application/octet-stream");//ダウンロードの指示
                    header("Content-Disposition: attachment; filename=$filename");//ダウンロードするファイル名
                    header("Content-Length:".filesize('uploads/'.$filename));//ダウンロードするファイルのサイズ
                    ob_end_clean();//ファイル破損エラー防止
                    readfile('uploads/'.$filename);

                    exit();
                }

                if ($this->input->post('mode') == 'csv')
                {
                    mb_convert_variables("SJIS-WIN", "UTF-8", $dataarr);
                    $filename = "response.csv";
                    $fp = fopen('uploads/'.$filename, "w");
                    fputcsv($fp, $headers);
                    foreach($dataarr[$resultColumnName] as $val) {
                        $lines = array();
                        foreach($headers as $hval) {
                            $lines[] = (isset($val[$hval])) ? $val[$hval] : "";
                        }
                        unset($hval);
                        fputcsv($fp, $lines);
                    }
                    unset($val);
                    fclose($fp);

                    header('Content-Type: application/octet-stream; charset=SJIS-win');
                    header('Content-Disposition: attachment; filename='.$filename);
                    readfile('uploads/'.$filename);

                    exit();
                }
            }
        }

        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('json_excel', $this->data);
        $this->load->view('footer', $this->data);
    }

}