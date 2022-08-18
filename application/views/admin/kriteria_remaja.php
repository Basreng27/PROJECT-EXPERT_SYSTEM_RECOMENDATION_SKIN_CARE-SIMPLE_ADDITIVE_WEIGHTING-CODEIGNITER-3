<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <span style="float: right">
                            <a href="<?= base_url() ?>tambah_kriteria_remaja" class="btn btn-info notika-btn-info">Tambah Kriteria Remaja</a>
                        </span>
                        <h2>Kriteria Remaja</h2>
                        <p>Tabel kriteria remaja ini berguna untuk melihat kriteria remaja apa saja yang tersedia.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kriteria</th>
                                    <th>Nama Kriteria Remaja</th>
                                    <th>Sifat Kriteria</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kriteria_remaja as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data->kode_kriteria_remaja ?></td>
                                        <td><?= $data->nama_kriteria ?></td>
                                        <td><?= $data->sifat_kriteria ?></td>
                                        <td>
                                            <a href="<?= base_url('edit_kriteria_remaja/' . $data->kode_kriteria_remaja) ?>" class="btn btn-success notika-btn-success">Edit</a>
                                            ||
                                            <a href="<?= base_url('delete_kriteria_remaja/' . $data->kode_kriteria_remaja) ?>" class="btn btn-danger notika-btn-danger">Delete</a>
                                        </td>
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