<?php 
	include '../koneksi.php';

	$sql = mysql_query("SELECT *,(SELECT COUNT(id_pinjam) FROM peminjaman WHERE peminjaman.id_pengguna = pengguna.id_pengguna) AS ttl_pinjam FROM pengguna WHERE jabatan = 'Peminjam'"); 

	$date = date('y-m-d');
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=report_pjm_peng.xls");
 ?>
 <br>
 
<div class="container">
	<div class="row">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Peminjaman Berdasarkan Pengguna</b>	
	</div>
	
 <table class="table table-bordered " border="1">
 	<thead>
 		<tr>
 			<th class="text-center">No.</th>
 			<th class="text-center">Nama Peminjam</th>
 			<th class="text-center">Total Pinjaman</th>
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
 				</tr>
 			<?php } ?>
 			</table>
</div>
</div>
</div>