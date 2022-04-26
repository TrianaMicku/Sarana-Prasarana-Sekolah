<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$sql = mysql_query("SELECT *,(SELECT COUNT(id_pinjam) FROM peminjaman WHERE peminjaman.id_pengguna = pengguna.id_pengguna) AS ttl_pinjam FROM pengguna WHERE jabatan = 'Peminjam'"); 
 ?><br>
 
<div class="container">
	<div class="row">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Peminjaman Berdasarkan Pengguna</b>	
	</div>

		<div class="panel-body">
				<style>
				@media print{
					.print {
						display: none;
					}
				}

		</style>

		<button type="submit" class="print btn-sm btn btn-danger" onclick="window.print();">Ekspor PDF</button>
		<a href="../cetak/excel_peng.php" class="print btn-sm btn btn-danger">Ekspor Excel</a>
	
 <table class="table table-bordered ">
 	<thead>
 		<tr>
 			<th class="text-center">No.</th>
 			<th class="text-center">Nama Peminjam</th>
 			<th class="text-center">Total Pinjaman</th>
 			<th class="text-center">Aksi</th>
 	</tr>
 	</thead> 

 		<tbody>
				 <?php 
 					$no = 1;
 					while ($data = mysql_fetch_array($sql)) { ?>
 				<tr>
 					<td class="text-center"><?php echo $no++; ?>.</td>
 					<td class="text-center"><?php echo $data['nm_lengkap'] ?></td>
 					<td class="text-center"><?php echo $data['ttl_pinjam'] ?></td>
 					<td class="text-center">
 						<a href="#">Detail</a>
 					</td>

 				</tr>
 			<?php } ?>
 			</table>
</div>
</div>
</div>



 <?php 
	include '../footer.php';


 ?>