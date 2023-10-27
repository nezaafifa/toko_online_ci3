<?php 

class Model_categori extends CI_Model
{
    public function data_elektronik()
    {
        return $this->db->get_where("tb_barang",array('categori' => 'elektronik'));
    }
    public function data_pakaian_pria()
    {
        return $this->db->get_where("tb_barang",array('categori' => 'pakaian pria'));
    }
    public function data_pakaian_wanita()
    {
        return $this->db->get_where("tb_barang",array('categori' => 'pakaian wanita'));
    }
    public function data_pakaian_anak_anak()
    {
        return $this->db->get_where("tb_barang",array('categori' => 'pakaian anak anak'));
    }
    public function data_peralatan_olahraga()
    {
        return $this->db->get_where("tb_barang",array('categori' => 'peralatan olahraga'));
    }
}