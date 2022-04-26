<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

		$sql = mysql_query("SELECT * FROM barang  b inner join distributor di on di.id_dist = b.id_dist");
 ?>
<div class="container">
	<div class="jumbotron">
		<h2 style="font-style: italic; font-size: 30px; text-align: center;">Daftar Barang</h2>


			<style>
				@media print{
					.print {
						display: none;
					}
				}

		</style>


		<button type="submit" class="print btn btn-danger btn-sm" onclick="window.print();">Ekspor PDF</button>
		<a href="../cetak/excel_brg2.php" class="print btn-sm btn btn-danger">Ekspor Excel</a>

 <table class="table table-bordered table-hover ">
 	<tr class="danger">
 		<th style="text-align: center;">No.</th>
 		<th style="text-align: center;">Gambar</th>
 		<th style="text-align: center;">Spesifikasi Barang</th>
 		<th style="text-align: center;">Kondisi</th>
 		<th style="text-align: center;">Sumber Dana</th>
 		<th style="text-align: center;">Harga</th>
 		<th style="text-align: center;">Id Distribusi</th>
 		<th style="text-align: center;">Tanggal Beli</th>
 	</tr>

 	<?php 
 	$no = 1;
 	while ($data = mysql_fetch_array($sql)) { ?>
 	
 	<tr>
 		<td style="text-align: center;"><?php echo $no++ ?>.</td>
 		<td style="text-align: center;"><img style="width: 60px;" src="../assets/img2/<?php echo $data['gambar'] ?>"></td>
 		<td style="text-align: center;"><?php echo $data['spek_barang'] ?></td>
 		<td style="text-align: center;"><?php echo $data['kondisi'] ?></td>
 		<td style="text-align: center;"><?php echo $data['sumber_dana'] ?></td>
 		<td style="text-align: center;"><?php echo $data['harga'] ?></td>
 		<td style="text-align: center;"><?php echo $data['nm_dist'] ?></td>
 		<td style="text-align: center;"><?php echo $data['tgl_beli'] ?></td>
 	</tr>
 	<?php } ?>
 </table>
</div>
</div>


 <?php 
	include '../footer.php';
 ?>