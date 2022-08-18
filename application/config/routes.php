<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Page/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Page
$route['home'] = 'Page/home';
$route['rekomendasi'] = 'Page/rekomendasi';
$route['rekomendasi_remaja'] = 'Page/rekomendasi_remaja';
$route['hitung'] = 'Page/hitung';
$route['hitung_remaja'] = 'Page/hitung_remaja';
$route['hasil'] = 'Page/hasil';
$route['hasil_remaja'] = 'Page/hasil_remaja';
//Login
$route['login'] = 'Login/login_page';
$route['proses_login'] = 'Login/proses_login';

//Admin
$route['dashboard_admin'] = 'Admin/dashboard_admin';
$route['logout'] = 'Login/logout';
$route['d_admin'] = 'Admin/d_admin';
$route['tambah_admin'] = 'Admin/tambah_admin';
$route['proses_tambah_admin'] = 'Admin/proses_tambah_admin';
$route['edit_admin'] = 'Admin/edit_admin';
$route['edit_admin/(:any)'] = 'Admin/edit_admin/$1';
$route['proses_edit_admin'] = 'Admin/proses_edit_admin';
$route['delete_admin'] = 'Admin/delete_admin';
$route['delete_admin/(:any)'] = 'Admin/delete_admin/$1';
//Product
$route['product'] = 'Admin/product';
$route['tambah_product'] = 'Admin/tambah_product';
$route['proses_tambah_product'] = 'Admin/proses_tambah_product';
$route['edit_product'] = 'Admin/edit_product';
$route['edit_product/(:any)'] = 'Admin/edit_product/$1';
$route['proses_edit_product'] = 'Admin/proses_edit_product';
$route['delete_product'] = 'Admin/delete_product';
$route['delete_product/(:any)'] = 'Admin/delete_product/$1';
//Product Remaja
$route['product_remaja'] = 'Admin/product_remaja';
$route['tambah_product_remaja'] = 'Admin/tambah_product_remaja';
$route['proses_tambah_product_remaja'] = 'Admin/proses_tambah_product_remaja';
$route['edit_product_remaja'] = 'Admin/edit_product_remaja';
$route['edit_product_remaja/(:any)'] = 'Admin/edit_product_remaja/$1';
$route['proses_edit_product_remaja'] = 'Admin/proses_edit_product_remaja';
$route['delete_product_remaja'] = 'Admin/delete_product_remaja';
$route['delete_product_remaja/(:any)'] = 'Admin/delete_product_remaja/$1';
//Jenis
$route['jenis'] = 'Admin/jenis';
$route['proses_tambah_jenis'] = 'Admin/proses_tambah_jenis';
$route['edit_jenis'] = 'Admin/edit_jenis';
$route['edit_jenis/(:any)'] = 'Admin/edit_jenis/$1';
$route['proses_edit_jenis'] = 'Admin/proses_edit_jenis';
$route['delete_jenis'] = 'Admin/delete_jenis';
$route['delete_jenis/(:any)'] = 'Admin/delete_jenis/$1';
//kriteria
$route['kriteria'] = 'Admin/kriteria';
$route['tambah_kriteria'] = 'Admin/tambah_kriteria';
$route['proses_tambah_kriteria'] = 'Admin/proses_tambah_kriteria';
$route['edit_kriteria'] = 'Admin/edit_kriteria';
$route['edit_kriteria/(:any)'] = 'Admin/edit_kriteria/$1';
$route['proses_edit_kriteria'] = 'Admin/proses_edit_kriteria';
$route['delete_kriteria'] = 'Admin/delete_kriteria';
$route['delete_kriteria/(:any)'] = 'Admin/delete_kriteria/$1';
//Subkriteria
$route['subkriteria'] = 'Admin/subkriteria';
$route['tambah_subkriteria'] = 'Admin/tambah_subkriteria';
$route['proses_tambah_subkriteria'] = 'Admin/proses_tambah_subkriteria';
$route['delete_subkriteria'] = 'Admin/delete_subkriteria';
$route['delete_subkriteria/(:any)'] = 'Admin/delete_subkriteria/$1';
//kriteria remaja
$route['kriteria_remaja'] = 'Admin/kriteria_remaja';
$route['tambah_kriteria_remaja'] = 'Admin/tambah_kriteria_remaja';
$route['proses_tambah_kriteria_remaja'] = 'Admin/proses_tambah_kriteria_remaja';
$route['edit_kriteria_remaja'] = 'Admin/edit_kriteria_remaja';
$route['edit_kriteria_remaja/(:any)'] = 'Admin/edit_kriteria_remaja/$1';
$route['proses_edit_kriteria_remaja'] = 'Admin/proses_edit_kriteria_remaja';
$route['delete_kriteria_remaja'] = 'Admin/delete_kriteria_remaja';
$route['delete_kriteria_remaja/(:any)'] = 'Admin/delete_kriteria_remaja/$1';
//Subkriteria remaja
$route['subkriteria_remaja'] = 'Admin/subkriteria_remaja';
$route['tambah_subkriteria_remaja'] = 'Admin/tambah_subkriteria_remaja';
$route['proses_tambah_subkriteria_remaja'] = 'Admin/proses_tambah_subkriteria_remaja';
$route['delete_subkriteria_remaja'] = 'Admin/delete_subkriteria_remaja';
$route['delete_subkriteria_remaja/(:any)'] = 'Admin/delete_subkriteria_remaja/$1';
//Bobot
$route['bobot'] = 'Admin/bobot';
$route['edit_bobot'] = 'Admin/edit_bobot';
$route['edit_bobot/(:any)'] = 'Admin/edit_bobot/$1';
$route['tambah_bobot'] = 'Admin/tambah_bobot';
$route['proses_tambah_bobot'] = 'Admin/proses_tambah_bobot';
$route['save_bobot'] = 'Admin/save_bobot';
$route['simpan_bobot'] = 'Admin/simpan_bobot';
$route['simpan_bobot/(:any)/(:any)/(:any)'] = 'Admin/simpan_bobot/$1/$2/$3';
//Bobot Remaja
$route['bobot_remaja'] = 'Admin/bobot_remaja';
$route['edit_bobot_remaja'] = 'Admin/edit_bobot_remaja';
$route['edit_bobot_remaja/(:any)'] = 'Admin/edit_bobot_remaja/$1';
$route['tambah_bobot_remaja'] = 'Admin/tambah_bobot_remaja';
$route['proses_tambah_bobot_remaja'] = 'Admin/proses_tambah_bobot_remaja';
$route['save_bobot_remaja'] = 'Admin/save_bobot_remaja';
$route['simpan_bobot_remaja'] = 'Admin/simpan_bobot_remaja';
$route['simpan_bobot_remaja/(:any)/(:any)/(:any)'] = 'Admin/simpan_bobot_remaja/$1/$2/$3';
//riwayat delete
$route['riwayat_delete'] = 'Admin/riwayat_delete';
$route['kembalikan_data'] = 'Admin/kembalikan_data';
$route['kembalikan_data/(:any)'] = 'Admin/kembalikan_data/$1';
$route['hapus_permanen'] = 'Admin/hapus_permanen';
$route['hapus_permanen/(:any)'] = 'Admin/hapus_permanen/$1';
//riwayat delete remaja
$route['riwayat_delete_remaja'] = 'Admin/riwayat_delete_remaja';
$route['kembalikan_data_remaja'] = 'Admin/kembalikan_data_remaja';
$route['kembalikan_data_remaja/(:any)'] = 'Admin/kembalikan_data_remaja/$1';
$route['hapus_permanen_remaja'] = 'Admin/hapus_permanen_remaja';
$route['hapus_permanen_remaja/(:any)'] = 'Admin/hapus_permanen_remaja/$1';
