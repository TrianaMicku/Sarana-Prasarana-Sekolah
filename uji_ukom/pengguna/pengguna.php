<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

		$sql = mysql_query("SELECT * FROM pengguna");
 ?><br>
 
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Pengguna</b>
		</div>

		<div class="panel-body">
			<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
    		<a href="tambah_peng.php" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
		<?php } ?><br><br>
	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 		<th style="text-align: center;">No.</th>
 		<th style="text-align: center;">Nama Lengkap</th>
 		<th style="text-align: center;">Nama Pengguna</th>
 		<th style="text-align: center;">Jenis Kelamin</th>
 		<th style="text-align: center;">No.Telp</th>
 		<th style="text-align: center;">Alamat</th>
 		<th style="text-align: center;">Jabatan</th>
 		<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
 		<th style="text-align: center;">Aksi</th>
 		<?php } ?>
 	</tr>
 	</thead> 
 		<tbody>
 			<?php 
 	$no = 1;
 	while ($data = mysql_fetch_array($sql)) { ?>
 	
 	<tr>
 		<td style="text-align: center;"><?php echo $no++ ?>.</td>
 		<td style="text-align: center;"><?php echo $data['nm_lengkap'] ?></td>
 		<td style="text-align: center;"><?php echo $data['nm_pengguna'] ?></td>
 		<td style="text-align: center;"><?php echo $data['kelamin'] ?></td>
 		<td style="text-align: center;"><?php echo $data['no_telp'] ?></td>
 		<td style="text-align: center;"><?php echo $data['alamat'] ?></td>
 		<td style="text-align: center;"><?php echo $data['jabatan'] ?></td>

 		<?php if($_SESSION['jabatan'] == 'Admin'){ ?>

		<td style="text-align: center;"><a href="ubah_peng.php?id_pengguna=<?php echo $data['id_pengguna'] ?>" class="btn btn-warning btn-sm glyphicon glyphicon-edit"></a>	

		<a href="hapus_peng.php?id_pengguna=<?php echo $data['id_pengguna'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');"  class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a></td>

	<?php } ?>
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