<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-example-wrap mg-t-30">
					<div class="cmp-tb-hd cmp-int-hd">
						<h2>Rekomendasi Skincare Remaja</h2>
						<p>Pilih beberapa keterangan untuk dapat melakukan perhitungan rekomendasi skincare</p>
					</div>
					<div class="form-example-int form-horizental mg-t-2">
						<div class="form-group">
							<div class="row">
								<?php foreach ($hsl_remaja as $data) { ?>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h3>Kesimpulan Rekomendasi</h3>
										<br>
										<br>
										<h4>Biodata Costumer</h4>
										<h5>Nama : <?php echo $data->nama; ?></h5>
										<h5>Usia : <?php echo $data->usia; ?></h5>
										<h5>Di Rekomendasikan Menggunakan Product Dengan Kode:</h5>
										<?php
										$sama = $this->M_page->get_terbesar_r()->row();
										$sam = $this->M_page->get_sama_r($sama->tampung_ranking)->result();
										foreach ($sam as $ada) { ?>
											<h4><?= $ada->kode_product_remaja; ?></h4>
										<?php } ?>
										<br>
										<h5>Untuk mengetahui nama product dengan kode product di atas bisa cari pada tabel di bawah.</h5>
										<br>
									</div>
								<?php
								}
								?>
							</div>
							<div class="row">
								<a href="<?php echo base_url('rekomendasi_remaja') ?>" class="btn btn-primary notika-btn-primary">Kembali Mencari Rekomendasi </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="data-table-list">
					<div class="basic-tb-hd">
						Data untuk mencari nama dari kode product
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>No Ranking</th>
									<th>Kode Product</th>
									<th>Nama Product Remaja</th>
									<th>Harga Product Remaja</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$data_pro = $this->M_page->get_all_product_r()->result();
								$no = 1;
								foreach ($data_pro as $data) {
								?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data->kode_product_remaja ?></td>
										<td><?= $data->nama_product ?></td>
										<td><?= $data->harga ?></td>
									</tr>
								<?php
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="data-table-list">
					<div class="basic-tb-hd">
						Data Ranking. Yang paling atas atau rangking terbesar adalah rekomendasi yang cocok
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>No Ranking</th>
									<th>Kode Product</th>
									<th>Hasil Ranking</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$ranking = $this->M_page->kd_product_r()->result();
								$no = 1;
								foreach ($ranking as $data) {
								?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data->kode_product_remaja ?></td>
										<td><?= $data->tampung_ranking ?></td>
									</tr>
								<?php
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
