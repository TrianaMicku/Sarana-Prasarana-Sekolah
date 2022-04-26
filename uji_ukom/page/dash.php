<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}
 ?>

  <div class="container">
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Selamat datang <?= ucfirst($_SESSION['nm_pengguna']);?> di SARPRAS App
  </div>
  </div>

<!-- peminjaman terbaru -->
	<?php if($_SESSION['jabatan'] == 'Admin'){ ?>

		<!-- totalan -->
	<div class="container">
		<div class="row">

	    <div class="col-lg-2" style="margin-right: 30px;">
 			<div class="col-lg-12" style="border-radius: 10px; width: 190px; height: 50px; margin-right: 10px; background-color: #ed553b; ">
      	<?php 
 			$sqlPeng = mysql_query("SELECT COUNT(*) AS ttlPeng FROM pengguna");
 			$dataPeng = mysql_fetch_array($sqlPeng);
 		?>
      	<h5 style="color: black;"><a href="../pengguna/pengguna.php" style="color: white; float: right;"> |<?php echo $dataPeng['ttlPeng'] ?></a>Data Pengguna</h5>

      </div>
    </div>


   <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlDist = mysql_query("SELECT COUNT(*) AS ttlDist FROM distributor");
 			$dataDist = mysql_fetch_array($sqlDist);
		?>
      	<h5 style="color: black;"><a href="../distributor/dist.php" style="color: white;float: right;"> |<?php echo $dataDist['ttlDist'] ?></a>Data Supplier</h5>

      </div>
    </div>

   <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlJns = mysql_query("SELECT COUNT(*) AS ttlJns FROM jenis ");
 			$dataJns = mysql_fetch_array($sqlJns);
 		?>
      	<h5 style="color: black;"><a href="../jenis/jenis.php" style="color: white; float: right;"> |<?php echo $dataJns['ttlJns'] ?></a>Data Jenis</h5>

      </div>
    </div>



    <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlBrg = mysql_query("SELECT COUNT(*) AS ttlBrg FROM barang");
 			$dataBrg = mysql_fetch_array($sqlBrg);
 		?>

      	<h5 style="color: black;"><a href="../barang/barang2.php" style="color: white; float: right;"> |<?php echo $dataBrg['ttlBrg'] ?></a> Data Barang </h5>

      </div>
    </div>  


    <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlPjm = mysql_query("SELECT COUNT(*) AS ttlPjm FROM peminjaman");
 			$dataPjm = mysql_fetch_array($sqlPjm);
 		?>

      	<h5 style="color: black;"><a href="../peminjaman/tampil_pinjam.php" style="color: white; float: right;"> |<?php echo $dataPjm['ttlPjm'] ?></a>Data Peminjaman</h5>

      </div>
    </div>  

   <!-- <div class="col-lg-2 " style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">		
    			<div class="dropdown">
    				<?php 
	 					$sqlPjm = mysql_query("SELECT COUNT(*) AS ttlPjm FROM peminjaman ");
	 					$dataPjm = mysql_fetch_array($sqlPjm);
 					?>

 			         <h5 style="color: black;"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white; float: right;"> |<?php echo $dataPjm['ttlPjm'] ?><b class="caret"></b></a>Data Peminjaman
 			         	<ul class="dropdown-menu" role="menu">
 			        <li><a href="../peminjaman/tampil_pinjam.php">Data Peminjaman Seluruhnya</a></li>
		         	<li><a href="../peminjaman/dibooking.php">Data Peminjaman Dibooking</a></li> 
		        	<li><a href="../peminjaman/dipinjam.php">Data Peminjaman Dipinjam</a></li>
		        	<li><a href="../peminjaman/kembalikan.php">Data Peminjaman Selesai</a></li> 
		        	<li><a href="../laporan/lap_pjm_peng.php">Data Peminjaman berdasarkan Pengguna</a></li> </h5>
		           		</ul>
      			   
				</div>
			</div> -->
		</div>
<br>

	<script>
	$(document).ready(function(){
	  $(".dropdown").on("show.bs.dropdown", function(event){
	   
	  });
	});
	</script>


  </div>
</div>
<!-- akhir -->

<br><br>

<!-- total kondisi -->
		<div class="container">
			<div class="row">
 			<div class="col-lg-4">
 				<table class="table table-condensed">
 					<thead>
 						<tr style="background-color: #264653;">
 							<th colspan="2" style="text-align: center; font-weight: bold; color: white;">Kondisi Barang</th>
 						</tr>
 					</thead>
 					<thead>
 						<tr>
 							<th>Baik</th>
 							<?php 
 								$sqlBaik = mysql_query("SELECT COUNT(*) AS ttlBaik FROM barang WHERE kondisi = 'Baik'");
 								$dataBaik = mysql_fetch_array($sqlBaik);
 							 ?>
 							<th><?php echo $dataBaik['ttlBaik']?></th>
 						</tr>
 						<tr>
 							<th>Rusak</th>
 							<?php 
 								$sqlRusak = mysql_query("SELECT COUNT(*) AS ttlRusak FROM barang WHERE kondisi = 'Rusak'");
 								$dataRusak = mysql_fetch_array($sqlRusak);
 							 ?>
 							<th><?php echo $dataRusak['ttlRusak'] ?></th>
 						</tr>
 						<tr>
 							<th>Hilang</th>
 							<?php 
 								$sqlHilang = mysql_query("SELECT COUNT(*) AS ttlHilang FROM barang WHERE kondisi = 'Hilang'");
 								$dataHilang = mysql_fetch_array($sqlHilang);
 							 ?>
 							<th><?php echo $dataHilang['ttlHilang'] ?></th>
 						</tr>
 					</thead>
 				</table>
 			</div>

	 			<div class="col-lg-4">
	 			<table class="table table-condensed">
	 				<thead>
	 						<tr style="background-color: #264653;">
	 							<th colspan="2" style="text-align: center; font-weight: bold; color: white;">Jumlah Peminjaman</th>
	 						</tr>
	 					</thead>
	 				<thead>
	 					<tr>
	 						<?php 
	 							$sqlPesan = mysql_query("SELECT COUNT(*) AS ttlPesan FROM peminjaman WHERE status = '0' AND tgl_pinjam = CURDATE()");
	 							$dataPesan = mysql_fetch_array($sqlPesan);
	 						 ?>
	 						<th>Dipesan</th>
	 						<th><?php echo $dataPesan['ttlPesan'] ?></th>
	 					</tr>

	 					<tr>
	 						<?php 
	 							$sqlPinjam = mysql_query("SELECT COUNT(*) AS ttlPinjam FROM peminjaman WHERE status = '1' AND tgl_pinjam = CURDATE()");
	 							$dataPinjam = mysql_fetch_array($sqlPinjam);
	 						 ?>
	 						<th>Dipinjam</th>
	 						<th><?php echo $dataPinjam['ttlPinjam'] ?></th>
	 					</tr>

	 					<tr>
	 						<?php 
	 							$sqlSelesai = mysql_query("SELECT COUNT(*) AS ttlSelesai FROM peminjaman WHERE status = '2' AND tgl_pinjam = CURDATE()");
	 							$dataSelesai = mysql_fetch_array($sqlSelesai);
	 						 ?>
	 						<th>Selesai</th>
	 						<th><?php echo $dataSelesai['ttlSelesai'] ?></th>
	 					</tr>
	 				</thead>
	 			</table>
	 			</div>


	 			<div class="col-lg-4">
	 				<?php 

	 					$sql = mysql_query("SELECT *,(SELECT COUNT(id_pinjam) FROM peminjaman WHERE peminjaman.id_pengguna = pengguna.id_pengguna) AS ttl_pinjam FROM pengguna WHERE jabatan = 'Peminjam'"); 
	 				 ?>
	 			<table class="table table-condensed ">
 					<thead>
 						<tr style="background-color: #264653;">
					 			<th style="color: white;" class="text-center">No.</th>
					 			<th style="color: white;" class="text-center">Nama Peminjam</th>
					 			<th style="color: white;" class="text-center">Total Pinjaman</th>
					 	</tr>
					 	</thead> 

 					<tbody>
						 <?php 
		 					$no = 1;
		 					while ($data = mysql_fetch_array($sql)) { ?>
		 				<tr>
		 					<td class="text-center"><?php echo $no++; ?>.</td>
		 					<td class="text-center"><?php echo $data['nm_lengkap'] ?></td>
		 					<th class="text-center"><?php echo $data['ttl_pinjam'] ?></th>
		 					

		 				</tr>
		 			<?php } ?>
		 			</table>
			 			</div>
	 	</div>
	 </div>
 </div>
	 <!-- akhir -->



<!-- peminjaman terkini -->
<?php 
	$date = date('Y-m-d');
	
	$sql_dibooking = mysql_query("SELECT * FROM peminjaman INNER JOIN pengguna on peminjaman.id_pengguna = pengguna.id_pengguna INNER JOIN barang on peminjaman.id_barang = barang.id_barang WHERE peminjaman.status=0 AND peminjaman.tgl_pinjam = '$date'");

	$sql_dipinjam = mysql_query("SELECT * FROM peminjaman INNER JOIN pengguna on peminjaman.id_pengguna = pengguna.id_pengguna INNER JOIN barang on peminjaman.id_barang = barang.id_barang WHERE peminjaman.status=1 AND peminjaman.tgl_pinjam = '$date'");

	$sql_kembalikan = mysql_query("SELECT * FROM peminjaman INNER JOIN pengguna on peminjaman.id_pengguna = pengguna.id_pengguna INNER JOIN barang on peminjaman.id_barang = barang.id_barang WHERE peminjaman.status=2 AND peminjaman.tgl_pinjam = '$date'");

	if (isset($_GET['id_barang']) && isset($_GET['status']) ) {
		$id_barang = $_GET['id_barang'];
		$id_pinjam = $_GET['id_pinjam'];
		$status = $_GET['status'] + 1;

		if ($status == "2") {
			$tgl = date('Y-m-d');
			$sql = mysql_query("UPDATE peminjaman SET status = '$status', tgl_kembali = '$tgl' WHERE id_pinjam = '$id_pinjam'");

		}else if ($status == "1") {

			$sql = mysql_query("UPDATE peminjaman SET status = '$status'  WHERE id_pinjam = '$id_pinjam'");
		}
	}

 ?><br>

<div class="container">
			<b style="font-size: 18px;">Peminjaman Hari ini</b>

		<div class="row">
			<div class="col-sm-4">
		 <table class="table table-bordered">
		 	<thead>
					<tr style="background-color: #264653;">
						<td colspan="4" style="text-align: center; font-weight: bold; color: white;">Dibooking</td>
					</tr>
			</thead>
			<tbody>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Nama Pengguna</th>
						<th class="text-center">Nama Barang</th>
						   <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
						<th class="text-center">Aksi</th>
							<?php } ?>
					</tr>

						<?php 
							$no = 1;
							while ($data = mysql_fetch_array($sql_dibooking)) { ?>
							
								<tr>
									<td class="text-center"><?php echo $no++ ?>.</td>
									<td class="text-center"><?php echo $data['nm_pengguna']; ?></td>
									<td class="text-center"><?php echo $data['spek_barang']; ?></td>
									     	<?php if($_SESSION['jabatan'] == 'Admin'){ ?>

									<td class="text-center">
										<a href="?id_barang=<?=$data['id_barang']?> &status=0&id_pinjam=<?=$data['id_pinjam']?>">Barang Dibooking</a>

									</td>
								<?php } ?>
								</tr>

							<?php } ?>
						</tbody>
				</table>
				
			</div>

			<div class="col-sm-4">
		 <table class="table table-bordered">
					<tr style="background-color: #264653;">
						<td colspan="4" style="text-align: center; font-weight: bold; color: white;">Dipinjam</td>
					</tr>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Nama Pengguna</th>
						<th>Nama Barang</th>
						    <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
						<th class="text-center">Aksi</th>
							<?php } ?>
					</tr>

						<?php 
							$no = 1;
							while ($data = mysql_fetch_array($sql_dipinjam)) { ?>
							
								<tr>
									<td class="text-center"><?php echo $no++ ?>.</td>
									<td class="text-center"><?php echo $data['nm_pengguna']; ?></td>
									<td class="text-center"><?php echo $data['spek_barang']; ?></td>
									     	<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
									<td class="text-center">
										<a href="?id_barang=<?=$data['id_barang']?> &status=1&id_pinjam=<?=$data['id_pinjam']?>">Barang Sedang Dipinjam</a>
									</td>
											<?php } ?>
								</tr>

							<?php } ?>
				</table>
				
			</div>

			<div class="col-sm-4">
		 <table class="table table-bordered">
					<tr style="background-color: #264653;">
						<td colspan="4" style="text-align: center; font-weight: bold; color: white;">Selesai</td>
					</tr>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Nama Pengguna</th>
						<th class="text-center">Nama Barang</th>
						 	<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
						<th class="text-center">Aksi</th>
							<?php } ?>
					</tr>

						<?php 
							$no = 1;
							while ($data = mysql_fetch_array($sql_kembalikan)) { ?>
							
								<tr>
									<td class="text-center"><?php echo  $no++ ?>.</td>
									<td class="text-center"><?php echo $data['nm_pengguna']; ?></td>
									<td class="text-center"><?php echo $data['spek_barang']; ?></td>
										   <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
									<td class="text-center">
										<a href="?id_barang=<?=$data['id_barang']?> &status=2&id_pinjam=<?=$data['id_pinjam']?>">Barang Sudah Kembali </a>
									</td>
										<?php } ?>
								</tr>

							<?php } ?>
				</table>
					
			</div>

		</div>
	</div>
	</div>
</div>

<?php } ?>
<!-- akhir -->


<!-- card laporan -->
	<?php if($_SESSION['jabatan'] == 'Manajemen'){ ?>

<!-- totalan -->
		<br><br>
	<div class="container">
		<div class="row">

	 <div class="col-lg-2" style="margin-right: 30px;">
 			<div class="col-lg-12" style="border-radius: 10px; width: 190px; height: 50px; margin-right: 10px; background-color: #ed553b;">
      	<?php 
 			$sqlPeng = mysql_query("SELECT COUNT(*) AS ttlPeng FROM pengguna");
 			$dataPeng = mysql_fetch_array($sqlPeng);
 		?>
      	<h3 style="color: black; font-size: 16px;"><a href="../laporan/lap_peng.php" style="color: white; float: right;"> |<?php echo $dataPeng['ttlPeng'] ?></a>Laporan Pengguna</h3>

      </div>
    </div>

   <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlDist = mysql_query("SELECT COUNT(*) AS ttlDist FROM distributor");
 			$dataDist = mysql_fetch_array($sqlDist);
		?>
      	<h3 style="color: black; font-size: 16px;"><a href="../laporan/lap_dist.php" style="color: white; float: right;"> |<?php echo $dataDist['ttlDist'] ?></a>Laporan Supplier</h3>

      </div>
    </div>

   <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlJns = mysql_query("SELECT COUNT(*) AS ttlJns FROM jenis ");
 			$dataJns = mysql_fetch_array($sqlJns);
 		?>
      	<h3 style="color: black;font-size: 16px;"><a href="../laporan/lap_jenis.php" style="color: white; float: right;"> |<?php echo $dataJns['ttlJns'] ?></b></a>Laporan Jenis</h3>

      </div>
    </div>

    <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlBrg = mysql_query("SELECT COUNT(*) AS ttlBrg FROM barang");
 			$dataBrg = mysql_fetch_array($sqlBrg);
 		?>
      	<h3 style="color: black;font-size: 16px;"><a href="../laporan/lap_barang2.php" style="color: white; float: right;"> |<?php echo $dataBrg['ttlBrg'] ?></b></a>Laporan Barang</h3>

      </div>
    </div>  

   <div class="col-lg-2 " style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 210px;  height: 50px; margin-right: 5px; background-color: #ed553b;">			
    			<div class="dropdown">
    				<?php 
	 					$sqlPjm = mysql_query("SELECT COUNT(*) AS ttlPjm FROM peminjaman ");
	 					$dataPjm = mysql_fetch_array($sqlPjm);
 					?>

 			         <h3 style="color: black; font-size: 16px;"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white; float: right;">|<?php echo $dataPjm['ttlPjm'] ?><b class="caret"></b></a>Laporan Peminjaman
 			         	<ul class="dropdown-menu" role="menu">

 			        <li><a href="../peminjaman/tampil_pinjam.php">Laporan Peminjaman Seluruhnya</a></li>
		         	<li><a href="../peminjaman/dibooking.php">Laporan Peminjaman Dibooking</a></li> 
		        	<li><a href="../peminjaman/dipinjam.php">Laporan Peminjaman Dipinjam</a></li>
		        	<li><a href="../peminjaman/kembalikan.php">Laporan Peminjaman Selesai</a></li> 
		        	<li><a href="../laporan/lap_pjm_peng.php">Laporan Peminjaman berdasarkan Pengguna</a></li> </h3>
		           		</ul>
      			   
				</div>
			</div>
		</div>

	<script>
	$(document).ready(function(){
	  $(".dropdown").on("show.bs.dropdown", function(event){
	   
	  });
	});
	</script>


  </div>
</div>
<?php } ?>
<!-- akhir -->

<br><br><br><br><br>
<?php 
  include '../footer.php';

  ?>