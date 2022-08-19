<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
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

	public function home()
	{
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('hak') == "admin") {
				redirect('dashboard_admin');
			}
		}

		$this->load->view('page/header');
		$this->load->view('page/home');
		$this->load->view('page/footer');
	}

	public function rekomendasi()
	{
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('hak') == "admin") {
				redirect('dashboard_admin');
			}
		}

		$this->load->view('page/header');
		$this->load->view('page/rekomendasi');
		$this->load->view('page/footer');
	}

	public function rekomendasi_remaja()
	{
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('hak') == "admin") {
				redirect('dashboard_admin');
			}
		}

		$this->load->view('page/header');
		$this->load->view('page/rekomendasi_remaja');
		$this->load->view('page/footer');
	}

	public function hasil()
	{
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('hak') == "admin") {
				redirect('dashboard_admin');
			}
		}

		$this->load->view('page/header');
		$this->load->view('page/hasil');
		$this->load->view('page/footer');
	}

	function trimArray($array)
	{
		$tampung = [];
		foreach ($array as $key => $list) {
			$tampung[$key] = trim($list);
		}

		return $tampung;
	}

	public function hitung()
	{
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('hak') == "admin") {
				redirect('dashboard_admin');
			}
		}

		//deklarasi pengambilan data
		$nama = $this->input->post('nama');
		$usia = $this->input->post('usia');
		$id_keterangan = implode(', ', (array)$_POST['id_keterangan']);
		$num = str_replace(', ', '', $id_keterangan);

		$data_ceker = array(
			'nama' => $nama,
			'usia' => $usia
		);

		if ($num == false) {
			$data['kosong'] = 'data kosong';

			$this->load->view('page/header');
			$this->load->view('page/rekomendasi', $data);
			$this->load->view('page/footer');
		} else {
			// echo "<pre>" . print_r($hsl, true);
			// exit(1);

			if ($usia <= 22) {
				$data['usia_muda'] = 'usia tidak mencukupi';

				$this->load->view('page/header');
				$this->load->view('page/rekomendasi', $data);
				$this->load->view('page/footer');
			} else {
				//ambil semua bobot lalu di arraykan
				$get_all_bobot = $this->M_page->bobot_x_kriteria()->result_array();
				$hasil = $get_all_bobot;

				foreach ($get_all_bobot as $key => $list) {

					//ambil semua subkriteria lalu di arraykan
					$get_all_subkriteria = $this->M_page->get_subkriteria()->result_array();
					$tmp = $get_all_subkriteria;
					foreach ($get_all_subkriteria as $kunci => $daftar) {
						//ambil data subkriteria
						$krit = $this->trimArray(explode(',', $id_keterangan)); // $ket = str_replace('%20', ' ', strtolower(trim($gejala)));

						//id subkriteria
						$id_subkriteria = $daftar['id'];

						//cek ada tidak dalam subkriteria
						if (in_array($id_subkriteria, $krit)) {
							$tmp[$kunci]['test'] = "ada";

							//ambil nilai pada id subkriteria
							$tmp[$kunci]['isi atribut'] = $daftar['nilai'];
							$isi = $tmp[$kunci]['isi atribut'];
							$tmp[$kunci]['id atribut yang ada'] = $daftar['id'];
						} else {
							$tmp[$kunci]['test'] = "tidak ada";
						}
					}

					// //ambil data kriteria sesuai kode kriteria
					if ($list['sifat_kriteria'] == "cost") {
						$hasil[$key]['sifat'] = "cost";

						//ambil data nilai terkecil pada atribut berdasarkan kode kriteria
						$get_min = $this->M_page->get_minim($list['kode_kriteria'])->row();
						$hasil[$key]['nilai minimal'] = $get_min->nilai_bobot;

						//hitung tahap 2
						$hasil[$key]['hitung tahap 2'] = $hasil[$key]['nilai minimal'] / $isi;

						//hasil hitung tahap 2
						$hasil[$key]['hasil hitung tahap 2'] = $hasil[$key]['hitung tahap 2'];
						$hsl = $hasil[$key]['hasil hitung tahap 2'];
					} else {
						$hasil[$key]['sifat'] = "benefit";

						//ambil data nilai terbesar pada atribut berdasarkan kode kriteria
						$get_max = $this->M_page->get_maximal($list['kode_kriteria'])->row();
						$hasil[$key]['nilai maximal'] = $get_max->nilai_bobot;

						//hitung tahap 2
						// $hasil[$key]['hitung tahap 2'] = $isi / $hasil[$key]['nilai maximal'];
						// $hasil[$key]['hitung tahap 2'] = ($isi != 0)  / $hasil[$key]['nilai maximal'];
						if ($hasil[$key]['nilai maximal'] == 0) {
							$hasil[$key]['nilai maximal'] = 1;
							$hasil[$key]['hitung tahap 2'] = $isi / $hasil[$key]['nilai maximal'];
						} else {
							$hasil[$key]['hitung tahap 2'] = $isi / $hasil[$key]['nilai maximal'];
						}

						// hasil hitung tahap 2
						$hasil[$key]['hasil hitung tahap 2'] = $hasil[$key]['hitung tahap 2'];
						$hsl = $hasil[$key]['hasil hitung tahap 2'];
					}

					//nilai hasil tahap 2
					$hasil[$key]['hasil tahap 2'] = $hsl;

					// //get nila bobot
					// $nb = $this->M_admin->get_nb($list['kode_product'])->result();
					//perhitungan ranking
					$hasil[$key]['perhitungan ranking'] = $hasil[$key]['hasil tahap 2'] * $list['nilai_bobot'];
					$hsl_akir = $hasil[$key]['perhitungan ranking'];

					//update tampung sementara
					$this->M_page->update_tampung($list['kode_product'], $list['kode_kriteria'], $hsl_akir);

					//hitung rank
					$tamp_ada = 0;
					$sementara_ada = 0;

					$rank =  $this->M_page->get_tampung($list['kode_product'])->result();
					foreach ($rank as $ada) {
						if ($ada->tampung > 0) {
							$tamp_ada = $ada->tampung;
						} else {
							$tamp_ada = 0;
						}
						$sementara_ada = $sementara_ada + $tamp_ada; //harusnya dikali
					}

					//masukan ke tampung ranking
					$this->M_page->add_rank($list['kode_product'], $sementara_ada);
				}

				$bigger = $this->M_page->get_terbesar()->row();
				$kd = $bigger->kode_product;

				// echo "<pre>" . print_r($hasil, true);
				// exit(1);
				$this->M_page->insert_data($data_ceker, $kd);

				$id_ = $this->M_page->terbesar()->row();
				$id_data = $id_->id;
				$idat['hsl'] = $this->M_page->hsl($id_data)->result();

				$this->load->view('page/header');
				$this->load->view('page/hasil', $idat);
				$this->load->view('page/footer');
			}
		}
	}

	public function hitung_remaja()
	{
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('hak') == "admin") {
				redirect('dashboard_admin');
			}
		}

		//deklarasi pengambilan data
		$nama = $this->input->post('nama');
		$usia = $this->input->post('usia');
		$id_keterangan = implode(', ', (array)$_POST['id_keterangan']);

		$data_ceker = array(
			'nama' => $nama,
			'usia' => $usia
		);

		$num = str_replace(', ', '', $id_keterangan);

		if ($num == false) {
			$data['kosong'] = 'data kosong';

			$this->load->view('page/header');
			$this->load->view('page/rekomendasi', $data);
			$this->load->view('page/footer');
		} else {
			if ($usia < 10) {
				$data['usia_kurang'] = 'usia tidak mencukupi';

				$this->load->view('page/header');
				$this->load->view('page/rekomendasi_remaja', $data);
				$this->load->view('page/footer');
			} elseif ($usia > 22) {
				$data['usia_lebih'] = 'usia tidak mencukupi';

				$this->load->view('page/header');
				$this->load->view('page/rekomendasi_remaja', $data);
				$this->load->view('page/footer');
			} else {
				//ambil semua bobot lalu di arraykan
				$get_all_bobot = $this->M_page->bobot_r_x_kriteria_r()->result_array();
				$hasil = $get_all_bobot;

				foreach ($get_all_bobot as $key => $list) {

					//ambil semua subkriteria lalu di arraykan
					$get_all_subkriteria = $this->M_page->get_subkriteria_r()->result_array();
					$tmp = $get_all_subkriteria;
					foreach ($get_all_subkriteria as $kunci => $daftar) {
						//ambil data subkriteria
						$krit = $this->trimArray(explode(',', $id_keterangan)); // $ket = str_replace('%20', ' ', strtolower(trim($gejala)));

						//id subkriteria
						$id_subkriteria = $daftar['id'];

						//cek ada tidak dalam subkriteria
						if (in_array($id_subkriteria, $krit)) {
							$tmp[$kunci]['test'] = "ada";

							//ambil nilai pada id subkriteria
							$tmp[$kunci]['isi atribut'] = $daftar['nilai'];
							$isi = $tmp[$kunci]['isi atribut'];
							$tmp[$kunci]['id atribut yang ada'] = $daftar['id'];
						} else {
							$tmp[$kunci]['test'] = "tidak ada";
						}
					}

					// //ambil data kriteria sesuai kode kriteria
					if ($list['sifat_kriteria'] == "cost") {
						$hasil[$key]['sifat'] = "cost";

						//ambil data nilai terkecil pada atribut berdasarkan kode kriteria
						$get_min = $this->M_page->get_minim_r($list['kode_kriteria_remaja'])->row();
						$hasil[$key]['nilai minimal'] = $get_min->nilai_bobot;

						//hitung tahap 2
						$hasil[$key]['hitung tahap 2'] = $hasil[$key]['nilai minimal'] / $isi;

						//hasil hitung tahap 2
						$hasil[$key]['hasil hitung tahap 2'] = $hasil[$key]['hitung tahap 2'];
						$hsl = $hasil[$key]['hasil hitung tahap 2'];
					} else {
						$hasil[$key]['sifat'] = "benefit";

						//ambil data nilai terbesar pada atribut berdasarkan kode kriteria
						$get_max = $this->M_page->get_maximal_r($list['kode_kriteria_remaja'])->row();
						$hasil[$key]['nilai maximal'] = $get_max->nilai_bobot;

						//hitung tahap 2
						// $hasil[$key]['hitung tahap 2'] = $isi / $hasil[$key]['nilai maximal'];
						// $hasil[$key]['hitung tahap 2'] = ($isi != 0)  / $hasil[$key]['nilai maximal'];
						if ($hasil[$key]['nilai maximal'] == 0) {
							$hasil[$key]['nilai maximal'] = 1;
							$hasil[$key]['hitung tahap 2'] = $isi / $hasil[$key]['nilai maximal'];
						} else {
							$hasil[$key]['hitung tahap 2'] = $isi / $hasil[$key]['nilai maximal'];
						}

						// hasil hitung tahap 2
						$hasil[$key]['hasil hitung tahap 2'] = $hasil[$key]['hitung tahap 2'];
						$hsl = $hasil[$key]['hasil hitung tahap 2'];
					}

					//nilai hasil tahap 2
					$hasil[$key]['hasil tahap 2'] = $hsl;

					// //get nila bobot
					// $nb = $this->M_admin->get_nb($list['kode_product'])->result();
					//perhitungan ranking
					$hasil[$key]['perhitungan ranking'] = $hasil[$key]['hasil tahap 2'] * $list['nilai_bobot'];
					$hsl_akir = $hasil[$key]['perhitungan ranking'];

					//update tampung sementara
					$this->M_page->update_tampung_r($list['kode_product_remaja'], $list['kode_kriteria_remaja'], $hsl_akir);

					//hitung rank
					$tamp_ada = 0;
					$sementara_ada = 0;

					$rank =  $this->M_page->get_tampung_r($list['kode_product_remaja'])->result();
					foreach ($rank as $ada) {
						if ($ada->tampung > 0) {
							$tamp_ada = $ada->tampung;
						} else {
							$tamp_ada = 0;
						}
						$sementara_ada = $sementara_ada + $tamp_ada; //harusnya dikali
					}

					//masukan ke tampung ranking
					$this->M_page->add_rank_r($list['kode_product_remaja'], $sementara_ada);
				}

				$bigger = $this->M_page->get_terbesar_r()->row();
				$kd = $bigger->kode_product_remaja;

				// echo "<pre>" . print_r($hasil, true);
				// exit(1);
				$this->M_page->insert_data_r($data_ceker, $kd);

				$id_ = $this->M_page->terbesar_r()->row();
				$id_data = $id_->id;
				$idat['hsl_remaja'] = $this->M_page->hsl_r($id_data)->result();

				$this->load->view('page/header');
				$this->load->view('page/hasil_remaja', $idat);
				$this->load->view('page/footer');
			}
		}
	}
}
