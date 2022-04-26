<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

		$sql = mysql_query("SELECT * FROM distributor");
 ?><br>
 
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Supplier</b>
		</div>

		<div class="panel-body">
			<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
    		<a href="tambah_dist.php" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
		<?php } ?><br><br>
	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 		<th style="text-align: center;">No.</th>
 		<th style="text-align: center;">Nama Supplier</th>
 		<th style="text-align: center;">Telp. Supplier</th>
 		<th style="text-align: center;">Alamat Supplier</th>
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
 		<td style="text-align: center;"><?php echo $data['nm_dist'] ?></td>
 		<td style="text-align: center;"><?php echo $data['telp_dist'] ?></td>
 		<td style="text-align: center;"><?php echo $data['almt_dist'] ?></td>

 		<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
 		<td style="text-align: center;"><a href="ubah_dist.php?id_dist=<?php echo $data['id_dist'] ?>" class="btn btn-warning btn-sm glyphicon glyphicon-edit"></a>
 			
 		<a href="hapus_dist.php?id_dist=<?php echo $data['id_dist'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');"  class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a></td>
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