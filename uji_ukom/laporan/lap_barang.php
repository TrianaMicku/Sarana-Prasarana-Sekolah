 <?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}
	
	$id_jenis = $_GET['id_jenis'];

		$sql = mysql_query("SELECT * FROM barang b inner join distributor di on di.id_dist = b.id_dist WHERE id_jenis = '$id_jenis'");

		$sql2 = mysql_query("SELECT nm_jenis FROM jenis WHERE id_jenis = '$id_jenis'"); 

 ?><br>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Laporan Barang</b>	
		</div>

		<div class="panel-body">
		<style>
				@media print{
					.print {
						display: none;
					}
				}

		</style>

		<button type="submit" class="print btn btn-danger btn-sm" onclick="window.print();">Ekspor PDF</button>
		<a href="../cetak/excel_brg.php" class="print btn-sm btn btn-danger">Ekspor Excel</a>

			<br><br>
		<table class="table table-bordered ">
 	<thead>
 		<tr>
 		<th class="text-center">No.</th>
 		<th class="text-center">Gambar</th>
 		<th class="text-center">Spesifikasi Barang</th>
 		<th class="text-center">Kondisi</th>
 		<th class="text-center">Sumber Dana</th>
 		<th class="text-center">Harga</th>
 		<th class="text-center">Id Distribusi</th>
 		<th class="text-center">Tanggal Beli</th>
 	</tr>
 	</thead> 

 		<tbody>
		<?php 
 	$no = 1;
 	while ($data = mysql_fetch_array($sql)) { ?>
 	
 	<tr>
 		<td class="text-center"><?php echo $no++ ?>.</td>
 		<td style="text-align: center;"><img style="width: 60px;" src="../assets/img2/<?php echo $data['gambar'] ?>"></td>
 		<td class="text-center"><?php echo $data['spek_barang'] ?></td>
 		<td class="text-center"><?php echo $data['kondisi'] ?></td>
 		<td class="text-center"><?php echo $data['sumber_dana'] ?></td>
 		<td class="text-center"><?php echo $data['harga'] ?></td>
 		<td class="text-center"><?php echo $data['nm_dist'] ?></td>
 		<td class="text-center"><?php echo $data['tgl_beli'] ?></td>
 	</tr>
 	<?php } ?>
 			</table>
</div>
</div>
</div>



 <?php 
	include '../footer.php';


 ?>