<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_profil extends CI_Model
{
    public function pelanggan()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get()->row();
    }
    public function reward()
    {
        $validasi = '1';
        $this->db->select('*');
        $this->db->from('reward');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->where('validasi', $validasi);
        return $this->db->get()->result();
    }
    public function lupa_password($email)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('email', $email);
        return $this->db->get()->row();
    }
}

/* End of file m_profil.php */
