<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_checkout extends CI_Model
{
    public function kec($id)
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('kode_kec', $id);
        return $this->db->get()->result();
    }
    public function desa($id)
    {
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->where('kode', $id);
        return $this->db->get()->result();
    }
    public function get_pelanggan()
    {
        $id = $this->session->userdata('id_pelanggan');
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('desa', 'pelanggan.id_desa = desa.id_desa', 'left');
        $this->db->join('kecamatan', 'desa.kode = kecamatan.id_kecamatan', 'left');
        $this->db->where('id_pelanggan', $id);
        return $this->db->get()->result();
    }
}

/* End of file m_checkout.php */
