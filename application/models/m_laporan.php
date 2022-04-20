<?php


defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan extends CI_Model
{
    public function lap_harian()
    {
        $status = 'Valid';
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->join('pengiriman', 'transaksi.id_transaksi = pengiriman.id_transaksi', 'left');
        $this->db->where('pengiriman.status_pengiriman', $status);
        $this->db->order_by('transaksi.id_transaksi', 'desc');
        return $this->db->get()->result();
    }
    public function lap_stock()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('id_produk', 'desc');
        return $this->db->get()->result();
    }
}

/* End of file M_laporan.php */
