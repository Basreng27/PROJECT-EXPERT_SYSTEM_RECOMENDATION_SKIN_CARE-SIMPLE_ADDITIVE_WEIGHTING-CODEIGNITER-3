<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Rekomendasi Kosmetik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="<?= base_url() ?>assets/image/x-icon" href="<?= base_url() ?>assets/img/stmik.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
    <!-- normalize CSS  -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/notika-custom-icon.css">
    <!-- wave CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/wave/button.css">
    <!-- main CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
    <!-- responsive CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
    <!-- dialog CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dialog/dialog.css">
    <!-- Data Table JS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.dataTables.min.css">
    <!-- summernote CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/summernote/summernote.css">
    <!-- Range Slider CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/themesaller-forms.css"> -->
    <!-- bootstrap select CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/datapicker/datepicker3.css">
    <!-- Color Picker CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/color-picker/farbtastic.css">
    <!-- main CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/chosen/chosen.css">
    <!-- notification CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/notification/notification.css">
    <!-- dropzone CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dropzone/dropzone.css">
    <!-- modernizr JS-->
    <script src="<?= base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?= base_url() ?>assets/img/stmik.png" height="75" width="75" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="<?= base_url() ?>dashboard_admin"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a href="<?= base_url() ?>d_admin"><i class="notika-icon notika-support"></i> Admin</a>
                        </li>
                        <li><a data-toggle="tab" href="#Product"><i class="notika-icon notika-edit"></i> Product</a>
                        </li>
                        <li><a data-toggle="tab" href="#Kriteria"><i class="notika-icon notika-windows"></i> Kriteria</a>
                        </li>
                        <li><a data-toggle="tab" href="#Bobot"><i class="notika-icon notika-windows"></i> Bobot</a>
                        </li>
                        <!-- <li><a href="<?= base_url() ?>bobot"><i class="notika-icon notika-form"></i> Bobot</a>
                        </li> -->
                        <li><a data-toggle="tab" href="#Riwayat"><i class="notika-icon notika-edit"></i> Riwayat Delete Product</a>
                        </li>
                        <li><a href="<?= base_url() ?>logout"><i class="notika-icon notika-support"></i> Logout</a>
                        </li>
                    </ul>

                    <div class="tab-content custom-menu-content">
                        <div id="Product" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url() ?>product">Product Dewasa</a>
                                </li>
                                <li><a href="<?= base_url() ?>product_remaja">Product Remaja</a>
                                </li>
                                <li><a href="<?= base_url() ?>jenis">Jenis</a>
                                </li>
                            </ul>
                        </div>

                        <div id="Kriteria" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url() ?>kriteria">Kriteria Dewasa</a>
                                </li>
                                <li><a href="<?= base_url() ?>subkriteria">Subkriteria Dewasa</a>
                                </li>
                                <li><a href="<?= base_url() ?>kriteria_remaja">Kriteria Remaja</a>
                                </li>
                                <li><a href="<?= base_url() ?>subkriteria_remaja">Subkriteria Remaja</a>
                                </li>
                            </ul>
                        </div>

                        <div id="Bobot" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url() ?>bobot">Bobot Dewasa</a>
                                </li>
                                <li><a href="<?= base_url() ?>bobot_remaja">Bobot Remaja</a>
                                </li>
                            </ul>
                        </div>

                        <div id="Riwayat" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url() ?>riwayat_delete">Product Dewasa</a>
                                </li>
                                <li><a href="<?= base_url() ?>riwayat_delete_remaja">Product Remaja</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->