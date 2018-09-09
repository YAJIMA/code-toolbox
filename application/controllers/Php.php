<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yajima
 * Date: 2018-8月-29
 * Time: 0:39
 */

class Php extends CI_Controller
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
        $this->load->view('php', $this->data);
        $this->load->view('footer', $this->data);
    }

    public function crypt()
    {
        $result = $cryptstr = $cryptsalts = '';

        // Crypt変換
        if ($this->input->post('mode') == 'crypt')
        {
            $cryptstr = $this->input->post('cryptstr');
            $cryptsalts = $this->input->post('cryptsalts');
            $result = crypt($cryptstr, $cryptsalts);
        }

        $this->data['result'] = $result;
        $this->data['cryptstr'] = $cryptstr;
        $this->data['cryptsalts'] = $cryptsalts;

        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('php_crypt', $this->data);
        $this->load->view('footer', $this->data);
    }

    public function date()
    {
        $datestr = date('Y-m-d H:i:s');
        $unixtime = time();

        // 日付変換
        if ($this->input->post('mode') == 'date2time')
        {
            $datestr = $this->input->post('datestr');
            $datestr = str_replace("年","/",$datestr);
            $datestr = str_replace("月","/",$datestr);
            $datestr = str_replace("日","",$datestr);
            $unixtime = strtotime($datestr);
        }
        if ($this->input->post('mode') == 'time2date')
        {
            $unixtime = $this->input->post('unixtime');
            $datestr = date("Y-m-d H:i:s", intval($unixtime));
        }

        $this->data['datestr'] = $datestr;
        $this->data['unixtime'] = $unixtime;

        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('php_date', $this->data);
        $this->load->view('footer', $this->data);
    }

    public function decode()
    {
        $result = $orgtext = $active = '';

        // テキスト変換
        $active = $this->input->post('mode');
        switch ($this->input->post('mode'))
        {
            case 'md5':
                $result = md5($this->input->post('orgtext'));
                break;
            case 'sha1':
                $result = sha1($this->input->post('orgtext'));
                break;
            case 'base64_encode':
                $result = base64_encode($this->input->post('orgtext'));
                break;
            case 'base64_decode':
                $result = base64_decode($this->input->post('orgtext'));
                break;
            case 'urlencode':
                $result = urlencode($this->input->post('orgtext'));
                break;
            case 'urldecode':
                $result = urldecode($this->input->post('orgtext'));
                break;
            case 'serialize':
                $result = serialize($this->input->post('orgtext'));
                break;
            case 'unserialize':
                $result = print_r(unserialize($this->input->post('orgtext')));
                break;
            case 'json_encode':
                $result = print_r(json_encode($this->input->post('orgtext')));
                break;
            case 'json_decode':
                $result = print_r(json_decode($this->input->post('orgtext')));
                break;
            case 'reverse':
                $orgtext = $this->input->post('result');
                $result = $this->input->post('orgtext');
                break;
        }

        $this->data['result'] = $result;
        $this->data['orgtext'] = $orgtext;
        $this->data['active'] = $active;

        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('php_decode', $this->data);
        $this->load->view('footer', $this->data);
    }

    public function kakunin()
    {
        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('php_kakunin', $this->data);
        $this->load->view('footer', $this->data);
    }

    public function mailencode()
    {
        $result = $orgtext = '';

        // テキスト変換
        $orgtext = $this->input->post('orgtext');
        switch ($this->input->post('encoding'))
        {
            case "utf-8":
                $from = "UTF-8";
                break;
            case "utf-7":
                $from = "UTF-7";
                break;
            case "euc-jp":
                $from = "eucJP-win";
                break;
            case "shift_jis":
                $from = "SJIS-win";
                break;
            case "iso-8859-1":
                $from = "ISO-8859-1";
                break;
            case "us-ascii":
                $from = "ASCII";
                break;
            case "iso-2022-jp":
            default:
                $from = "ISO-2022-JP-MS";
                break;
        }

        switch ($this->input->post('mode'))
        {
            case "encode":
                $result = mb_convert_encoding($orgtext, $from);
                break;
            case "decode":
                $result = mb_convert_encoding($orgtext, "UTF-8", $from);
                break;
            case "reverse":
                $orgtext = $this->input->post('result');
                $result = $this->input->post('orgtext');
                break;
        }

        $this->data['result'] = $result;
        $this->data['orgtext'] = $orgtext;

        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('php_mailencode', $this->data);
        $this->load->view('footer', $this->data);
    }

    public function pregmatch()
    {
        $regtext = $orgtext = '';
        $matches = array();
        $result = 'default';

        // Preg_match
        if ($this->input->post('mode') == 'pregmatch')
        {
            $regtext = $this->input->post('regtext');
            $orgtext = $this->input->post('orgtext');
            $res = preg_match($regtext, $orgtext, $matches, PREG_OFFSET_CAPTURE);
            if ($res === FALSE)
            {
                $result = 'error';
            }
            elseif ($res === 0)
            {
                $result = 'nomatch';
            }
            elseif ($res === 1)
            {
                $result = 'match';
            }
        }

        $this->data['orgtext'] = $orgtext;
        $this->data['matches'] = $matches;
        $this->data['regtext'] = $regtext;
        $this->data['result'] = $result;

        $this->load->view('header', $this->data);
        $this->load->view('nav', $this->data);
        $this->load->view('php_pregmatch', $this->data);
        $this->load->view('footer', $this->data);
    }

}