<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <span style="float: right">
                            <a href="<?= base_url() ?>tambah_subkriteria_remaja" class="btn btn-info notika-btn-info">Tambah Subkriteria Remaja</a>
                        </span>
                        <h2>Subkriteria Remaja</h2>
                        <p>Tabel subkriteria remaja ini berguna untuk melihat subkriteria remaja apa saja yang tersedia.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kriteria</th>
                                    <th>Nama Kriteria Remaja</th>
                                    <th>Keterangan</th>
                                    <th>Nilai</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($subkriteria_remaja as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data->kode_kriteria_remaja ?></td>
                                        <td><?= $data->nama_kriteria ?></td>
                                        <td><?= $data->keterangan ?></td>
                                        <td><?= $data->nilai ?></td>
                                        <td>
                                            <a href="<?= base_url('delete_subkriteria_remaja/' . $data->id) ?>" class="btn btn-danger notika-btn-danger">Delete</a>
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