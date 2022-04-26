<?php 

	include '../koneksi.php';

			$sql = mysql_query("SELECT * FROM barang  b inner join distributor di on di.id_dist = b.id_dist");
			
			$date = date('y-m-d');
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=report_brg2.xls");
 ?>
<div class="container">
	<div class="jumbotron">
		<h2 style="font-style: italic; font-size: 30px; text-align: center;">Daftar Barang</h2>

	
 <table class="table table-bordered table-hover " border="1">
 	<tr class="danger">
 		<th style="text-align: center;">No.</th>
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