<?php
    defined('BASEPATH') or exit ('no direct script access allowed');
    
class Web extends CI_Controller{
    function __construct(){
    parent::__construct();
    $this->load->helper('url');
 }
    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('partial/v_header',$data);
        $this->load->view('partial/v_index',$data);
        $this->load->view('partial/v_footer',$data);
    }
    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('partial/v_header', $data);
        $this->load->view('partial/v_about', $data);
        $this->load->view('partial/v_footer', $data);
    }
}
