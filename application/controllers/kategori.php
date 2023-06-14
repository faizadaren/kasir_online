<?php

class Kategori extends CI_Controller{

    public function minuman_dingin()
    {
        $data['minuman_dingin'] = $this->model_kategori->data_minuman_dingin()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('minuman_dingin', $data);
        $this->load->view('template/footer');
    }

    public function minuman_hangat()
    {
        $data['minuman_hangat'] = $this->model_kategori->data_minuman_hangat()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('minuman_hangat', $data);
        $this->load->view('template/footer');
    }

    public function makanan_berat()
    {
        $data['makanan_berat'] = $this->model_kategori->data_makanan_berat()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('makanan_berat', $data);
        $this->load->view('template/footer');
    }

    public function makanan_ringan()
    {
        $data['makanan_ringan'] = $this->model_kategori->data_makanan_ringan()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('makanan_ringan', $data);
        $this->load->view('template/footer');
    }
}