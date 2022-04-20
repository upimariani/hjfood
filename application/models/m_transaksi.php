<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_transaksi extends CI_Model
{
    public function detail_pesanan($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pesanan', 'transaksi.id_transaksi = pesanan.id_transaksi', 'left');
        $this->db->join('produk', 'pesanan.id_produk = produk.id_produk', 'left');
        $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->join('pengiriman', 'transaksi.id_transaksi = pengiriman.id_transaksi', 'left');
        $this->db->where('transaksi.id_transaksi', $id_transaksi);
        $data['detail'] = $this->db->get()->result();
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi join pelanggan on transaksi.id_pelanggan=pelanggan.id_pelanggan join pengiriman on transaksi.id_transaksi=pengiriman.id_transaksi join desa on pengiriman.id_desa=desa.id_desa join kecamatan on desa.kode=kecamatan.id_kecamatan where transaksi.id_transaksi='" . $id_transaksi . "'")->row();
        return $data;
    }
    public function transaksi()
    {
        $data['menunggu_konfirmasi'] = $this->db->query("SELECT * FROM `transaksi` join pelanggan on transaksi.id_pelanggan=pelanggan.id_pelanggan JOIN pengiriman ON transaksi.id_transaksi = pengiriman.id_transaksi JOIN pengemasan ON transaksi.id_transaksi=pengemasan.id_transaksi JOIN pembayaran ON transaksi.id_transaksi=pembayaran.id_transaksi where pembayaran.bukti_bayar !='0' and validasi_pembayaran='Menunggu'")->result();
        $data['dikemas'] = $this->db->query("SELECT * FROM `transaksi` join pelanggan on transaksi.id_pelanggan=pelanggan.id_pelanggan JOIN pengiriman ON transaksi.id_transaksi = pengiriman.id_transaksi JOIN pengemasan ON transaksi.id_transaksi=pengemasan.id_transaksi JOIN pembayaran ON transaksi.id_transaksi=pembayaran.id_transaksi where pembayaran.validasi_pembayaran='Valid' and pengemasan.status_pengemasan='Belum'")->result();
        $data['dikirim'] = $this->db->query("SELECT * FROM `transaksi` join pelanggan on transaksi.id_pelanggan=pelanggan.id_pelanggan JOIN pengiriman ON transaksi.id_transaksi = pengiriman.id_transaksi JOIN pengemasan ON transaksi.id_transaksi=pengemasan.id_transaksi JOIN user on pengiriman.id_kurir = user.id_user JOIN pembayaran ON transaksi.id_transaksi=pembayaran.id_transaksi where status_pengemasan='Valid' and pengiriman.status_pengiriman='Belum Dikirim'")->result();
        $data['selesai'] = $this->db->query("SELECT * FROM `transaksi` join pelanggan on transaksi.id_pelanggan=pelanggan.id_pelanggan JOIN pengiriman ON transaksi.id_transaksi = pengiriman.id_transaksi JOIN pengemasan ON transaksi.id_transaksi=pengemasan.id_transaksi JOIN pembayaran ON transaksi.id_transaksi=pembayaran.id_transaksi where pengiriman.status_pengiriman='Valid'")->result();
        return $data;
    }
    public function kurir()
    {
        $level = '3';
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level', $level);
        return $this->db->get()->result();
    }
    public function pelanggan($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get()->result();
    }
    public function pesanan($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get()->result();
    }
}

/* End of file m_transaksi.php */
