<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yajima
 * Date: 2018-8月-29
 * Time: 1:25
 */

class Excel extends CI_Controller
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
        $this->load->view('excel', $this->data);
        $this->load->view('footer', $this->data);
    }

    public function cols()
    {
        $colname = 'A';
        $colnumber = 1;

        switch ($this->input->post('mode'))
        {
            case 'num2name' :
                $colname = $this->getColKey($this->input->post('colnumber') - 1);
                break;
            case 'name2num' :
                $colnumber = $this->getColNum($this->input->post('colname'));
                break;
        }

        $this->data['colname'] = $colname;
        $this->data['colnumber'] = $colnumber;

        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('excel_cols', $this->data);
        $this->load->view('footer', $this->data);
    }

    // http://note.onichannn.net/archives/1460
    public function getColKey($target) {
        $alphabet = array();
        for($i = 0; $i < 26; $i++){
            $alphabet[] = strtoupper(chr(ord('a') + $i));
        }
        $one = fmod($target, 26);// 55(=$target) = 2 * 26 + 3(=$one)
        $result = $alphabet[$one];
        $carry = ($target - $one) / 26;// 2 = (55 - 3) / 26
        while($carry != 0) {
            $one = fmod($carry - 1, 26);
            $result = $alphabet[$one].$result;
            $carry = ($carry - 1 - $one) / 26;
        }
        return $result;
    }

    public function getColNum($target) {
        $result = 0;
        for($i = 0; $i < 26; $i++){
            $alphabet[$i+1] = strtoupper(chr(ord('a') + $i));
        }
        $splits = str_split(strtoupper($target),1);// 引数を1文字ずつ配列
        $keta = 1;
        $rvsplits = array_reverse($splits);
        foreach($rvsplits as $key => $val) {
            $one = array_search($val, $alphabet);
            if($one !== false) {
                $result += $one * $keta;
            }
            $keta = $keta * 26;
        }
        unset($key,$val);
        return $result;
    }

}