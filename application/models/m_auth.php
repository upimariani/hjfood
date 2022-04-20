<?php
defined('BASEPATH') or exit('No direct script access allowes');

class m_auth extends CI_Model
{
    public function login_pelanggan($username, $password)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where(array(
            'username' => $username,
            'password' => $password
        ));
        return $this->db->get()->row();
    }
}
