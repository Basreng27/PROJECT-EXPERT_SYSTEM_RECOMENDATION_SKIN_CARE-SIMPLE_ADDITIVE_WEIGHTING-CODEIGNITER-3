<div class="data-table-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="data-table-list">
					<div class="basic-tb-hd">
						<span style="float: right">
							<a href="<?= base_url() ?>tambah_product_remaja" class="btn btn-info notika-btn-info">Tambah Product Remaja</a>
						</span>
						<h2>Product Remaja</h2>
						<p>Tabel product remaja ini berguna untuk melihat product remaja apa saja yang tersedia.</p>
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Product</th>
									<th>Nama Product Remaja</th>
									<th>Harga Product Remaja</th>
									<th>Kode Jenis</th>
									<th>Jenis</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($product_remaja as $data) { ?>
									<tr>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data->kode_product_remaja ?></td>
										<td><?= $data->nama_product ?></td>
										<td><?= $data->harga ?></td>
										<td><?= $data->kode_jenis ?></td>
										<td><?= $data->jenis ?></td>
										<td>
											<a href="<?= base_url('edit_product_remaja/' . $data->kode_product_remaja) ?>" class="btn btn-success notika-btn-success">Edit</a>
											||
											<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $data->kode_product; ?>">Delete</button> -->
											<!-- <a href="<?= base_url('delete_product/' . $data->kode_product) ?>" class="btn btn-danger notika-btn-danger">Delete</a> -->
											<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalone<?= $data->kode_product_remaja ?>">Delete</button>
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
		foreach ($product_remaja as $data) { ?> -->
<div class="modal fade" id="myModalone<?= $data->kode_product_remaja ?>" role="dialog">
	<div class="modal-dialog modals-default">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<h2>Delete Product</h2>
				<p>Apakah anda yakin ingin menghapus kode product <?= $data->kode_product_remaja ?> ini?</p>
			</div>
			<div class="modal-footer">
				<a href="<?= base_url('delete_product_remaja/' . $data->kode_product_remaja) ?>" class="btn btn-danger notika-btn-danger">Ya</a>
				<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Ya</button> -->
				<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
			</div>
		</div>
	</div>
</div>
<!-- <?php } ?> -->
