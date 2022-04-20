<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pesanan_saya extends CI_Model
{
    public function pesanan()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->join('pengiriman', 'transaksi.id_transaksi = pengiriman.id_transaksi', 'left');
        $this->db->where('transaksi.id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get()->result();
    }
    public function detail_pemesanan($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pesanan', 'transaksi.id_transaksi = pesanan.id_transaksi', 'left');
        $this->db->join('produk', 'pesanan.id_produk = produk.id_produk', 'left');
        $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->where('transaksi.id_transaksi', $id_transaksi);
        $data['detail'] = $this->db->get()->result();
        $data['transaksi'] = $this->db->query("SELECT * FROM `transaksi` join pelanggan on transaksi.id_pelanggan=pelanggan.id_pelanggan JOIN pengiriman ON transaksi.id_transaksi = pengiriman.id_transaksi JOIN pengemasan ON transaksi.id_transaksi=pengemasan.id_transaksi JOIN pembayaran ON transaksi.id_transaksi=pembayaran.id_transaksi join desa on pengiriman.id_desa=desa.id_desa join kecamatan on kecamatan.id_kecamatan=desa.kode where transaksi.id_transaksi='" . $id_transaksi . "'")->row();
        return $data;
    }
    //menampilkan data belum bayar
    public function belum_bayar()
    {
        $pembayaran = '0';
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pembayaran', 'transaksi.id_transaksi = pembayaran.id_transaksi', 'left');
        $this->db->where('pembayaran.bukti_bayar', $pembayaran);
        return $this->db->get()->result();
    }
}

/* End of file m_pesanan_saya.php */
