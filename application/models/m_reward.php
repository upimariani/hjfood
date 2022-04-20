<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_reward extends CI_Model
{
    public function reward()
    {
        $this->db->select('*');
        $this->db->from('reward');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = reward.id_pelanggan', 'left');
        $this->db->join('desa', 'pelanggan.id_desa = desa.id_desa', 'left');
        $this->db->join('kecamatan', 'desa.kode = kecamatan.id_kecamatan', 'left');
        return $this->db->get()->result();
    }
}

/* End of file m_reward.php */
