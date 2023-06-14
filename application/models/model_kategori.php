<?php

class Model_kategori extends CI_Model{
    
    public function data_minuman_dingin(){
        return $this->db->get_where("tb_barang",array('kategori' => 'minuman dingin'));
    }

    public function data_minuman_hangat(){
        return $this->db->get_where("tb_barang",array('kategori' => 'minuman hangat'));
    }

    public function data_makanan_berat(){
        return $this->db->get_where("tb_barang",array('kategori' => 'makanan berat'));
    }

    public function data_makanan_ringan(){
        return $this->db->get_where("tb_barang",array('kategori' => 'makanan ringan'));
    }
}