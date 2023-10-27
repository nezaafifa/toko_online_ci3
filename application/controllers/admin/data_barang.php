<?php 

class data_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
        }
    }
    public function index()
    {
        $data['barang'] = $this->Model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $categori = $this->input->post('categori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = ''){

        } else {
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo  'Gambar Gagal Di Upload';
            } else {
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array (
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'categori' => $categori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );

        $this->Model_barang->tambah_barang($data, 'tb_barang');
        redirect('admin/data_barang/index');
    }
    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->Model_barang->edit_barang($where, 'tb_barang')->result();
    
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function update()
    {
        $id = $this->input->post('id_brg');
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $categori = $this->input->post('id');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'categori' => $categori,
            'harga' => $nama_brg,
            'stok' => $stok
        );

        $where = array(
            'id_brg' => $id
        );

        $this->Model_barang->update_data($where, $data, 'tb_barang');
        redirect('admin/data_barang/index');
    }
    public function hapus($id)
    {
        $where = array('id_brg' => $id);
        $this->Model_barang->hapus_data($where, 'tb_barang');
        redirect('admin/data_barang/index');
    }
    public function detail($id_brg)
    {
        $data['barang'] = $this->Model_barang->detail_brg($id_brg);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}