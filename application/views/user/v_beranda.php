		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Beranda</h1>
						</div><!-- /.col -->
				
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-lg-6 col-6">
							<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
									<center>
										<h3><i class="fas fa-thermometer-three-quarters"></i>&nbsp;&nbsp; SUHU</h3>
										<h6>Temperatur Lingkungan</h6>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-secondary col-12" data-target="#modalSuhu" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Informasi Suhu</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						
						<!-- ./col -->
						<div class="col-lg-6 col-6">
							<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
									<center>
										<h3><i class="fas fa-thermometer nav-icon"></i>&nbsp;KELEMBABAN</h3>
										<h6>Kelembaban Tanah</h6>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-secondary col-12 col-12" data-target="#modalPH" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Informasi Kelembaban</i>
								</a>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<hr>
					<br><br>

					<!----------------------------------------------------------------------------------------------------------->
					<div class="row">
						<div class="col-lg-6 col-6">
							<!-- small box -->
							<div class="small-box bg-outline-dark">
								<div class="inner">
									<center>
										<h3><i class="fas fa-exclamation"></i>&nbsp;&nbsp; Fuzzy Tsukamoto</h3>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-success col-12" data-target="#modalFuzzy" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Lebih Lanjut</i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-6 col-6">
							<!-- small box -->
							<div class="small-box bg-outline-dark">
								<div class="inner">
									<center>
										<h3><i class="fas fa-laptop-code"></i>&nbsp;&nbsp; Info Aplikasi</h3>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-success col-12" data-target="#modalAplikasi" data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Lebih Lanjut</i>
								</a>
							</div>
						</div>
					</div>
					<br><br>
					<hr>
					<hr>

					<!-------------------------------------------------------------------------------------------------------------------->
					<div class="row">
						<div class="modal-body">
							<form>
								<div class="form-group">
									<h1 class="text-center">Grafik Output</h1>
									<center><img src="<?= base_url("/assets/dist/img/grafikk output.JPG") ?>" width="500px" height="221px" alt=""></center>
								</div>
								<!-- <center><button type="button" class="btn btn-info btn-sm col-10" data-target="#modalGrade"
										data-toggle="modal">
										<h5>Detail Output</h5>
									</button></center> -->
							</form>
						</div>
					</div>
					<br><br>
					<hr>

			</section>
		</div>
		</div>
		</section>
		</div>

		<!-- Modal Suhu -->
		<div class="modal fade bd-example-modal-lg" id="modalSuhu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h4><b>Detail Suhu Microgreen Bayam</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
								<p>
								<h5 class="text-justify">
									Suhu adalah ukuran tinggi rendahnya panas air yang berada di tempat budidaya atau kolam udang vanname
									, suhu yang baik berada pada rentang 27ºC sampai dengan 30ºC
									Apabila suhu di bawah atau melebihi rentang tersebut, maka kualitas air akan berpengaruh terhadap pertumbuhan dan perkembangan udang vanname
								</h5>
								</p>
							</div>
						</div>
					</form>

					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
								<h4 class="font-weight-bold">
									Berikut disajikan kurva dan range data dari variabel suhu
								</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/grafik suhu.JPG") ?>" width="450px" height="225px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/range suhu.JPG") ?>" width="590px" height="100px" alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Moda Suhu -->

		<!-- Modal PH -->
		<div class="modal fade bd-example-modal-lg" id="modalPH" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h4><b>Detail Kelembaban Tanah Microgreen Bayam</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
								<p>
								<h5 class="text-justify">
									PH adalah ukuran derajat keasaman yang digunakan untuk menyatakan tingkat keasaman pada air kolam di tempat budidaya atau kolam udang vanname
									, PH yang baik berada pada rentang 7,0 sampai dengan 7,4
									Apabila PH di bawah atau melebihi rentang tersebut, maka kualitas air akan berpengaruh terhadap pertumhuhan dan perkembangan udang vanname
								</h5>
								</p>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
								<h4 class="font-weight-bold">
									Berikut disajikan kurva dan range data dari variabel PH
								</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/grafik ph.JPG") ?>" width="570px" height="224px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/range ph.JPG") ?>" width="589px" height="95px" alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Moda PH -->

		<!-- Modal TDS -->
		<div class="modal fade bd-example-modal-lg" id="modalTDS" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4><b>Detail Salinitas Kolam udang vanname</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
								<p>
								<h5 class="text-justify">
									Salinitas adalah jumlah zat padat terlarut yang terdapat pada air kolam di tempat budidaya atau kolam udang vanname
									Pada kolam udang vanname, salinitas yang baik berada pada rentang 25ppt sampai dengan 30ppt
									Apabila salinitas di bawah atau melebihi rentang tersebut, maka kualitas air akan berpengaruh terhadap pertumhuhan dan perkembangan udang vanname
								</h5>
								</p>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
								<h4 class="font-weight-bold">
									Berikut disajikan kurva dan range data dari variabel Salinitas
								</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/grafik salinitas.JPG") ?>" width="520px" height="225px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/range salinitas.JPG") ?>" width="590px" height="100px" alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal TDS -->


		<!-- Modal Grade -->
		<!-- <div class="modal fade bd-example-modal-lg" id="modalGrade" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeA.JPG") ?>" width="527px"
											height="253px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade A menunjukkan kualitas air berada pada range 0 - 200</b></p>
										</h5>
										<h6>Sangat disarankan untuk kualitas air kolam, karena menunjukkan nilai yang optimal</h6>
									</center>
								</div>
							</form>
						</div>
						<br><br>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeB.JPG") ?>" width="550px"
											height="259px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade B menunjukkan kualitas air berada pada range 100 - 300</b></p>
										</h5>
										<h6>Disarankan untuk kualitas air kolam, karena menunjukkan nilai yang Baik</h6>
									</center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeC.JPG") ?>" width="510px"
											height="258px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade C menunjukkan kualitas air berada pada range 200 - 400</b></p>
										</h5>
										<h6>Tidak Disarankan untuk kualitas air kolam, karena akan mempengaruhi pertumbuhan dan perkembangbiakan ikan</h6>
									</center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/gradeD.JPG") ?>" width="514px"
											height="258px" alt=""></center>
									<center>
										<h5>
											<p><b>Grade B menunjukkan kualitas air berada pada range 300 - 500</b></p>
										</h5>
										<h6>Sangat tidak disarankan untuk kualitas air kolam, karena ikan dapat terserang penyakit dan mati apabila hidup dalam kondisi ini</h6>
									</center>
								</div>
							</form>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div> -->

		<!-------------------------------------------------------------------------------------------------------------------->
		<!-- Modal Fuzzy -->
		<div class="modal fade bd-example-modal-lg" id="modalFuzzy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h4><b>Pengetahuan Fuzzy Tsukamoto</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
								<p>
								<h5 class="text-justify">
									Fuzzy merupakan metode yang digunakan dalam pengembangan aplikasi ini
									Metode fuzzy merupakan metode yang memiliki range nilai antara 1-0 atau tidak pasti
									Sehingga cocok digunakan untuk data kualitas air
								</h5>
								</p>
							</div>
						</div>
					</form>

					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
								<h4 class="font-weight-bold">
									Berikut tahapan Fuzzy Tsukamoto
								</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/pengetahuanFuzzy.JPG") ?>" width="772px" height="347px" alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Fuzzy -->

		<!-- Modal Aplikasi -->
		<div class="modal fade bd-example-modal-lg" id="modalAplikasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h4><b>Informasi Aplikasi</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<br>
					<form>
						<div class="container">
							<div class="form-group">
								<p>
								<h5 class="text-justify">
									Aplikasi sistem monitoring tanaman microgreen bayam
									adalah aplikasi yang digunakan untuk memonitoring pertumbuhan tanaman microgreen bayam berdasarkan hasil pengukuran sensor suhu lingkungan dan kelembaban tanah
								</h5>
								</p>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-12 ml-auto">
							<center>
								<p>
								<h4 class="font-weight-bold">
									Berikut merupakan alur atau proses kerja dari aplikasi
								</h4>
								</p>
							</center>
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/alurAplikasi.JPG") ?>" width="448px" height="546px" alt=""></center>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Moda Aplikasi -->