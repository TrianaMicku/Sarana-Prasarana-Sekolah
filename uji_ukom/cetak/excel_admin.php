<?php 
	include '../koneksi.php';
	
	$sql_admin = mysql_query("SELECT * FROM pengguna WHERE jabatan = 'Admin'");


	$date = date('y-m-d');
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=report_admin.xls");
 ?><br>
 
<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Admin</b>	
	</div>

		<div class="panel-body">
 <table class="table table-bordered " border="1">
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
		 	while ($data = mysql_fetch_array($sql_admin)) { ?>
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