<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yajima
 * Date: 2018-8月-29
 * Time: 1:27
 */

class Home extends CI_Controller
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
        $this->load->view('home', $this->data);
        $this->load->view('footer', $this->data);
    }
}