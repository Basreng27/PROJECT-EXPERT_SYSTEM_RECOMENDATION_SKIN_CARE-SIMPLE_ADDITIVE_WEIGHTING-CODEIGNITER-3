
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function hitung()
    {
        if ($this->session->userdata('status') == "login") {
            if ($this->session->userdata('hak') == "admin") {
                redirect('dashboard_admin');
            }
        }

        //deklarasi pengambilan
        $id_keterangan = implode(', ', (array)$_POST['id_keterangan']);

        //ambil semua bobot lalu di arraykan
        $get_all_bobot = $this->M_page->get_bobot()->result_array();
        $hasil = $get_all_bobot;

        foreach ($get_all_bobot as $key => $list) {

            //ambil semua subkriteria lalu di arraykan
            $tmp = $get_all_subkriteria = $this->M_page->get_subkriteria()->result_array();
            foreach ($get_all_subkriteria as $kunci => $daftar) {
                //ambil data subkriteria
                $krit = $this->trimArray(explode(',', $id_keterangan)); // $ket = str_replace('%20', ' ', strtolower(trim($gejala)));

                //id subkriteria
                $id_subkriteria = $daftar['id'];

                //reset tampung isi atribut
                $hasil[$key]['isi atribut'] = 0;

                //cek ada tidak dalam subkriteria
                if (in_array($id_subkriteria, $krit)) {
                    $tmp[$kunci]['test'] = "ada";

                    //ambil nilai pada id subkriteria
                    $tmp[$kunci]['isi atribut'] = $daftar['nilai'];
                    $tmp[$kunci]['kode kriteria'] = $daftar['kode_kriteria'];

                    //ambil data kriteria sesuai kode kriteria
                    $kd_krite = $this->M_page->get_krite($tmp[$kunci]['kode kriteria'])->row();
                    if ($kd_krite->sifat_kriteria == "cost") {
                        $hasil[$key]['sifat'] = "cost";

                        //ambil data nilai terkecil pada atribut berdasarkan kode kriteria
                        $get_min = $this->M_page->get_minim($tmp[$kunci]['kode kriteria'])->row();
                        $hasil[$key]['nilai minimal'] = $get_min->nilai_bobot;

                        //hitung tahap 2
                        $hasil[$key]['hitung tahap 2'] = $hasil[$key]['nilai minimal'] / $tmp[$kunci]['isi atribut'];

                        //hasil hitung tahap 2
                        $hasil[$key]['hasil hitung tahap 2'] = $hasil[$key]['hitung tahap 2'];
                        $hsl = $hasil[$key]['hasil hitung tahap 2'];
                    } else {
                        $hasil[$key]['sifat'] = "benefit";

                        //ambil data nilai terbesar pada atribut berdasarkan kode kriteria
                        $get_max = $this->M_page->get_maximal($tmp[$kunci]['kode kriteria'])->row();
                        $hasil[$key]['nilai maximal'] = $get_max->nilai_bobot;

                        //hitung tahap 2
                        $hasil[$key]['hitung tahap 2'] = $hasil[$key]['isi atribut'] / $hasil[$key]['nilai maximal'];

                        //hasil hitung tahap 2
                        $hasil[$key]['hasil hitung tahap 2'] = $hasil[$key]['hitung tahap 2'];
                        $hsl = $hasil[$key]['hasil hitung tahap 2'];
                    }
                } else {
                    $hasil[$key]['test'] = "tidak ada";
                    $hsl = 0;
                }




                //nilai hasil tahap 2
                $hasil[$key]['hasil tahap 2'] = $hsl;

                //perhitungan ranking
                $hasil[$key]['perhitungan ranking'] = $hasil[$key]['hasil tahap 2'] * $hasil[$key]['isi atribut'];
                $hsl_akir = $hasil[$key]['perhitungan ranking'];

                //kode product
                // $hasil[$key]['kode product'] = $daftar['kode_product'];
                // $kd_pro = $hasil[$key]['kode product'];

                //update tampung sementara
                // $this->M_page->update_tampung($list['kode_kriteria'], $hsl_akir);

                //hasil akhir ranking
                // $hasil[$key]['hasil akhir'] = $hsl;
            }
        }


        // $kode = $this->M_page->get_terbesar()->row();
        // $kd = $kode->kode_kb;

        echo "
<pre>" . print_r($tmp, true);
        exit(1);
        $this->M_page->insert_kasus($data_kasus, $kd);

        $id_ks = $this->M_page->terbesar()->row();
        $id_kasus = $id_ks->id_kasus;
        $idat['hsl'] = $this->M_page->hsl($id_kasus)->result();

        $this->load->view('page/header');
        $this->load->view('page/hasil', $idat);
        $this->load->view('page/footer');
    }
}
?>