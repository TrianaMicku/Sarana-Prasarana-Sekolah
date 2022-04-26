<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$sql_pjm = mysql_query("SELECT * FROM pengguna WHERE jabatan = 'Peminjam'");
 ?><br>
 
<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Peminjam</b>	
	</div>

		<div class="panel-body">
				<style>
				@media print{
					.print {
						display: none;
					}
				}

		</style>

		<button type="submit" class="print btn btn-danger glyphicon glyphicon-print" onclick="window.print();"></button>
		<a href="../cetak/excel_pjm.php" class="print btn-sm btn btn-danger">Ekspor Excel</a>

			<br><br>
	
 <table class="table table-bordered ">
 	<thead>
 		<tr>
 			<th class="text-center">No.</th>
		 	<th class="text-center">Nama Lengkap</th>
		 	<th class="text-center">Nama Pengguna</th>
		 	<th class="text-center">Jenis Kelamin</th>
		 	<th class="text-center">No.Telpon</th>
		 	<th class="text-center">Alamat</th>
		 	<th class="text-center">Jabatan</th>
 	</tr>
 	</thead> 

 		<tbody>
 <?php 

		 	$no = 1;
		 	while ($data = mysql_fetch_array($sql_pjm)) { ?>
		 	 	<tr>
		 	 		<td class="text-center"><?php echo $no++; ?>.</td>
		 	 		<td class="text-center"><?php echo $data['nm_lengkap'] ?></td>
		 	 		<td class="text-center"><?php echo $data['nm_pengguna'] ?></td>
		 	 		<td class="text-center"><?php echo $data['kelamin'] ?></td>
		 	 		<td class="text-center"><?php echo $data['no_telp'] ?></td>
		 	 		<td class="text-center"><?php echo $data['alamat'] ?></td>
		 	 		<td class="text-center"><?php echo $data['jabatan'] ?></td>
		 	 	</tr>

		 	<?php } ?>
 			</table>
</div>
</div>
</div>



 <?php 
	include '../footer.php';


 ?>