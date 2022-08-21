<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function get_all_akun()
	{
		$this->db->select('*');
		$this->db->from('akun');

		$query = $this->db->get();
		return $query;
	}

	function product_x_jenis()
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('jenis', 'product.kode_jenis = jenis.kode_jenis');

		$query = $this->db->get();
		return $query;
	}

	function product_remaja_x_jenis()
	{
		$this->db->select('*');
		$this->db->from('product_remaja');
		$this->db->join('jenis', 'product_remaja.kode_jenis = jenis.kode_jenis');

		$query = $this->db->get();
		return $query;
	}

	function kriteria_x_subkriteria()
	{
		$this->db->select('*');
		$this->db->from('subkriteria');
		$this->db->join('kriteria', 'subkriteria.kode_kriteria = kriteria.kode_kriteria');

		$query = $this->db->get();
		return $query;
	}

	function kriteria_x_subkriteria_remaja()
	{
		$this->db->select('*');
		$this->db->from('subkriteria_remaja');
		$this->db->join('kriteria_remaja', 'subkriteria_remaja.kode_kriteria_remaja = kriteria_remaja.kode_kriteria_remaja');

		$query = $this->db->get();
		return $query;
	}

	function cek_admin($username)
	{
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('username', $username);

		$query = $this->db->get();
		return $query;
	}

	function cek_subkriteria($kode_kriteria, $nilai)
	{
		$this->db->select('*');
		$this->db->from('subkriteria');
		$this->db->where('kode_kriteria', $kode_kriteria);
		$this->db->where('nilai', $nilai);

		$query = $this->db->get();
		return $query;
	}

	function cek_subkriteria_remaja($kode_kriteria, $nilai)
	{
		$this->db->select('*');
		$this->db->from('subkriteria_remaja');
		$this->db->where('kode_kriteria_remaja', $kode_kriteria);
		$this->db->where('nilai', $nilai);

		$query = $this->db->get();
		return $query;
	}

	function cek_kriteria($kode_kriteria)
	{
		$this->db->select('*');
		$this->db->from('kriteria');
		$this->db->where('kode_kriteria', $kode_kriteria);

		$query = $this->db->get();
		return $query;
	}

	function cek_kriteria_remaja($kode_kriteria)
	{
		$this->db->select('*');
		$this->db->from('kriteria_remaja');
		$this->db->where('kode_kriteria_remaja', $kode_kriteria);

		$query = $this->db->get();
		return $query;
	}

	function cek_jenis($kode_jenis)
	{
		$this->db->select('*');
		$this->db->from('jenis');
		$this->db->where('kode_jenis', $kode_jenis);

		$query = $this->db->get();
		return $query;
	}

	function cek_product($kode_product)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('kode_product', $kode_product);

		$query = $this->db->get();
		return $query;
	}

	function cek_product_remaja($kode_product)
	{
		$this->db->select('*');
		$this->db->from('product_remaja');
		$this->db->where('kode_product_remaja', $kode_product);

		$query = $this->db->get();
		return $query;
	}

	function insert_akun($data_akun)
	{
		$this->db->set('username', $data_akun['username']);
		$this->db->set('password', $data_akun['password']);
		$this->db->set('nama', $data_akun['nama']);
		$this->db->set('hak', $data_akun['hak']);
		$this->db->insert('akun');
	}

	function insert_subkriteria($data_subkriteria)
	{
		$this->db->set('kode_kriteria', $data_subkriteria['kode_kriteria']);
		$this->db->set('nilai', $data_subkriteria['nilai']);
		$this->db->set('keterangan', $data_subkriteria['keterangan']);
		$this->db->set('bobot', $data_subkriteria['bobot']);
		$this->db->insert('subkriteria');
	}

	function insert_subkriteria_remaja($data_subkriteria)
	{
		$this->db->set('kode_kriteria_remaja', $data_subkriteria['kode_kriteria_remaja']);
		$this->db->set('nilai', $data_subkriteria['nilai']);
		$this->db->set('keterangan', $data_subkriteria['keterangan']);
		$this->db->set('bobot', $data_subkriteria['bobot']);
		$this->db->insert('subkriteria_remaja');
	}

	function insert_kriteria($data_kriteria)
	{
		$this->db->set('kode_kriteria', $data_kriteria['kode_kriteria']);
		$this->db->set('nama_kriteria', $data_kriteria['nama_kriteria']);
		$this->db->set('sifat_kriteria', $data_kriteria['sifat_kriteria']);
		$this->db->insert('kriteria');
	}

	function insert_kriteria_remaja($data_kriteria)
	{
		$this->db->set('kode_kriteria_remaja', $data_kriteria['kode_kriteria_remaja']);
		$this->db->set('nama_kriteria', $data_kriteria['nama_kriteria']);
		$this->db->set('sifat_kriteria', $data_kriteria['sifat_kriteria']);
		$this->db->insert('kriteria_remaja');
	}

	function insert_jenis($data_jenis)
	{
		$this->db->set('kode_jenis', $data_jenis['kode_jenis']);
		$this->db->set('jenis', $data_jenis['jenis']);
		$this->db->insert('jenis');
	}

	function insert_product($data_product)
	{
		$this->db->set('kode_product', $data_product['kode_product']);
		$this->db->set('nama_product', $data_product['nama_product']);
		$this->db->set('kode_jenis', $data_product['kode_jenis']);
		$this->db->set('harga', $data_product['harga']);
		$this->db->insert('product');
	}

	function insert_product_remaja($data_product)
	{
		$this->db->set('kode_product_remaja', $data_product['kode_product_remaja']);
		$this->db->set('nama_product', $data_product['nama_product']);
		$this->db->set('harga', $data_product['harga']);
		$this->db->set('kode_jenis', $data_product['kode_jenis']);
		$this->db->insert('product_remaja');
	}

	function add_riwayat($data_product)
	{
		$this->db->set('kode_product', $data_product['kode_product']);
		$this->db->set('nama_product', $data_product['nama_product']);
		$this->db->set('kode_jenis', $data_product['kode_jenis']);
		$this->db->insert('riwayat_delete');
	}

	function add_riwayat_remaja($data_product)
	{
		$this->db->set('kode_product_remaja', $data_product['kode_product_remaja']);
		$this->db->set('nama_product', $data_product['nama_product']);
		$this->db->set('kode_jenis', $data_product['kode_jenis']);
		$this->db->insert('riwayat_delete_remaja');
	}

	function add_pro($data_product)
	{
		$this->db->set('kode_product', $data_product['kode_product']);
		$this->db->set('nama_product', $data_product['nama_product']);
		$this->db->set('kode_jenis', $data_product['kode_jenis']);
		$this->db->insert('product');
	}

	function add_pro_re($data_product)
	{
		$this->db->set('kode_product_remaja', $data_product['kode_product_remaja']);
		$this->db->set('nama_product', $data_product['nama_product']);
		$this->db->set('kode_jenis', $data_product['kode_jenis']);
		$this->db->insert('product_remaja');
	}

	function get_data_user($new_username)
	{
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('username', $new_username);

		$query = $this->db->get();
		return $query;
	}

	function get_data_($new_username)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('kode_product', $new_username);

		$query = $this->db->get();
		return $query;
	}

	function get_data_r($new_username)
	{
		$this->db->select('*');
		$this->db->from('product_remaja');
		$this->db->where('kode_product_remaja', $new_username);

		$query = $this->db->get();
		return $query;
	}

	function delete_riwayat()
	{
		$this->db->select('*');
		$this->db->from('riwayat_delete');

		$query = $this->db->get();
		return $query;
	}

	function delete_riwayat_remaja()
	{
		$this->db->select('*');
		$this->db->from('riwayat_delete_remaja');

		$query = $this->db->get();
		return $query;
	}

	function delete_data_riwayat($new_id)
	{
		$this->db->select('*');
		$this->db->where('id', $new_id);
		$this->db->delete('riwayat_delete');
	}

	function delete_ri_product($new_id)
	{
		$this->db->select('*');
		$this->db->where('id', $new_id);
		$this->db->delete('riwayat_delete');
	}

	function delete_ri_product_re($new_id)
	{
		$this->db->select('*');
		$this->db->where('id', $new_id);
		$this->db->delete('riwayat_delete_remaja');
	}

	function get_product($new_kode_product)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('kode_product', $new_kode_product);

		$query = $this->db->get();
		return $query;
	}

	function get_product_remaja($new_kode_product)
	{
		$this->db->select('*');
		$this->db->from('product_remaja');
		$this->db->where('kode_product_remaja', $new_kode_product);

		$query = $this->db->get();
		return $query;
	}

	function get_ri_product($new_id)
	{
		$this->db->select('*');
		$this->db->from('riwayat_delete');
		$this->db->where('id', $new_id);

		$query = $this->db->get();
		return $query;
	}

	function get_ri_product_re($new_id)
	{
		$this->db->select('*');
		$this->db->from('riwayat_delete_remaja');
		$this->db->where('id', $new_id);

		$query = $this->db->get();
		return $query;
	}

	function get_data_kode($kode)
	{
		$this->db->select('*');
		$this->db->from('bobot');
		$this->db->join('kriteria', 'bobot.kode_kriteria = kriteria.kode_kriteria');
		$this->db->where('kode_product', $kode);

		$query = $this->db->get();
		return $query;
	}

	function get_data_kode_($kode)
	{
		$this->db->select('*');
		$this->db->from('bobot_remaja');
		$this->db->join('kriteria_remaja', 'bobot_remaja.kode_kriteria_remaja = kriteria_remaja.kode_kriteria_remaja');
		$this->db->where('kode_product_remaja', $kode);

		$query = $this->db->get();
		return $query;
	}

	function get_data_kriteria($new_kode_kriteria)
	{
		$this->db->select('*');
		$this->db->from('kriteria');
		$this->db->where('kode_kriteria', $new_kode_kriteria);

		$query = $this->db->get();
		return $query;
	}

	function get_data_kriteria_remaja($new_kode_kriteria)
	{
		$this->db->select('*');
		$this->db->from('kriteria_remaja');
		$this->db->where('kode_kriteria_remaja', $new_kode_kriteria);

		$query = $this->db->get();
		return $query;
	}

	function get_data_product($new_kode_product)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('kode_product', $new_kode_product);

		$query = $this->db->get();
		return $query;
	}

	function get_data_product_remaja($new_kode_product)
	{
		$this->db->select('*');
		$this->db->from('product_remaja');
		$this->db->where('kode_product_remaja', $new_kode_product);

		$query = $this->db->get();
		return $query;
	}

	function get_data_jenis($new_kode_jenis)
	{
		$this->db->select('*');
		$this->db->from('jenis');
		$this->db->where('kode_jenis', $new_kode_jenis);

		$query = $this->db->get();
		return $query;
	}

	function update_data_user($username, $data_user)
	{
		$this->db->set('nama', $data_user['nama']);
		$this->db->set('password', $data_user['password']);
		$this->db->set('hak', $data_user['hak']);
		$this->db->where('username', $username);
		$this->db->update('akun');
	}

	function update_data_kriteria($kode_kriteria, $data_kriteria)
	{
		$this->db->set('nama_kriteria', $data_kriteria['nama_kriteria']);
		$this->db->set('sifat_kriteria', $data_kriteria['sifat_kriteria']);
		$this->db->where('kode_kriteria', $kode_kriteria);
		$this->db->update('kriteria');
	}

	function update_data_kriteria_remaja($kode_kriteria, $data_kriteria)
	{
		$this->db->set('nama_kriteria', $data_kriteria['nama_kriteria']);
		$this->db->set('sifat_kriteria', $data_kriteria['sifat_kriteria']);
		$this->db->where('kode_kriteria_remaja', $kode_kriteria);
		$this->db->update('kriteria_remaja');
	}

	function update_data_jenis($kode_jenis, $data_jenis)
	{
		$this->db->set('jenis', $data_jenis['jenis']);
		$this->db->where('kode_jenis', $kode_jenis);
		$this->db->update('jenis');
	}

	function update_data_product($kode_product, $data_product)
	{
		$this->db->set('nama_product', $data_product['nama_product']);
		$this->db->set('kode_jenis', $data_product['kode_jenis']);
		$this->db->set('harga', $data_product['harga']);
		$this->db->where('kode_product', $kode_product);
		$this->db->update('product');
	}

	function update_data_product_remaja($kode_product, $data_product)
	{
		$this->db->set('nama_product', $data_product['nama_product']);
		$this->db->set('kode_jenis', $data_product['kode_jenis']);
		$this->db->set('harga', $data_product['harga']);
		$this->db->where('kode_product_remaja', $kode_product);
		$this->db->update('product_remaja');
	}

	function delete_data_user($new_username)
	{
		$this->db->select('*');
		$this->db->where('username', $new_username);
		$this->db->delete('akun');
	}

	function delete_data_kriteria($new_kode_kriteria)
	{
		$this->db->select('*');
		$this->db->where('kode_kriteria', $new_kode_kriteria);
		$this->db->delete('kriteria');
	}

	function delete_data_kriteria_remaja($new_kode_kriteria)
	{
		$this->db->select('*');
		$this->db->where('kode_kriteria_remaja', $new_kode_kriteria);
		$this->db->delete('kriteria_remaja');
	}

	function delete_data_subkriteria($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->delete('subkriteria');
	}

	function delete_data_subkriteria_remaja($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->delete('subkriteria_remaja');
	}

	function delete_data_product($new_kode_product)
	{
		$this->db->select('*');
		$this->db->where('kode_product', $new_kode_product);
		$this->db->delete('product');
	}

	function delete_data_product_remaja($new_kode_product)
	{
		$this->db->select('*');
		$this->db->where('kode_product_remaja', $new_kode_product);
		$this->db->delete('product_remaja');
	}

	function delete_data_jenis($new_kode_jenis)
	{
		$this->db->select('*');
		$this->db->where('kode_jenis', $new_kode_jenis);
		$this->db->delete('jenis');
	}

	function get_all_product()
	{
		$this->db->select('*');
		$this->db->from('product');

		$query = $this->db->get();
		return $query;
	}

	function get_all_product_remaja()
	{
		$this->db->select('*');
		$this->db->from('product_remaja');

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

	function get_all_kriteria_remaja()
	{
		$this->db->select('*');
		$this->db->from('kriteria_remaja');

		$query = $this->db->get();
		return $query;
	}

	function get_all_jenis()
	{
		$this->db->select('*');
		$this->db->from('jenis');

		$query = $this->db->get();
		return $query;
	}

	function insert_bobot($kode_product, $kode_kriteria)
	{
		$this->db->set('kode_product', $kode_product);
		$this->db->set('kode_kriteria', $kode_kriteria);
		$this->db->insert('bobot');
	}

	function insert_bobot_remaja($kode_product, $kode_kriteria)
	{
		$this->db->set('kode_product_remaja', $kode_product);
		$this->db->set('kode_kriteria_remaja', $kode_kriteria);
		$this->db->insert('bobot_remaja');
	}

	function get_kriteria($kd_product)
	{
		$this->db->select('*');
		$this->db->from('bobot');
		$this->db->join('kriteria', 'kriteria.kode_kriteria = bobot.kode_kriteria');
		$this->db->where('kode_product', $kd_product);
		$query = $this->db->get();
		return $query;
	}

	function get_ket($kode_kriteria)
	{
		$this->db->select('*');
		$this->db->from('subkriteria');
		// $this->db->join('subkriteria', 'subkriteria.kode_kriteria = kriteria.kode_kriteria');
		$this->db->where('kode_kriteria', $kode_kriteria);
		$query = $this->db->get();
		return $query;
	}

	function get_keter($kode_kriteria)
	{
		$this->db->select('*');
		$this->db->from('subkriteria_remaja');
		// $this->db->join('subkriteria', 'subkriteria.kode_kriteria = kriteria.kode_kriteria');
		$this->db->where('kode_kriteria_remaja', $kode_kriteria);
		$query = $this->db->get();
		return $query;
	}

	function get_kett($kode_kriteria, $nilai_bobot)
	{
		$this->db->select('*');
		$this->db->from('subkriteria');
		$this->db->where('kode_kriteria', $kode_kriteria);
		$this->db->where('nilai', $nilai_bobot);
		$query = $this->db->get();
		return $query;
	}

	function get_ketter($kode_kriteria, $nilai_bobot)
	{
		$this->db->select('*');
		$this->db->from('subkriteria_remaja');
		$this->db->where('kode_kriteria_remaja', $kode_kriteria);
		$this->db->where('nilai', $nilai_bobot);
		$query = $this->db->get();
		return $query;
	}

	function update_bobot($kode_product, $kode_kriteria, $nilai_bobot)
	{
		$this->db->set('nilai_bobot', $nilai_bobot);
		$this->db->where('kode_product', $kode_product);
		$this->db->where('kode_kriteria', $kode_kriteria);
		$this->db->update('bobot');
	}

	function update_bobot_remaja($kode_product, $kode_kriteria, $nilai_bobot)
	{
		$this->db->set('nilai_bobot', $nilai_bobot);
		$this->db->where('kode_product_remaja', $kode_product);
		$this->db->where('kode_kriteria_remaja', $kode_kriteria);
		$this->db->update('bobot_remaja');
	}
}
