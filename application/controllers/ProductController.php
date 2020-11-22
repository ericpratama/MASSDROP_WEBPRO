<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->library('session');
    }

    public function index()
    {
        $test['data'] = $this->info();
        
        //$this->setSession($data);
        //$this->session->set_userdata($data);
        //$this->session->sess_destroy();
        
        //$this->session->set_userdata('nama','Samsung 75Q8FN QLED Smart 4K UHD Full Array TV');
        //$this->session->unset_userdata('nama');

        //$test = array('nama' =>'Samsung 75Q8FN QLED Smart 4K UHD Full Array TV','kategori' => 'tv');

        //$this->session->unset_userdata('nama');

        //$wow = array('nama','kategori');

        //$this->session->unset_userdata($wow);
        //$this->session->set_userdata($test);
        $this->load->view('product',$test);

    }

    public function info() {
        $this->ProductModel->getData();
    }

    public function setSession($data) {
        $this->session->set_userdata($data);
    }

    public function toJoinDrop()
    {
        $this->load->view('joinDrop');
    }
}
