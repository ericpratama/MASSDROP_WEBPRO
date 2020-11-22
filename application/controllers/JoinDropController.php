<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JoinDropController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('JoinDropModel');
    }

    public function index() {
        $this->load->view('joinDrop');
    }
    

    public function simpanalamat(){
        $this->load->model('JoinDropModel');
        $username = $this->session->userdata('username');
        $this->db->select('id_user');
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        $data = $query->row_array();


        $id = $data['id_user'];
        $name= $this->input->post('nama');
        $address= $this->input->post('alamat');
        $city= $this->input->post('kota');
        $state =$this->input->post('provinsi');
        $postalcode =$this->input->post('kode_pos');
        $phonenum =$this->input->post('nomor_hp');
        $table2 = 'address';

        $data_insert = array (
            'id' => $id,
            'nama' => $name,
            'alamat' => $address,
            'kota' => $city,
            'provinsi' => $state,
            'kode_pos' => $postalcode,
            'nomor_hp' => $phonenum
        );

        $error = false;
        foreach($data_insert as $field) {
            if (empty($field)) {
                $error = true;
            }
        }
        if ($error) {
            redirect('joinDropController');
            alert("All fields are required.");
        } else {
            $simpanalamat = $this->JoinDropModel->tambahalamat($table2, $data_insert);
            redirect('home');
        }
    }
        
}


