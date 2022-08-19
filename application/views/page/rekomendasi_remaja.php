<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-example-wrap mg-t-30">
					<?php if (isset($usia_kurang)) { ?>
						<div class="alert alert-danger">Usia anda dibawah<strong> 10 tahun!</strong> tidak di rekomendasikan menggunakan skincare.</div>
					<?php } elseif (isset($usia_lebih)) { ?>
						<div class="alert alert-danger">Usia anda lebih dari<strong> 22 tahun!</strong> silahkan coba rekomendasi dewasa.</div>
					<?php } elseif (isset($kosong)) { ?>
						<div class="alert alert-danger">Mohon untuk mengisi<strong> Keterangan!</strong> untuk dapat melaukan proses rekomendasi.</div>
					<?php } ?>
					<div class="cmp-tb-hd cmp-int-hd">
						<h2>Rekomendasi Skincare Remaja</h2>
						<p>Pilih beberapa keterangan untuk dapat melakukan perhitungan rekomendasi skincare untuk remaja</p>
						<p>Rekomendasi Skincare Remaja ini hanya untuk kisaran <strong> usia 10 - 22 tahun</strong> </p>
					</div>

					<form action="<?= base_url() ?>hitung_remaja" method="POST">
						<div class="form-example-int form-horizental mg-t-2">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
										<div class="form-group ic-cmp-int">
											<div class="form-ic-cmp">
												<i class="notika-icon notika-support"></i>
											</div>
											<div class="nk-int-st">
												<input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" required>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group ic-cmp-int">
											<div class="form-ic-cmp">
												<i class="notika-icon notika-support"></i>
											</div>
											<div class="nk-int-st">
												<input type="text" class="form-control" name="usia" placeholder="Masukan Usia" required>
											</div>
										</div>
									</div>
								</div>

								<br>
								<div class="row">
									<?php
									$nm_krit = $this->M_page->get_nm_krit_re()->result();
									foreach ($nm_krit as $data) { ?>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<div class="nk-int-mk sl-dp-mn">
												<h2><?= $data->nama_kriteria ?></h2>
											</div>
											<!-- <input type="hidden" name="kd_kriteria[]" value="<?= $data->kode_kriteria ?>"> -->
											<div class="bootstrap-select fm-cmp-mg">
												<select class="selectpicker" name="id_keterangan[]">
													<option value="">Tidak Ditentukan</option>
													<?php
													$nm_ket = $this->M_page->get_nm_ket_re($data->kode_kriteria_remaja)->result();
													foreach ($nm_ket as $adat) { ?>
														<option value="<?= $adat->id ?>"><?= $adat->keterangan ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="form-example-int mg-t-15">
							<div class="row">
								<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
								</div>
								<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
									<button type="submit" class="btn btn-primary notika-btn-primary">Cari Rekomendasi</button>
								</div>
							</div>
						</div>
				</div>
				</form>

			</div>
		</div>
	</div>
</div>
</div>
