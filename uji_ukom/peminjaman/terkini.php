<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}
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

		if ($sql) {
			header("Location:terkini.php");
		}else{
			echo "gagal";
		}
	}

 ?><br>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Peminjaman Terbaru</b>
		</div>

		<div class="panel-body">
		<div class="row">
			<div class="col-sm-6">
		 <table id="example" class="table datatable">
					<tr>
						<td colspan="4" style="text-align: center; font-weight: bold; font-size: 12px;" class="success">Dibooking</td>
					</tr>
					<tr>
						<th>No.</th>
						<th>Nama Pengguna</th>
						<th>Nama Barang</th>
						   <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
						<th>Aksi</th>
							<?php } ?>
					</tr>

						<?php 
							$no = 1;
							while ($data = mysql_fetch_array($sql_dibooking)) { ?>
							
								<tr>
									<td><?php echo $no++ ?>.</td>
									<td><?php echo $data['nm_pengguna']; ?></td>
									<td><?php echo $data['spek_barang']; ?></td>
									     	<?php if($_SESSION['jabatan'] == 'Admin'){ ?>

									<td>
										<a href="?id_barang=<?=$data['id_barang']?> &status=0&id_pinjam=<?=$data['id_pinjam']?>">Barang Dibooking</a>

									</td>
								<?php } ?>
								</tr>

							<?php } ?>
				</table>
				
			</div>

			<div class="col-sm-6">
		 <table id="example" class="table datatable">
					<tr>
						<td colspan="4" style="text-align: center; font-weight: bold; font-size: 12px;" class="success">Dipinjam</td>
					</tr>
					<tr>
						<th>No.</th>
						<th>Nama Pengguna</th>
						<th>Nama Barang</th>
						    <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
						<th>Aksi</th>
							<?php } ?>
					</tr>

						<?php 
							$no = 1;
							while ($data = mysql_fetch_array($sql_dipinjam)) { ?>
							
								<tr>
									<td><?php echo $no++ ?>.</td>
									<td><?php echo $data['nm_pengguna']; ?></td>
									<td><?php echo $data['spek_barang']; ?></td>
									     	<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
									<td>
										<a href="?id_barang=<?=$data['id_barang']?> &status=1&id_pinjam=<?=$data['id_pinjam']?>">Barang Sedang Dipinjam</a>
									</td>
											<?php } ?>
								</tr>

							<?php } ?>
				</table>
				
			</div>

			<div class="col-sm-12">
		 <table id="example" class="table datatable">
					<tr>
						<td colspan="4" style="text-align: center; font-weight: bold; font-size: 12px;" class="success">Dikembalikan</td>
					</tr>
					<tr>
						<th>No.</th>
						<th>Nama Pengguna</th>
						<th>Nama Barang</th>
						 	<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
						<th>Aksi</th>
							<?php } ?>
					</tr>

						<?php 
							$no = 1;
							while ($data = mysql_fetch_array($sql_kembalikan)) { ?>
							
								<tr>
									<td><?php echo  $no++ ?>.</td>
									<td><?php echo $data['nm_pengguna']; ?></td>
									<td><?php echo $data['spek_barang']; ?></td>
										   <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
									<td>
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