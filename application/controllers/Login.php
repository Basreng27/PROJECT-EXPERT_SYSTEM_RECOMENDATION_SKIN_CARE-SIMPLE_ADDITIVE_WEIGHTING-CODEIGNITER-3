<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('url_helper');
        $this->load->helper('text');
        $this->load->helper('date');
        $this->load->library('pagination');
        $this->load->model('M_login');
        $this->load->model('M_admin');
        $this->load->model('M_page');
    }

    public function login_page()
    {
        $this->load->view('page/login');
    }

    function proses_login()
    {
        if ($this->session->userdata('status') == "login") {
            if ($this->session->userdata('hak') == "admin") {
                redirect('dashboard_admin');
            }
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data_akun = array(
            'username' => $username,
            'password' => md5($password)
        );

        $cek = $this->M_login->cek_akun($data_akun)->num_rows();

        if ($cek > 0) {
            $akun = $this->M_login->cek_akun($data_akun)->row_array();

            if ($akun['hak'] == 'admin') {
                $data_session = array(
                    'username' => $username,
                    'nama' => $akun['nama'],
                    'hak' => $akun['hak'],
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);
                redirect(base_url('dashboard_admin'));
            } else {
                redirect('login');
            }
        } else {
            $data['tidak_terdaftar'] = "Tidak Terdaftar";

            $this->load->view('page/login', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
