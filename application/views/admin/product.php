<div class="data-table-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="data-table-list">
					<div class="basic-tb-hd">
						<span style="float: right">
							<a href="<?= base_url() ?>tambah_product" class="btn btn-info notika-btn-info">Tambah Product Dewasa</a>
						</span>
						<h2>Product Dewasa</h2>
						<p>Tabel product dewasa ini berguna untuk melihat product dewasa apa saja yang tersedia.</p>
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Product</th>
									<th>Nama Product Dewasa</th>
									<th>Harga Product Dewasa</th>
									<th>Kode Jenis</th>
									<th>Jenis</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($product as $data) { ?>
									<tr>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data->kode_product ?></td>
										<td><?= $data->nama_product ?></td>
										<td><?= $data->harga ?></td>
										<td><?= $data->kode_jenis ?></td>
										<td><?= $data->jenis ?></td>
										<td>
											<a href="<?= base_url('edit_product/' . $data->kode_product) ?>" class="btn btn-success notika-btn-success">Edit</a>
											||
											<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $data->kode_product; ?>">Delete</button> -->
											<!-- <a href="<?= base_url('delete_product/' . $data->kode_product) ?>" class="btn btn-danger notika-btn-danger">Delete</a> -->
											<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalone<?= $data->kode_product ?>">Delete</button>
										</td>
									</tr>
							</tbody>
						<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <?php
		foreach ($product as $data) { ?> -->
<div class="modal fade" id="myModalone<?= $data->kode_product ?>" role="dialog">
	<div class="modal-dialog modals-default">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<h2>Delete Product</h2>
				<p>Apakah anda yakin ingin menghapus kode product <?= $data->kode_product ?> ini?</p>
			</div>
			<div class="modal-footer">
				<a href="<?= base_url('delete_product/' . $data->kode_product) ?>" class="btn btn-danger notika-btn-danger">Ya</a>
				<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Ya</button> -->
				<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
			</div>
		</div>
	</div>
</div>
<!-- <?php } ?> -->

<!-- <script>
    function show() {

        var table = document.getElementById("data-table-basic"),
            rIndex;

        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].onclick = function() {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("kode_product").value = this.cells[0].innerHTML;
                document.getElementById("nama_product").value = this.cells[1].innerHTML;
                document.getElementById("kode_jenis").value = this.cells[2].innerHTML;

                $("#deleteM").modal('show');
            };
        }

    }
</script> -->

<!-- <div class="modal fade" id="deleteM" role="dialog">
    <div class="modal-dialog modal-large">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php echo base_url(); ?>delete_product" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-element-list">
                                <div class="basic-tb-hd">
                                    <h2>Hapus Product</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <p>Anda yakin mau menghapus <b><?php echo $data->kode; ?></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>

                <div class="modal-footer">
                    <button type="submit" value="button" class="btn btn-default">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>

        </div>
    </div>
</div> -->
