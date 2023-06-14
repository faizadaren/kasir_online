<?php

class Registrasi extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('nama' ,'Nama', 'required', [
            'required'  => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('username' ,'Username', 'required', [
            'required'  => 'Username wajin diisi!'
        ]);
        $this->form_validation->set_rules('password_1' ,'Password', 'required|matches[password_2]', [
            'required'  => 'Password wajib diisi!',
            'matches'   => 'Password tidak cocok'
        ]);
        $this->form_validation->set_rules('password_2' ,'Password', 'required|matches[password_1]');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('registrasi');
            $this->load->view('template/footer');
        }else{
            $data = array(
                'id'            => '',
                'nama'          => $this->input->post('nama'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password_1'),
                'role_id'       => 2,
            );
            $this->db->insert('tb_username',$data);
            redirect('auth/login');
        }
    }
}