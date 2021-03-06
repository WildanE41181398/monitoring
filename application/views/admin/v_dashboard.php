		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Beranda</h1>
						</div><!-- /.col -->
						<!-- /.col -->
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
										<h3><i class="fas fa-thermometer nav-icon"></i>&nbsp;&nbspKELEMBABAN</h3>
										<h6>kelembaban Tanah</h6>
									</center>
								</div>
								<a href="#!" class="btn btn-outline-secondary col-12 col-12" data-target="#modalPH"
									data-toggle="modal">
									<i class="fas fa-arrow-circle-right">&nbsp;&nbsp;&nbsp; Informasi Kelembaban</i>
								</a>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-------------------------------------------------------------------------------------------------------------------->
					<div class="row">
						<div class="modal-body">
							<form>
								<div class="form-group">
								<h1 class="text-center">Grafik Output</h1>
									<center><img src="<?= base_url("/assets/dist/img/grafikk output.JPG") ?>" width="550px"
											height="221px" alt=""></center>
								</div>
								

		<!-- Modal Suhu -->
		<div class="modal fade bd-example-modal-lg" id="modalSuhu" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4><b>Detail Suhu Kolam udang vanname</b></h4>
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
									, suhu yang baik berada pada rentang 27??C sampai dengan 30??C
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
									<center><img src="<?= base_url("/assets/dist/img/grafik suhu.JPG") ?>" width="550px" height="225px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/range suhu.JPG") ?>" width="590px" height="100px"alt=""></center>
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
		<div class="modal fade bd-example-modal-lg" id="modalPH" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4><b>Detail pH Kolam udang vanname</b></h4>
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
									<center><img src="<?= base_url("/assets/dist/img/grafik ph.JPG") ?>" width="550px" height="224px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/range ph.JPG") ?>" width="589px" height="100px"alt=""></center>
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
		<div class="modal fade bd-example-modal-lg" id="modalTDS" tabindex="-1" role="dialog"
			aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
									<center><img src="<?= base_url("/assets/dist/img/grafik salinitas.JPG") ?>" width="500px" height="229px" alt=""></center>
								</div>
							</form>
						</div>
						<div class="col-md-12 ml-auto">
							<form>
								<div class="form-group">
									<center><img src="<?= base_url("/assets/dist/img/range salinitas.JPG") ?>" width="590px" height="100px"alt=""></center>
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
		
