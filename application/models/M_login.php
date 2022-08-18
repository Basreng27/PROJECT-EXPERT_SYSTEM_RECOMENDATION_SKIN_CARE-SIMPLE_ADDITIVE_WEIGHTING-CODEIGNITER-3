<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    function cek_akun($data_akun)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('username', $data_akun['username']);
        $this->db->where('password', $data_akun['password']);

        $query = $this->db->get();
        return $query;
    }
}
