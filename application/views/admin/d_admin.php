<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <span style="float: right">
                            <a href="<?= base_url() ?>tambah_admin" class="btn btn-info notika-btn-info">Tambah Admin</a>
                        </span>
                        <h2>Admin</h2>
                        <p>Tabel admin ini berguna untuk melihat data admin yang tersedia.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Hak</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($akun as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data->nama ?></td>
                                        <td><?= $data->username ?></td>
                                        <td><?= $data->hak ?></td>
                                        <td>
                                            <a href="<?= base_url('edit_admin/' . $data->username) ?>" class="btn btn-success notika-btn-success">Edit</a>
                                            ||
                                            <a href="<?= base_url('delete_admin/' . $data->username) ?>" class="btn btn-danger notika-btn-danger">Delete</a>
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