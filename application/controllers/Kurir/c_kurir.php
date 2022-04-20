<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_kurir extends CI_Controller
{
    public function index()
    {
        $this->load->view('kurir/head');
        $this->load->view('kurir/nav');
        $this->load->view('kurir/vkurir');
        $this->load->view('kurir/footer');
    }
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            '%s Harus Diisi!!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            '%s Harus Diisi!!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kurir/vlogin');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->kurir_login->login($data['username'], $data['password']);
        }
    }
    public function logout()
    {
        $this->kurir_login->logout();
    }
}
