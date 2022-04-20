<?php
class m_kurir_login extends CI_Model
{
    public function login_kurir($username, $password)
    {
        $this->db->select('*');
        $this->db->from('kurir');
        $this->db->where(array(
            'username' => $username,
            'password' => $password
        ));
        return $this->db->get()->row();
    }
}
