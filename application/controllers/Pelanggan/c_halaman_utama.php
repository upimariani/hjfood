<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_halaman_utama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->model('m_profil');
    }

    public function index()
    {
        $data = array(
            'produk' => $this->m_katalog->katalog(),
            'upselling' => $this->m_katalog->upselling(),
            'bundling' => $this->m_katalog->bundling(),
            'cart' => $this->m_katalog->cart(),
            'reward' => $this->m_profil->reward()
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vhalaman_utama', $data);
        $this->load->view('pelanggan/footer');
    }
    public function keranjang()
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'id_produk' => $this->input->post('id'),
            'id_pelanggan' => $this->session->userdata('id_pelanggan'),
            'qty' => $this->input->post('qty')
        );
        $this->db->insert('keranjang', $data);
        redirect('pelanggan/c_halaman_utama');
    }
}
