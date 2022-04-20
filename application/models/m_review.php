<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_review extends CI_Model
{
    public function pesanan($id_transaksi)
    {
        $review = '0';
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pesanan', 'transaksi.id_transaksi = pesanan.id_transaksi', 'left');
        $this->db->join('produk', 'pesanan.id_produk = produk.id_produk', 'left');
        $this->db->join('pengiriman', 'transaksi.id_transaksi = pengiriman.id_transaksi', 'left');
        $this->db->where('transaksi.id_transaksi', $id_transaksi);
        $this->db->where('pesanan.review', $review);
        return $this->db->get()->result();
    }
    public function view($id_produk)
    {
        $review = '0';
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->join('produk', 'pesanan.id_produk = produk.id_produk', 'left');
        $this->db->join('transaksi', 'transaksi.id_transaksi = pesanan.id_transaksi', 'left');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');


        $this->db->where('pesanan.id_produk', $id_produk);
        $this->db->where('review!=', $review);

        return $this->db->get()->result();
    }
}

/* End of file m_review.php */
