<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Bobot Remaja</h2>
                        <p>Tabel Bobot remaja ini berguna untuk melihat Bobot remaja apa saja yang sudah diatur.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Product</th>
                                    <th>Nama Product Remaja</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($product_remaja as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data->kode_product_remaja ?></td>
                                        <td><?= $data->nama_product ?></td>
                                        <td>
                                            <a href="<?= base_url('edit_bobot_remaja/' . $data->kode_product_remaja) ?>" class="btn btn-success notika-btn-success">Edit Bobot</a>
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