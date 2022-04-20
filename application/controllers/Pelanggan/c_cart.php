<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->model('m_profil');
    }

    public function index()
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'cart' => $this->m_katalog->cart(),
            'reward' => $this->m_profil->reward()
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vcart', $data);
        $this->load->view('pelanggan/footer');
    }
    public function update($id_keranjang)
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'qty' => $this->input->post('qty')
        );
        $this->db->where('id_keranjang', $id_keranjang);
        $this->db->update('keranjang', $data);
        redirect('pelanggan/c_cart');
    }
    public function delete($id_keranjang)
    {
        $this->db->where('id_keranjang', $id_keranjang);
        $this->db->delete('keranjang');
        redirect('pelanggan/c_cart', 'refresh');
    }
}
