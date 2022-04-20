<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_kurir extends CI_Model
{
    public function select()
    {
        $bukti = '0';
        $valid = 'Valid';
        $kirim = 'Belum Dikirim';
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
        $this->db->join('pengemasan', 'transaksi.id_transaksi = pengemasan.id_transaksi', 'left');
        $this->db->join('pengiriman', 'transaksi.id_transaksi = pengiriman.id_transaksi', 'left');
        $this->db->join('desa', 'desa.id_desa = pengiriman.id_desa', 'left');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = desa.kode', 'left');
        $this->db->where('status_pengemasan', $valid);
        $this->db->where('pengiriman.id_kurir', $this->session->userdata('id_user'));
        $this->db->where('pengiriman.bukti', $bukti);
        $this->db->where('status_pengiriman', $kirim);
        return $this->db->get()->result();
    }
}

/* End of file m_kurir.php */
