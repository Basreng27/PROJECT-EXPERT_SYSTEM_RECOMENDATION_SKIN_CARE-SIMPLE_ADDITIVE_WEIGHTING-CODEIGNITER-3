<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_page extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    function get_nm_krit()
    {
        $this->db->select('*');
        $this->db->from('kriteria');
        $query = $this->db->get();
        return $query;
    }

    function get_nm_krit_re()
    {
        $this->db->select('*');
        $this->db->from('kriteria_remaja');
        $query = $this->db->get();
        return $query;
    }

    function get_subkriteria()
    {
        $this->db->select('*');
        $this->db->from('subkriteria');
        $query = $this->db->get();
        return $query;
    }

    function get_subkriteria_r()
    {
        $this->db->select('*');
        $this->db->from('subkriteria_remaja');
        $query = $this->db->get();
        return $query;
    }

    function get_product()
    {
        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();
        return $query;
    }

    function get_bobot()
    {
        $this->db->select('*');
        $this->db->from('bobot');
        $query = $this->db->get();
        return $query;
    }

    function get_sifat($kode_kriteria)
    {
        $this->db->select('*');
        $this->db->from('kriteria');
        $this->db->where('kode_kriteria', $kode_kriteria);
        $query = $this->db->get();
        return $query;
    }

    function bobot_x_kriteria()
    {
        $this->db->select('*');
        $this->db->from('bobot');
        $this->db->join('kriteria', 'bobot.kode_kriteria = kriteria.kode_kriteria');

        $query = $this->db->get();
        return $query;
    }

    function bobot_r_x_kriteria_r()
    {
        $this->db->select('*');
        $this->db->from('bobot_remaja');
        $this->db->join('kriteria_remaja', 'bobot_remaja.kode_kriteria_remaja = kriteria_remaja.kode_kriteria_remaja');

        $query = $this->db->get();
        return $query;
    }

    function get_krite($kode_kriteria)
    {
        $this->db->select('*');
        $this->db->from('kriteria');
        $this->db->where('kode_kriteria', $kode_kriteria);
        $query = $this->db->get();
        return $query;
    }

    function get_minim($kode_kriteria)
    {
        $this->db->select_min('nilai_bobot');
        $this->db->from('bobot');
        $this->db->where('kode_kriteria', $kode_kriteria);
        $query = $this->db->get();
        return $query;
    }

    function get_minim_r($kode_kriteria)
    {
        $this->db->select_min('nilai_bobot');
        $this->db->from('bobot_remaja');
        $this->db->where('kode_kriteria_remaja', $kode_kriteria);
        $query = $this->db->get();
        return $query;
    }

    function get_maximal($kode_kriteria)
    {
        $this->db->select_max('nilai_bobot');
        $this->db->from('bobot');
        $this->db->where('kode_kriteria', $kode_kriteria);
        $query = $this->db->get();
        return $query;
    }

    function get_maximal_r($kode_kriteria)
    {
        $this->db->select_max('nilai_bobot');
        $this->db->from('bobot_remaja');
        $this->db->where('kode_kriteria_remaja', $kode_kriteria);
        $query = $this->db->get();
        return $query;
    }

    function get_nm_ket($kode_kriteria)
    {
        $this->db->select('*');
        $this->db->from('subkriteria');
        $this->db->where('kode_kriteria', $kode_kriteria);

        $query = $this->db->get();
        return $query;
    }

    function get_nm_ket_re($kode_kriteria)
    {
        $this->db->select('*');
        $this->db->from('subkriteria_remaja');
        $this->db->where('kode_kriteria_remaja', $kode_kriteria);

        $query = $this->db->get();
        return $query;
    }

    function get_all_kriteria()
    {
        $this->db->select('*');
        $this->db->from('kriteria');

        $query = $this->db->get();
        return $query;
    }

    function get_tampung($kode_product)
    {
        $this->db->select('*');
        $this->db->from('bobot');
        $this->db->where('kode_product', $kode_product);

        $query = $this->db->get();
        return $query;
    }

    function get_tampung_r($kode_product)
    {
        $this->db->select('*');
        $this->db->from('bobot_remaja');
        $this->db->where('kode_product_remaja', $kode_product);

        $query = $this->db->get();
        return $query;
    }

    function update_tampung($kode_product, $kode_kriteria, $hasil)
    {
        $this->db->set('tampung', $hasil);
        $this->db->where('kode_product', $kode_product);
        $this->db->where('kode_kriteria', $kode_kriteria);
        $this->db->update('bobot');
    }

    function update_tampung_r($kode_product, $kode_kriteria, $hasil)
    {
        $this->db->set('tampung', $hasil);
        $this->db->where('kode_product_remaja', $kode_product);
        $this->db->where('kode_kriteria_remaja', $kode_kriteria);
        $this->db->update('bobot_remaja');
    }

    function insert_data($data_ceker, $kd)
    {
        $this->db->set('nama', $data_ceker['nama']);
        $this->db->set('usia', $data_ceker['usia']);
        $this->db->set('kode_product', $kd);
        $this->db->insert('data');
    }

    function insert_data_r($data_ceker, $kd)
    {
        $this->db->set('nama', $data_ceker['nama']);
        $this->db->set('usia', $data_ceker['usia']);
        $this->db->set('kode_product_remaja', $kd);
        $this->db->insert('data_remaja');
    }

    function get_terbesar()
    {
        $this->db->select('*');
        $this->db->from('bobot');
        $this->db->order_by('tampung_ranking', 'desc');

        $query = $this->db->get();
        return $query;
    }

    function get_terbesar_r()
    {
        $this->db->select('*');
        $this->db->from('bobot_remaja');
        $this->db->order_by('tampung_ranking', 'desc');

        $query = $this->db->get();
        return $query;
    }

    function terbesar()
    {
        $this->db->select('*');
        $this->db->from('data');
        $this->db->order_by('id', 'desc');

        $query = $this->db->get();
        return $query;
    }

    function terbesar_r()
    {
        $this->db->select('*');
        $this->db->from('data_remaja');
        $this->db->order_by('id', 'desc');

        $query = $this->db->get();
        return $query;
    }

    function add_rank($kode_product, $hasil)
    {
        $this->db->set('tampung_ranking', $hasil);
        $this->db->where('kode_product', $kode_product);
        $this->db->update('bobot');
    }

    function add_rank_r($kode_product, $hasil)
    {
        $this->db->set('tampung_ranking', $hasil);
        $this->db->where('kode_product_remaja', $kode_product);
        $this->db->update('bobot_remaja');
    }

    function hsl($kd)
    {
        $this->db->select('*');
        $this->db->from('data');
        $this->db->join('product', 'data.kode_product = product.kode_product');
        $this->db->where('id', $kd);

        $query = $this->db->get();
        return $query;
    }

    function hsl_r($kd)
    {
        $this->db->select('*');
        $this->db->from('data_remaja');
        $this->db->join('product_remaja', 'data_remaja.kode_product_remaja = product_remaja.kode_product_remaja');
        $this->db->where('id', $kd);

        $query = $this->db->get();
        return $query;
    }

    function kd_product()
    {
        $this->db->distinct();
        $this->db->select('kode_product, tampung_ranking');
        $this->db->from('bobot');
        // $this->db->join('product', 'bobot.kode_product = product.kode_product');
        $this->db->order_by('tampung_ranking', 'desc');
        $this->db->limit(5);

        $query = $this->db->get();
        return $query;
    }

    function kd_product_r()
    {
        $this->db->distinct();
        $this->db->select('kode_product_remaja, tampung_ranking');
        $this->db->from('bobot_remaja');
        // $this->db->join('product', 'bobot.kode_product = product.kode_product');
        $this->db->order_by('tampung_ranking', 'desc');
        $this->db->limit(5);

        $query = $this->db->get();
        return $query;
    }

    function nm_p()
    {
        $this->db->select('*');
        $this->db->from('bobot');
        $this->db->join('product', 'bobot.kode_product = product.kode_product');
        // $this->db->join('kriteria', 'bobot.kode_kriteria = kriteria.kode_kriteria');
        $this->db->order_by('tampung_ranking', 'desc');

        $query = $this->db->get();
        return $query;
    }

    function get_all_product()
    {
        $this->db->select('*');
        $this->db->from('product');

        $query = $this->db->get();
        return $query;
    }


    function get_all_product_r()
    {
        $this->db->select('*');
        $this->db->from('product_remaja');

        $query = $this->db->get();
        return $query;
    }
}
