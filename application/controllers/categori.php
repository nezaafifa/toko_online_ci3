<?php 

class categori extends CI_Controller
{
    public function elektronik()
    {
        $data['elektronik'] = $this->Model_categori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->Model_categori->data_pakaian_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->Model_categori->data_pakaian_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_anak_anak()
    {
        $data['pakaian_anak_anak'] = $this->Model_categori->data_pakaian_anak_anak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_anak_anak', $data);
        $this->load->view('templates/footer');
    }
    public function peralatan_olahraga()
    {
        $data['peralatan_olahraga'] = $this->Model_categori->data_peralatan_olahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan_olahraga', $data);
        $this->load->view('templates/footer');
    }
}