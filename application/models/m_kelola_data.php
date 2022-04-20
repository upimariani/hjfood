<?php
class m_kelola_data extends CI_Model
{
    public function produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->where('tipe=1');
        return $this->db->get()->result();
    }
    public function cek_produk($produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('nama', $produk);
        return $this->db->get()->result();
    }
    public function upselling()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->where('tipe=2');
        return $this->db->get()->result();
    }
    public function bundling()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->where('tipe=3');
        return $this->db->get()->result();
    }
    public function all()
    {
        $this->db->select('*');
        $this->db->from('produk');
        return $this->db->get()->result();
    }
    public function admin()
    {
        $level = '1';
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level', $level);
        return $this->db->get()->result();
    }
    public function pemilik()
    {
        $level = '2';
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level', $level);
        return $this->db->get()->result();
    }
    public function kurir()
    {
        $level = '3';
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level', $level);
        return $this->db->get()->result();
    }
    public function cek_user($username)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        return $this->db->get()->result();
    }
    public function promo()
    {
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->join('produk', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->where('potongan!=0');
        return $this->db->get()->result();
    }
    public function cek_promo($id_promo)
    {
        $potongan = '0';
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->where('id_promo', $id_promo);
        $this->db->where('potongan!=', $potongan);
        return $this->db->get()->result();
    }
    public function get_produk($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('tipe', $id);
        return $this->db->get()->result();
    }
    public function akun()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result();
    }

    public function kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        return $this->db->get()->result();
    }
    public function desa()
    {
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->join('kecamatan', 'desa.kode = kecamatan.id_kecamatan', 'left');
        return $this->db->get()->result();
    }
    public function cek_kecamatan($nama)
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('nama_kecamatan', $nama);
        return $this->db->get()->result();
    }
    public function cek_desa($nama)
    {
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->where('nama_desa', $nama);
        return $this->db->get()->result();
    }
}
