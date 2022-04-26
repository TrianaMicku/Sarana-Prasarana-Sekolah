<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$sql = mysql_query("SELECT * FROM barang AS b
											inner join jenis AS je on je.id_jenis = b.id_jenis	
											inner join distributor AS di on di.id_dist = b.id_dist ");
 ?><br>
 
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Semua Barang</b>
		</div>

		<div class="panel-body">

	
 <table class="table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 		<th class="text-center">No.</th>
 		<th class="text-center">Gambar</th>
 		<th class="text-center">Jenis</th>
 		<th class="text-center">Spesifikasi Barang</th>
 		<th class="text-center">Kondisi</th>
 		<th class="text-center">Sumber Dana</th>
 		<th class="text-center">Harga</th>
 		<th class="text-center">Supplier</th>
 		<th class="text-center">Tanggal Beli</th>
 	</tr>
 	</thead> 
 		<tbody>
 			<?php 
 	$no = 1;
 	while ($data = mysql_fetch_array($sql)) { ?>
 	
 	<tr>
 		<td class="text-center"><?php echo $no++ ?>.</td>
 		<td class="text-center"><img style="width: 60px;" src="../assets/img2/<?php echo $data['gambar'] ?>"></td>
 		<td class="text-center"><?php echo $data['nm_jenis'] ?></td>
 		<td class="text-center"><?php echo $data['spek_barang'] ?></td>
 		<td class="text-center"><?php echo $data['kondisi'] ?></td>
 		<td class="text-center"><?php echo $data['sumber_dana'] ?></td>
 		<td class="text-center"><?php echo $data['harga'] ?></td>
 		<td class="text-center"><?php echo $data['nm_dist'] ?></td>
 		<td class="text-center"><?php echo $data['tgl_beli'] ?></td>

 	</tr>
 	<?php } ?>
 		</tbody>
 	

 	
 </table>
</div>
</div>
</div>



 <?php 
	include '../footer.php';


 ?>