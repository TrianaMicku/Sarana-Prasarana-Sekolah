<?php 
	session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

 ?><br>

	<div class="container">
		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;"> Data Peminjaman</b>
		</div>

		<div class="panel-body">
		<div class="card mt-5">			
			
		<div class="card-body">
			<div class="row" style="text-align: center;">
			<div class="col-md-4">

				<a href="tampil_pinjam.php">
				<div class="card">
					<div class="card-body">
						<h5 style="color: black;"> <span style="color: grey" class="fa fa-file"></span> Peminjaman Berlangsung</h5>
					</div>
				</div>
				</a>	
				
				</div>

				<div class="col-md-4">
				<a href="dibooking.php">
				<div class="card">
					<div class="card-body">
						<h5 style="color: black;"><span style="color: grey" class="fa fa-file"></span> Peminjaman Dibooking</h5>
					</div>
				</div>
				</a>	
				</div>

				<div class="col-md-4">
					<a href="dipinjam.php">
					<div class="card">
						<div class="card-body">
							<h5 style="color: black;"><span class="fa fa-file" style="color: grey"></span> Peminjaman Dipinjam</h5>
						</div>
					</div>
					</a>
				</div>

				<div class="col-md-4">
					<a href="kembalikan.php">
					<div class="card">
						<div class="card-body">
							<h5 style="color: black;"><span class="fa fa-file" style="color: grey"></span> Peminjaman Selesai</h5>
						</div>
					</div>
					</a>
				</div>
				
				<div class="col-md-4">
				<a href="#.php">
				<div class="card">
					<div class="card-body">
						<h5 style="color: black;"><span style="color: grey;" class="fa fa-file"></span> Peminjaman Berdasarkan Jenis</h5>
					</div>
				</div>
				</a>	
				</div>


				<div class="col-md-4">
				<a href="#.php">
				<div class="card">
					<div class="card-body">
						<h5 style="color: black;"><span style="color: grey;" class="fa fa-file"></span> Peminjaman Berdasarkan Pengguna</h5>
					</div>
				</div>
				</a>	
				</div>

		 </div>
	  </div>
	</div>

</div>
		<hr>
		<p>*Pilih Laporan yang diinginkan*</p>
	</div>
	
 </div>
 <?php 
	include '../footer.php';
 ?>