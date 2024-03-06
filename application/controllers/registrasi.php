<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('registrasi_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('v_registrasi');
    }

    public function process() 
    {
        // $this->form_validation->set_rules('nama','nama','trim|required|min_length[1]|max_length[255]');
        // $this->form_validation->set_rules('pass','pass','trim|required|min_length[1]|max_length[255]');
        // if ($this->form_validation->run()==true)
        //$nama = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $notelp = $this->input->post('notelp');
        $status = $this->input->post('status');
        $level = $this->input->post('level');
        $foto = $this->input->post('foto');
        $this->registrasi_model->create_data($nama,$email,$pass,$notelp,$status,$level,$foto);
        redirect('login');
    }
    }