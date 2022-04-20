<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelola_data');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            '%s Harus Diisi!!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            '%s Harus Diisi!!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/vlogin');
        } else {
            //realtime promo selesai
            $date = date('Y-m-d');
            $promo = $this->m_kelola_data->promo();
            foreach ($promo as $key => $value) {
                if ($value->selesai < $date) {
                    $data = array(
                        'potongan' => '0',
                        'mulai' => '0',
                        'selesai' => '0'
                    );
                    $this->db->where('id_promo', $value->id_promo);
                    $this->db->update('promo', $data);
                }
            }
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->admin_login->login($data['username'], $data['password']);
        }
    }
    public function logout_admin()
    {
        $this->admin_login->logout();
    }
}
