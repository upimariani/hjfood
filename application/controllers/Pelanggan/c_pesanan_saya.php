<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_pesanan_saya extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->model('m_pesanan_saya');
        $this->load->model('m_profil');
    }

    // List all your items
    public function index()
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'cart' => $this->m_katalog->cart(),
            'pesanan' => $this->m_pesanan_saya->pesanan(),
            'reward' => $this->m_profil->reward()
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vpesanan_saya', $data);
        $this->load->view('pelanggan/footer');
    }
    public function detail_pesanan($id_transaksi)
    {
        $data = array(
            'cart' => $this->m_katalog->cart(),
            'detail' => $this->m_pesanan_saya->detail_pemesanan($id_transaksi),
            'reward' => $this->m_profil->reward()
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vdetail_pesanan', $data);
        $this->load->view('pelanggan/footer');
    }
    public function bayar($id_transaksi)
    {
        $config['upload_path']          = './asset/bayar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '5000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('bayar')) {
            $data = array(
                'cart' => $this->m_katalog->cart(),
                'error' => $this->upload->display_errors(),
                'detail' => $this->m_pesanan_saya->detail_pemesanan($id_transaksi)
            );
            $this->load->view('pelanggan/head');
            $this->load->view('pelanggan/header', $data);
            $this->load->view('pelanggan/vdetail_pesanan', $data);
            $this->load->view('pelanggan/footer');
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'bukti_bayar' => $upload_data['file_name']
            );
            $this->db->where('id_transaksi', $id_transaksi);
            $this->db->update('pembayaran', $data);
            redirect('pelanggan/c_pesanan_saya/detail_pesanan/' . $id_transaksi, 'refresh');
        }
    }
}

/* End of file Controllername.php */
