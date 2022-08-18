<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <span style="float: right">
                            <a href="<?= base_url() ?>tambah_kriteria" class="btn btn-info notika-btn-info">Tambah Kriteria Dewasa</a>
                        </span>
                        <h2>Kriteria Dewasa</h2>
                        <p>Tabel kriteria dewasa ini berguna untuk melihat kriteria dewasa apa saja yang tersedia.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kriteria</th>
                                    <th>Nama Kriteria Dewasa</th>
                                    <th>Sifat Kriteria</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kriteria as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data->kode_kriteria ?></td>
                                        <td><?= $data->nama_kriteria ?></td>
                                        <td><?= $data->sifat_kriteria ?></td>
                                        <td>
                                            <a href="<?= base_url('edit_kriteria/' . $data->kode_kriteria) ?>" class="btn btn-success notika-btn-success">Edit</a>
                                            ||
                                            <a href="<?= base_url('delete_kriteria/' . $data->kode_kriteria) ?>" class="btn btn-danger notika-btn-danger">Delete</a>
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