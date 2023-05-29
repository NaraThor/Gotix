<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function __construct(){
        parent::__construct();

        if(!$this->session->userdata('username')){
            $this->session->set_flashdata('pesan', '<script>alert("Harap login terlebih dahulu")</script>');
            redirect('login');
        }
    }

    public function list()
    {
        $data['event'] = $this->model_event->get()->result();
        $this->load->view('main/event/event', $data);
    }

    public function save()
    {
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = ''){}else{
            $config ['upload_path'] = './uploads/';
            $config ['allowed_types'] = 'jpg';

            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal di Upload!!!"; die();
            }else{
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tb_barang');
        redirect('admin/data_barang/index');
    }

    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')-> result();
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
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok
        );

        $where = array(
            'id_brg' => $id
        );

        $this->model_barang->update_data($where,$data,'tb_barang');
        redirect('admin/data_barang/index');
    }

    public function delete($id)
    {
        $where = array('id_brg' => $id);
        $this->model_barang->hapus_data($where, 'tb_barang');
        redirect('admin/data_barang/index');
    }

}
