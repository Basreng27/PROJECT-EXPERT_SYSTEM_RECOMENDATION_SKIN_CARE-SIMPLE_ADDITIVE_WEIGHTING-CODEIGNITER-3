<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

    public function dashboard_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $this->load->view('admin/h_admin');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('admin/f_admin');
    }

    public function product()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['product'] = $this->M_admin->product_x_jenis()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/product', $data);
        $this->load->view('admin/f_admin');
    }

    public function product_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['product_remaja'] = $this->M_admin->product_remaja_x_jenis()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/product_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function jenis()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['jenis'] = $this->M_admin->get_all_jenis()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/jenis', $data);
        $this->load->view('admin/f_admin');
    }

    public function kriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['kriteria'] = $this->M_admin->get_all_kriteria()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/kriteria', $data);
        $this->load->view('admin/f_admin');
    }

    public function kriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['kriteria_remaja'] = $this->M_admin->get_all_kriteria_remaja()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/kriteria_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function subkriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['subkriteria_remaja'] = $this->M_admin->kriteria_x_subkriteria_remaja()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/subkriteria_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function subkriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['subkriteria'] = $this->M_admin->kriteria_x_subkriteria()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/subkriteria', $data);
        $this->load->view('admin/f_admin');
    }

    public function riwayat_delete()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['riwayat_delete'] = $this->M_admin->delete_riwayat()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/riwayat_delete', $data);
        $this->load->view('admin/f_admin');
    }

    public function riwayat_delete_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['riwayat_delete_remaja'] = $this->M_admin->delete_riwayat_remaja()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/riwayat_delete_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function bobot()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        // $data['product'] = $this->M_admin->get_all_product()->result();
        $data['product'] = $this->M_admin->get_all_product()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/bobot', $data);
        $this->load->view('admin/f_admin');
    }

    public function bobot_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        // $data['product'] = $this->M_admin->get_all_product()->result();
        $data['product_remaja'] = $this->M_admin->get_all_product_remaja()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/bobot_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function d_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['akun'] = $this->M_admin->get_all_akun()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/d_admin', $data);
        $this->load->view('admin/f_admin');
    }

    public function tambah_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $this->load->view('admin/h_admin');
        $this->load->view('admin/tambah/tambah_admin');
        $this->load->view('admin/f_admin');
    }

    public function tambah_bobot()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $this->load->view('admin/h_admin');
        $this->load->view('admin/tambah/tambah_bobot');
        $this->load->view('admin/f_admin');
    }

    public function tambah_subkriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $this->load->view('admin/h_admin');
        $this->load->view('admin/tambah/tambah_subkriteria');
        $this->load->view('admin/f_admin');
    }

    public function tambah_subkriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $this->load->view('admin/h_admin');
        $this->load->view('admin/tambah/tambah_subkriteria_remaja');
        $this->load->view('admin/f_admin');
    }

    public function tambah_kriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $this->load->view('admin/h_admin');
        $this->load->view('admin/tambah/tambah_kriteria');
        $this->load->view('admin/f_admin');
    }

    public function tambah_kriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $this->load->view('admin/h_admin');
        $this->load->view('admin/tambah/tambah_kriteria_remaja');
        $this->load->view('admin/f_admin');
    }

    public function tambah_product()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['jenis'] = $this->M_admin->get_all_jenis()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/tambah/tambah_product', $data);
        $this->load->view('admin/f_admin');
    }

    public function tambah_product_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $data['jenis'] = $this->M_admin->get_all_jenis()->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/tambah/tambah_product_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function proses_tambah_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hak = $this->input->post('hak');

        $data_akun = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password),
            'hak' => $hak
        );

        $cek_akun = $this->M_admin->cek_admin($username)->num_rows();

        if ($cek_akun > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_admin', $data);
            $this->load->view('admin/f_admin');
        } else {
            $this->M_admin->insert_akun($data_akun);

            $data['berhasil'] = "berhasil";
            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_admin', $data);
            $this->load->view('admin/f_admin');
        }
    }

    public function proses_tambah_subkriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->input->post('kode_kriteria');
        $nilai = $this->input->post('nilai');
        $keterangan = $this->input->post('keterangan');
        $bobot = $this->input->post('bobot');

        $data_subkriteria = array(
            'kode_kriteria' => $kode_kriteria,
            'nilai' => $nilai,
            'bobot' => $bobot,
            'keterangan' => $keterangan
        );

        $cek_subkriteria = $this->M_admin->cek_subkriteria($kode_kriteria, $nilai)->num_rows();

        if ($cek_subkriteria > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_subkriteria', $data);
            $this->load->view('admin/f_admin');
        } else {
            $this->M_admin->insert_subkriteria($data_subkriteria);

            $data['berhasil'] = "berhasil";
            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_subkriteria', $data);
            $this->load->view('admin/f_admin');
        }
    }

    public function proses_tambah_subkriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->input->post('kode_kriteria_remaja');
        $nilai = $this->input->post('nilai');
        $keterangan = $this->input->post('keterangan');
        $bobot = $this->input->post('bobot');

        $data_subkriteria = array(
            'kode_kriteria_remaja' => $kode_kriteria,
            'nilai' => $nilai,
            'bobot' => $bobot,
            'keterangan' => $keterangan
        );

        $cek_subkriteria = $this->M_admin->cek_subkriteria_remaja($kode_kriteria, $nilai)->num_rows();

        if ($cek_subkriteria > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_subkriteria_remaja', $data);
            $this->load->view('admin/f_admin');
        } else {
            $this->M_admin->insert_subkriteria_remaja($data_subkriteria);

            $data['berhasil'] = "berhasil";
            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_subkriteria_remaja', $data);
            $this->load->view('admin/f_admin');
        }
    }

    public function proses_tambah_kriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->input->post('kode_kriteria');
        $nama_kriteria = $this->input->post('nama_kriteria');
        $sifat_kriteria = $this->input->post('sifat_kriteria');

        $data_kriteria = array(
            'kode_kriteria' => $kode_kriteria,
            'nama_kriteria' => $nama_kriteria,
            'sifat_kriteria' => $sifat_kriteria
        );

        $cek_kriteria = $this->M_admin->cek_kriteria($kode_kriteria)->num_rows();

        if ($cek_kriteria > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_kriteria', $data);
            $this->load->view('admin/f_admin');
        } else {
            $this->M_admin->insert_kriteria($data_kriteria);

            $product = $this->M_admin->get_all_product()->result();

            foreach ($product as $idat) {
                $this->M_admin->insert_bobot($idat->kode_product, $kode_kriteria);
            }

            // $kriteria = $this->M_admin->get_all_kriteria()->result();

            // foreach ($kriteria as $data) {
            //     $this->M_admin->insert_bobot($kode_product, $data->kode_kriteria);
            // }


            $data['berhasil'] = "berhasil";
            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_kriteria', $data);
            $this->load->view('admin/f_admin');
        }
    }

    public function proses_tambah_kriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->input->post('kode_kriteria_remaja');
        $nama_kriteria = $this->input->post('nama_kriteria');
        $sifat_kriteria = $this->input->post('sifat_kriteria');

        $data_kriteria = array(
            'kode_kriteria_remaja' => $kode_kriteria,
            'nama_kriteria' => $nama_kriteria,
            'sifat_kriteria' => $sifat_kriteria
        );

        $cek_kriteria = $this->M_admin->cek_kriteria_remaja($kode_kriteria)->num_rows();

        if ($cek_kriteria > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_kriteria_remaja', $data);
            $this->load->view('admin/f_admin');
        } else {
            $this->M_admin->insert_kriteria_remaja($data_kriteria);

            $product = $this->M_admin->get_all_product_remaja()->result();

            foreach ($product as $idat) {
                $this->M_admin->insert_bobot_remaja($idat->kode_product_remaja, $kode_kriteria);
            }

            // $kriteria = $this->M_admin->get_all_kriteria()->result();

            // foreach ($kriteria as $data) {
            //     $this->M_admin->insert_bobot($kode_product, $data->kode_kriteria);
            // }


            $data['berhasil'] = "berhasil";
            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_kriteria_remaja', $data);
            $this->load->view('admin/f_admin');
        }
    }

    public function proses_tambah_jenis()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_jenis = $this->input->post('kode_jenis');
        $jenis = $this->input->post('jenis');

        $data_jenis = array(
            'kode_jenis' => $kode_jenis,
            'jenis' => $jenis
        );

        $cek_jenis = $this->M_admin->cek_jenis($kode_jenis)->num_rows();

        if ($cek_jenis > 0) {
            $data['terdaftar'] = "ada";
            $data['jenis'] = $this->M_admin->get_all_jenis()->result();

            $this->load->view('admin/h_admin');
            $this->load->view('admin/jenis', $data);
            $this->load->view('admin/f_admin');
        } else {
            $this->M_admin->insert_jenis($data_jenis);
            $data['jenis'] = $this->M_admin->get_all_jenis()->result();

            $data['berhasil'] = "berhasil";
            $this->load->view('admin/h_admin');
            $this->load->view('admin/jenis', $data);
            $this->load->view('admin/f_admin');
        }
    }

    public function proses_tambah_product()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->input->post('kode_product');
        $nama_product = $this->input->post('nama_product');
        $kode_jenis = $this->input->post('kode_jenis');

        $data_product = array(
            'kode_product' => $kode_product,
            'kode_jenis' => $kode_jenis,
            'nama_product' => $nama_product
        );

        $cek_product = $this->M_admin->cek_product($kode_product)->num_rows();

        if ($cek_product > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_product', $data);
            $this->load->view('admin/f_admin');
        } else {
            $this->M_admin->insert_product($data_product);

            $kriteria = $this->M_admin->get_all_kriteria()->result();

            foreach ($kriteria as $idat) {
                $this->M_admin->insert_bobot($kode_product, $idat->kode_kriteria);
            }

            $data['berhasil'] = "berhasil";
            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_product', $data);
            $this->load->view('admin/f_admin');
        }
    }

    public function proses_tambah_product_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->input->post('kode_product_remaja');
        $nama_product = $this->input->post('nama_product');
        $kode_jenis = $this->input->post('kode_jenis');

        $data_product = array(
            'kode_product_remaja' => $kode_product,
            'kode_jenis' => $kode_jenis,
            'nama_product' => $nama_product
        );

        $cek_product = $this->M_admin->cek_product_remaja($kode_product)->num_rows();

        if ($cek_product > 0) {
            $data['terdaftar'] = "ada";

            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_product_remaja', $data);
            $this->load->view('admin/f_admin');
        } else {
            $this->M_admin->insert_product_remaja($data_product);

            $kriteria = $this->M_admin->get_all_kriteria_remaja()->result();

            foreach ($kriteria as $idat) {
                $this->M_admin->insert_bobot_remaja($kode_product, $idat->kode_kriteria_remaja);
            }

            $data['berhasil'] = "berhasil";
            $this->load->view('admin/h_admin');
            $this->load->view('admin/tambah/tambah_product_remaja', $data);
            $this->load->view('admin/f_admin');
        }
    }

    public function edit_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $username = $this->uri->segment(2);
        $new_username = str_replace('%20', ' ', $username);

        $data['data_username'] = $this->M_admin->get_data_user($new_username)->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/edit/edit_admin', $data);
        $this->load->view('admin/f_admin');
    }

    public function edit_bobot()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->uri->segment(2);
        $new_kode_product = str_replace('%20', ' ', $kode_product);

        $nama = $this->M_admin->get_data_($new_kode_product)->row();
        $data['nm'] = $nama->nama_product;

        $data['data_kode_product'] = $this->M_admin->get_data_kode($new_kode_product)->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/edit/edit_bobot', $data);
        $this->load->view('admin/f_admin');
    }

    public function edit_bobot_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->uri->segment(2);
        $new_kode_product = str_replace('%20', ' ', $kode_product);

        $nama = $this->M_admin->get_data_r($new_kode_product)->row();
        $data['nm'] = $nama->nama_product;

        $data['data_kode_product_remaja'] = $this->M_admin->get_data_kode_($new_kode_product)->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/edit/edit_bobot_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function edit_kriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->uri->segment(2);
        $new_kode_kriteria = str_replace('%20', ' ', $kode_kriteria);

        $data['data_kriteria'] = $this->M_admin->get_data_kriteria($new_kode_kriteria)->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/edit/edit_kriteria', $data);
        $this->load->view('admin/f_admin');
    }

    public function edit_kriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->uri->segment(2);
        $new_kode_kriteria = str_replace('%20', ' ', $kode_kriteria);

        $data['data_kriteria_remaja'] = $this->M_admin->get_data_kriteria_remaja($new_kode_kriteria)->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/edit/edit_kriteria_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function edit_jenis()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_jenis = $this->uri->segment(2);
        $new_kode_jenis = str_replace('%20', ' ', $kode_jenis);

        $data['data_jenis'] = $this->M_admin->get_data_jenis($new_kode_jenis)->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/edit/edit_jenis', $data);
        $this->load->view('admin/f_admin');
    }

    public function edit_product()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->uri->segment(2);
        $new_kode_product = str_replace('%20', ' ', $kode_product);

        $data['data_product'] = $this->M_admin->get_data_product($new_kode_product)->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/edit/edit_product', $data);
        $this->load->view('admin/f_admin');
    }

    public function edit_product_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->uri->segment(2);
        $new_kode_product = str_replace('%20', ' ', $kode_product);

        $data['data_product_remaja'] = $this->M_admin->get_data_product_remaja($new_kode_product)->result();

        $this->load->view('admin/h_admin');
        $this->load->view('admin/edit/edit_product_remaja', $data);
        $this->load->view('admin/f_admin');
    }

    public function proses_edit_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = $this->input->post('new_password');
        $hak = $this->input->post('hak');

        $data_user = array(
            'username' => $username,
            'nama' => $nama,
            'password' => md5($password),
            'hak' => $hak
        );

        $this->M_admin->update_data_user($username, $data_user);

        redirect('d_admin');
    }

    public function proses_edit_kriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->input->post('kode_kriteria');
        $nama_kriteria = $this->input->post('nama_kriteria');
        $sifat_kriteria = $this->input->post('sifat_kriteria');

        $data_kriteria = array(
            'kode_kriteria' => $kode_kriteria,
            'nama_kriteria' => $nama_kriteria,
            'sifat_kriteria' => $sifat_kriteria
        );


        $this->M_admin->update_data_kriteria($kode_kriteria, $data_kriteria);

        redirect('kriteria');
    }

    public function proses_edit_kriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->input->post('kode_kriteria_remaja');
        $nama_kriteria = $this->input->post('nama_kriteria');
        $sifat_kriteria = $this->input->post('sifat_kriteria');

        $data_kriteria = array(
            'kode_kriteria_remaja' => $kode_kriteria,
            'nama_kriteria' => $nama_kriteria,
            'sifat_kriteria' => $sifat_kriteria
        );


        $this->M_admin->update_data_kriteria_remaja($kode_kriteria, $data_kriteria);

        redirect('kriteria_remaja');
    }

    public function proses_edit_product()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->input->post('kode_product');
        $nama_product = $this->input->post('nama_product');
        $kode_jenis = $this->input->post('kode_jenis');

        $data_product = array(
            'kode_product' => $kode_product,
            'nama_product' => $nama_product,
            'kode_jenis' => $kode_jenis
        );

        $this->M_admin->update_data_product($kode_product, $data_product);

        redirect('product');
    }

    public function proses_edit_product_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->input->post('kode_product_remaja');
        $nama_product = $this->input->post('nama_product');
        $kode_jenis = $this->input->post('kode_jenis');

        $data_product = array(
            'kode_product_remaja' => $kode_product,
            'nama_product' => $nama_product,
            'kode_jenis' => $kode_jenis
        );

        $this->M_admin->update_data_product_remaja($kode_product, $data_product);

        redirect('product_remaja');
    }

    public function delete_product_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->uri->segment(2);
        $new_kode_product = str_replace('%20', ' ', $kode_product);

        $data_pro = $this->M_admin->get_product_remaja($new_kode_product)->row();

        $data_product = array(
            'kode_product_remaja' => $data_pro->kode_product_remaja,
            'nama_product' => $data_pro->nama_product,
            'kode_jenis' => $data_pro->kode_jenis
        );

        $this->M_admin->add_riwayat_remaja($data_product);

        $this->M_admin->delete_data_product_remaja($new_kode_product);

        redirect('product_remaja');
    }

    public function proses_edit_jenis()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_jenis = $this->input->post('kode_jenis');
        $jenis = $this->input->post('jenis');

        $data_jenis = array(
            'kode_jenis' => $kode_jenis,
            'jenis' => $jenis
        );

        $this->M_admin->update_data_jenis($kode_jenis, $data_jenis);

        redirect('jenis');
    }

    public function delete_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $username = $this->uri->segment(2);
        $new_username = str_replace('%20', ' ', $username);

        $this->M_admin->delete_data_user($new_username);

        redirect('d_admin');
    }

    public function delete_kriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->uri->segment(2);
        $new_kode_kriteria = str_replace('%20', ' ', $kode_kriteria);

        $this->M_admin->delete_data_kriteria($new_kode_kriteria);

        redirect('kriteria');
    }

    public function delete_kriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_kriteria = $this->uri->segment(2);
        $new_kode_kriteria = str_replace('%20', ' ', $kode_kriteria);

        $this->M_admin->delete_data_kriteria_remaja($new_kode_kriteria);

        redirect('kriteria_remaja');
    }

    public function hapus_permanen()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $id = $this->uri->segment(2);
        $new_id = str_replace('%20', ' ', $id);

        $this->M_admin->delete_data_riwayat($new_id);

        redirect('riwayat_delete');
    }

    public function delete_subkriteria()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $id = $this->uri->segment(2);
        $new_id = str_replace('%20', ' ', $id);

        $this->M_admin->delete_data_subkriteria($new_id);

        redirect('subkriteria');
    }

    public function delete_subkriteria_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $id = $this->uri->segment(2);
        $new_id = str_replace('%20', ' ', $id);

        $this->M_admin->delete_data_subkriteria_remaja($new_id);

        redirect('subkriteria_remaja');
    }

    public function delete_jenis()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_jenis = $this->uri->segment(2);
        $new_kode_jenis = str_replace('%20', ' ', $kode_jenis);

        $this->M_admin->delete_data_jenis($new_kode_jenis);

        redirect('jenis');
    }

    public function kembalikan_data()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $id = $this->uri->segment(2);
        $new_id = str_replace('%20', ' ', $id);

        $data_ri_pro = $this->M_admin->get_ri_product($id)->row();
        $kd_pro = $data_ri_pro->kode_product;

        $data_ri_product = array(
            'kode_product' => $data_ri_pro->kode_product,
            'nama_product' => $data_ri_pro->nama_product,
            'kode_jenis' => $data_ri_pro->kode_jenis
        );

        $this->M_admin->add_pro($data_ri_product);

        $kriteria = $this->M_admin->get_all_kriteria()->result();

        foreach ($kriteria as $idat) {
            $this->M_admin->insert_bobot($kd_pro, $idat->kode_kriteria);
        }

        $this->M_admin->delete_ri_product($new_id);

        redirect('riwayat_delete');
    }

    public function kembalikan_data_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $id = $this->uri->segment(2);
        $new_id = str_replace('%20', ' ', $id);

        $data_ri_pro = $this->M_admin->get_ri_product_re($id)->row();
        $kd_pro = $data_ri_pro->kode_product_remaja;

        $data_ri_product = array(
            'kode_product_remaja' => $data_ri_pro->kode_product_remaja,
            'nama_product' => $data_ri_pro->nama_product,
            'kode_jenis' => $data_ri_pro->kode_jenis
        );

        $this->M_admin->add_pro_re($data_ri_product);

        $kriteria = $this->M_admin->get_all_kriteria_remaja()->result();

        foreach ($kriteria as $idat) {
            $this->M_admin->insert_bobot_remaja($kd_pro, $idat->kode_kriteria_remaja);
        }

        $this->M_admin->delete_ri_product_re($new_id);

        redirect('riwayat_delete_remaja');
    }

    public function delete_product()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kode_product = $this->uri->segment(2);
        $new_kode_product = str_replace('%20', ' ', $kode_product);

        $data_pro = $this->M_admin->get_product($new_kode_product)->row();

        $data_product = array(
            'kode_product' => $data_pro->kode_product,
            'nama_product' => $data_pro->nama_product,
            'kode_jenis' => $data_pro->kode_jenis
        );

        $this->M_admin->add_riwayat($data_product);

        $this->M_admin->delete_data_product($new_kode_product);

        redirect('product');
    }

    public function simpan_bobot()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kd_product = $this->uri->segment(2);
        $kd_kriteria = $this->uri->segment(3);
        $nilai_bobot = $this->uri->segment(4);
        $kode_product = str_replace('%20', ' ', $kd_product);
        $kode_kriteria = str_replace('%20', ' ', $kd_kriteria);

        $this->M_admin->update_bobot($kode_product, $kode_kriteria, $nilai_bobot);

        redirect('bobot');
    }

    public function save_bobot()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }


        $kd_product = $this->input->post('kd_product');
        $kd_kriteria = $this->input->post('kd_kriteria');
        $nilai_bobot = $this->input->post('ket');

        // $data_bobot = array(
        //     'kd_product' => $kd_product,
        //     'kd_kriteria' => $kd_kriteria,
        //     'keterangan' => $keterangan
        // );

        // echo "<pre>" . print_r($data_bobot, true);
        // exit(1);
        $this->M_admin->update_bobot($kd_product, $kd_kriteria, $nilai_bobot);

        redirect('bobot');
    }

    public function save_bobot_remaja()
    {
        if ($this->session->userdata('status') != "login") {
            redirect('home');
        }

        $kd_product = $this->input->post('kd_product');
        $kd_kriteria = $this->input->post('kd_kriteria');
        $nilai_bobot = $this->input->post('ket');

        // $data_bobot = array(
        //     'kd_product' => $kd_product,
        //     'kd_kriteria' => $kd_kriteria,
        //     'keterangan' => $keterangan
        // );

        // echo "<pre>" . print_r($data_bobot, true);
        // exit(1);
        $this->M_admin->update_bobot_remaja($kd_product, $kd_kriteria, $nilai_bobot);

        redirect('bobot_remaja');
    }
}
