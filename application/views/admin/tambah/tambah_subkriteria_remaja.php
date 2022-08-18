<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap mg-t-30">
                    <div class="cmp-tb-hd cmp-int-hd">
                        <h2>Tambah Subkriteria Remaja</h2>
                    </div>
                    <?php if (isset($terdaftar)) { ?>
                        <div class="alert alert-danger"><strong>Subkriteria Remaja</strong> telah terdaftar, silahkan masukan <strong>Subkriteria Remaja</strong> baru.</div>
                    <?php } elseif (isset($berhasil)) { ?>
                        <div class="alert alert-success"><strong>Subkriteria Remaja</strong> telah berhasil didaftarkan.</div>
                    <?php } ?>
                    <form action="<?= base_url() ?>proses_tambah_subkriteria_remaja" method="POST">
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Kode/Nama Kriteria Remaja</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select class="selectpicker" name="kode_kriteria_remaja">
                                                <?php
                                                $kriteria = $this->M_admin->get_all_kriteria_remaja()->result();
                                                foreach ($kriteria as $data) { ?>
                                                    <option value="<?= $data->kode_kriteria_remaja ?>"><?= $data->kode_kriteria_remaja ?> || <?= $data->nama_kriteria ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Keterangan</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="keterangan" class="form-control input-sm" placeholder="Masukan Keterangan" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nilai</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select class="selectpicker" name="nilai">
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Bobot</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select class="selectpicker" name="bobot">
                                                <option value="Kurang">Kurang</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Bagus">Bagus</option>
                                                <option value="Sangat Bagus">Sangat Bagus</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>