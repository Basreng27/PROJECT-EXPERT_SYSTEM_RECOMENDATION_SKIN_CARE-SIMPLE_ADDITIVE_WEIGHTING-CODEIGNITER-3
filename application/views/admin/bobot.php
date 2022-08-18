<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Bobot Dewasa</h2>
                        <p>Tabel Bobot dewasa ini berguna untuk melihat Bobot dewasa apa saja yang sudah diatur.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Product</th>
                                    <th>Nama Product Dewasa</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($product as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data->kode_product ?></td>
                                        <td><?= $data->nama_product ?></td>
                                        <td>
                                            <a href="<?= base_url('edit_bobot/' . $data->kode_product) ?>" class="btn btn-success notika-btn-success">Edit Bobot</a>
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