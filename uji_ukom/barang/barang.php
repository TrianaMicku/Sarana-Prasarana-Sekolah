<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$id_jenis = $_GET['id_jenis'];

		$sql = mysql_query("SELECT * FROM barang AS b
											inner join distributor AS di on di.id_dist = b.id_dist 
											WHERE id_jenis = '$id_jenis'");

		$sql2 = mysql_query("SELECT nm_jenis FROM jenis WHERE id_jenis = '$id_jenis'");



 ?><br>
 
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Barang</b>
		</div>
		
<div class="panel-body">
 	<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
		<a href="tambah_brg.php?id=<?php echo $id_jenis ?>" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
	<?php } ?>

	<?php if($_SESSION['jabatan'] == 'Manajemen'){ ?>
		<a href="tambah_brg.php?id=<?php echo $id_jenis ?>" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
	<?php } ?>


 <table class="table datatable table-bordered">
 	<thead>
  	<tr class="success">
 		<th class="text-center">No.</th>
 		<th class="text-center">Gambar</th>
 		<th class="text-center">Spesifikasi Barang</th>
 		<th class="text-center">Kondisi</th>
 		<th class="text-center">Sumber Dana</th>
 		<th class="text-center">Harga</th>
 		<th class="text-center">Supplier</th>
 		<th class="text-center">Tanggal Beli</th>
 		<th class="text-center">Status</th>
 		<th colspan="3" class="text-center">Aksi</th>
 	</tr>
 	</thead>

 	<tbody>
 		<?php 
 	$no = 1;
 	while ($data = mysql_fetch_array($sql)) { ?>
 	
 	<tr>
 		<td class="text-center"><?php echo $no++ ?>.</td>
 		<td class="text-center"><img style="width: 60px;" src="../assets/img2/<?php echo $data['gambar'] ?>"></td>
 		<td class="text-center"><?php echo $data['spek_barang'] ?></td>
 		<td class="text-center"><?php echo $data['kondisi'] ?></td>
 		<td class="text-center"><?php echo $data['sumber_dana'] ?></td>
 		<td class="text-center"><?php echo $data['harga'] ?></td>
 		<td class="text-center"><?php echo $data['nm_dist'] ?></td>
 		<td class="text-center"><?php echo $data['tgl_beli'] ?></td>
 		<?php 
 		$query2 = ("SELECT * FROM peminjaman WHERE id_barang = '". $data['id_barang'] ."' AND status !='2'");
					$eksekusi2 = mysql_query($query2);
					$num = mysql_num_rows($eksekusi2);

 			if ($num > 0) { ?>
						<td>
							dibooking
						</td> 	
					<?php }elseif($num > 1){?>
						<td>
							dipinjam
						</td> 
					<?php }else{ ?>
						<td>
							tersedia
						</td>
					<?php } ?>	


 		<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
			<td class="text-center"><a href="ubah_brg.php?id_barang=<?php echo $data['id_barang'] ?>" class="btn btn-warning btn-sm glyphicon glyphicon-edit"></a></td>

	 		<td class="text-center"><a href="hapus_brg.php?id_barang=<?php echo $data['id_barang'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');"  class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a></td>
		<?php } ?>

 		<?php 
					$query2 = ("SELECT * FROM peminjaman WHERE id_barang = '". $data['id_barang'] ."' AND status !='2'");
					$eksekusi2 = mysql_query($query2);
					$num = mysql_num_rows($eksekusi2);
					if ($num > 0) { ?>
						
						<td>
							<a href="../peminjaman/proses_pinjam.php?id_barang=<?php echo $data['id_barang'];?>&id_jenis=<?php echo $id_jenis?>" onclick="return confirm('Yakin Ingin meminjam Barang Ini ?');" class="btn btn-success btn-sm disabled glyphicon glyphicon-shopping-cart"></a>
						</td> 	

					<?php }else{?>
						
						<?php 
							if ($data['kondisi'] == 'Rusak') {?>
								<td>
							<a href="../peminjaman/proses_pinjam.php?id_barang=<?php echo $data['id_barang'];?>&id_jenis=<?php echo $id_jenis?>" onclick="return confirm('Yakin Ingin meminjam Barang Ini ?');" class="btn btn-success btn-sm glyphicon glyphicon-shopping-cart disabled"></a>
						</td> 
						<?php } elseif ($data['kondisi'] == 'Hilang') {?>
							<td>
							<a href="../peminjaman/proses_pinjam.php?id_barang=<?php echo $data['id_barang'];?>&id_jenis=<?php echo $id_jenis?>" onclick="return confirm('Yakin Ingin meminjam Barang Ini ?');" class="btn btn-success btn-sm glyphicon glyphicon-shopping-cart disabled"></a>
						</td> 
						<?php }else{?>
							<td>
							<a href="../peminjaman/proses_pinjam.php?id_barang=<?php echo $data['id_barang'];?>&id_jenis=<?php echo $id_jenis?>" onclick="return confirm('Yakin Ingin meminjam Barang Ini ?');" class="btn btn-success btn-sm glyphicon glyphicon-shopping-cart"></a>
						</td> 
						<?php } ?>
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