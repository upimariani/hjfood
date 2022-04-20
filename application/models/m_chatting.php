<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_chatting extends CI_Model
{
    public function select_chat()
    {
        $this->db->select('*');
        $this->db->from('chatting');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));

        return $this->db->get()->result();
    }
    public function list_chat()
    {
        $this->db->select('*');
        $this->db->from('chatting');
        $this->db->join('pelanggan', 'chatting.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->group_by('chatting.id_pelanggan');
        return $this->db->get()->result();
    }
    public function chatting($id_pelanggan)
    {
        $this->db->select('*');
        $this->db->from('chatting');
        $this->db->join('pelanggan', 'chatting.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('chatting.id_pelanggan', $id_pelanggan);
        return $this->db->get()->result();
    }
}

/* End of file m_chatting.php */
