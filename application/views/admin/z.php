<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php foreach ($product as $adat) { ?>
                    <div class="data-table-list">
                        <!-- <div class="basic-tb-hd">
                            <span style="float: right">
                                <a href="<?= base_url() ?>tambah_bobot" class="btn btn-info notika-btn-info">Tambah Bobot</a>
                            </span>
                            <h2>Bobot</h2>
                            <p>Tabel bobot ini berguna untuk melihat bobot apa saja yang tersedia.</p>
                        </div> -->
                        <div class="table-responsive">
                            <h3>
                                <?= $adat->nama_product; ?>
                            </h3>
                            <?php $kd_product = $adat->kode_product; ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kriteria</th>
                                        <th>Keterangan</th>
                                        <!-- <th>Option</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $get_kriteria = $this->M_admin->get_kriteria($kd_product)->result();
                                    $no = 1;
                                    foreach ($get_kriteria as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data->nama_kriteria ?></td>
                                            <td>
                                                <form action="<?= base_url() ?>save_bobot" method="POST">
                                                    <input type="hidden" name="kd_product" value="<?= $adat->kode_product ?>">
                                                    <input type="hidden" name="kd_kriteria" value="<?= $data->kode_kriteria ?>">
                                                    <select class="selectpicker" name="ket">
                                                        <?php
                                                        $keter = $this->M_admin->get_kett($data->kode_kriteria, $data->nilai_bobot)->row();
                                                        $keter_num = $this->M_admin->get_kett($data->kode_kriteria, $data->nilai_bobot)->num_rows();
                                                        if ($keter_num > 0) { ?>
                                                            <option value="<?= $keter->nilai; ?>"><?= $keter->keterangan; ?></option>
                                                            <?php
                                                            $sub = $this->M_admin->get_ket($data->kode_kriteria)->result();
                                                            foreach ($sub as $adit) { ?>
                                                                <option value="<?= $adit->nilai; ?>"><?= $adit->keterangan; ?></option>
                                                            <?php }
                                                        } else { ?>
                                                            <option value="<?= $data->nilai_bobot; ?>">Keterangan Belum Ditentukan</option>
                                                            <?php
                                                            $sub = $this->M_admin->get_ket($data->kode_kriteria)->result();
                                                            foreach ($sub as $adit) { ?>
                                                                <option value="<?= $adit->nilai; ?>"><?= $adit->keterangan; ?></option>
                                                        <?php }
                                                        } ?>

                                                    </select>
                                                    <button type="submit" class="btn btn-primary notika-btn-primary">Simpan</button>
                                                </form>
                                            </td>
                                            <!-- <td>
                                                <a href="<?php echo base_url('simpan_bobot/' . $adat->kode_product . '/' . $data->kode_kriteria . '/' . $nilai_bobot) ?>" class="btn btn-primary notika-btn-primary">Simpan</a>
                                            </td> -->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>