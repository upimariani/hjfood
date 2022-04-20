<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_review extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->model('m_profil');
        $this->load->model('m_review');
    }

    // List all your items
    public function pesanan($id_transaksi)
    {
        $data = array(
            'cart' => $this->m_katalog->cart(),
            'reward' => $this->m_profil->reward(),
            'pesanan' => $this->m_review->pesanan($id_transaksi)
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vreview', $data);
        $this->load->view('pelanggan/footer');
    }
    public function kirim($id_pesanan, $id_transaksi)
    {
        $data = array(
            'review' => $this->input->post('review')
        );
        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->update('pesanan', $data);
        redirect('pelanggan/c_review/pesanan/' . $id_transaksi, 'refresh');
    }
    public function view($id_produk)
    {
        $data = array(
            'view' => $this->m_review->view($id_produk),
            'reward' => $this->m_profil->reward(),
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vview_review', $data);
        $this->load->view('pelanggan/footer');
    }
}

/* End of file c_review.php */
