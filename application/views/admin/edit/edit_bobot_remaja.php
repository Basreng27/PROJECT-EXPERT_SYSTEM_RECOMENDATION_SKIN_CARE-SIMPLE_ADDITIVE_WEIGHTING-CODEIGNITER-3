<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="table-responsive">
                        <h3>
                            Bobot <?= $nm ?>
                        </h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria Remaja</th>
                                    <th>Keterangan</th>
                                    <!-- <th>Option</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_kode_product_remaja as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data->kode_kriteria_remaja ?></td>
                                        <td><?= $data->nama_kriteria ?></td>
                                        <td>
                                            <form action="<?= base_url() ?>save_bobot_remaja" method="POST">
                                                <input type="hidden" name="kd_product" value="<?= $data->kode_product_remaja ?>">
                                                <input type="hidden" name="kd_kriteria" value="<?= $data->kode_kriteria_remaja ?>">
                                                <select class="selectpicker" name="ket">
                                                    <?php
                                                    $keter = $this->M_admin->get_ketter($data->kode_kriteria_remaja, $data->nilai_bobot)->row();
                                                    $keter_num = $this->M_admin->get_ketter($data->kode_kriteria_remaja, $data->nilai_bobot)->num_rows();
                                                    if ($keter_num > 0) { ?>
                                                        <option value="<?= $keter->nilai; ?>"><?= $keter->keterangan; ?></option>
                                                        <?php
                                                        $sub = $this->M_admin->get_keter($data->kode_kriteria_remaja)->result();
                                                        foreach ($sub as $adit) { ?>
                                                            <option value="<?= $adit->nilai; ?>"><?= $adit->keterangan; ?></option>
                                                        <?php }
                                                    } else { ?>
                                                        <option value="<?= $data->nilai_bobot; ?>">Keterangan Belum Ditentukan</option>
                                                        <?php
                                                        $sub = $this->M_admin->get_keter($data->kode_kriteria_remaja)->result();
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
            </div>
        </div>
    </div>
</div>