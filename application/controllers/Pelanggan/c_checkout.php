<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->model('m_checkout');
        $this->load->model('m_profil');
    }

    public function index()
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'cart' => $this->m_katalog->cart(),
            'profil' => $this->m_checkout->get_pelanggan()
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/vcheckout', $data);
    }
    public function get_kec()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_checkout->kec($id);
        echo json_encode($data);
    }
    public function get_desa()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_checkout->desa($id);
        echo json_encode($data);
    }
    public function pesan()
    {
        $this->pelanggan_login->cek_halaman();
        //insert tabel transaksi
        $data = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_pelanggan' => $this->session->userdata('id_pelanggan'),
            'tgl_transaksi' => date('Y-m-d'),
            'total_belanja' =>  $total = $this->input->post('total')
        );
        $this->db->insert('transaksi', $data);

        //insert tabel pengiriman
        $pengiriman = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_desa' => $this->input->post('desa'),
            'ongkir' => $this->input->post('ongkir'),
            'status_pengiriman' => 'Belum Dikirim',
            'alamat_pengiriman' => $this->input->post('alamat')
        );
        $this->db->insert('pengiriman', $pengiriman);

        //simpan tabel pesanan
        $cart = $this->m_katalog->cart();
        $stok = '0';
        foreach ($cart['cart'] as $key => $value) {
            $stok = $value->stok - $value->qty;
            $data = array(
                'id_transaksi' => $this->input->post('id_transaksi'),
                'id_produk' => $value->id_produk,
                'qty' => $value->qty
            );
            $this->db->insert('pesanan', $data);

            $qty = array(
                'stok' => $stok
            );
            $this->db->where('id_produk', $value->id_produk);
            $this->db->update('produk', $qty);
        }

        $pengemasan = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'status_pengemasan' => 'Belum'
        );
        $this->db->insert('pengemasan', $pengemasan);

        $pembayaran = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'validasi_pembayaran' => 'Menunggu',
            'bukti_bayar' => '0'
        );
        $this->db->insert('pembayaran', $pembayaran);
        redirect('pelanggan/c_pesanan_saya', 'refresh');
    }
}
