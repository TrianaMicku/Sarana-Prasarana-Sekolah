<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$sql = mysql_query("SELECT * FROM jenis");

	$cek_jml_pinjam = mysql_query("SELECT COUNT(*) FROM peminjaman
			WHERE id_pengguna ='".$_SESSION['id_pengguna']."' AND status != 'dikembalikan'");
		$jml_barang_dipinjam = mysql_fetch_assoc($cek_jml_pinjam);
			if ($jml_barang_dipinjam['COUNT(*)'] > 0){
	}

 ?><br>
 
<?php if($_SESSION['jabatan'] == 'Peminjam'){ ?>
 <div class="container">
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Selamat datang <?= ucfirst($_SESSION['nm_pengguna']);?> di SARPRAS App
  </div>
  </div>
<?php } ?>
 
<div class="container">
	<div class="panel panel-default">
		<?php if($_SESSION['jabatan'] == 'Peminjam'){ ?>
			   <div class="alert alert-info ">
				 	Kamu Meminjam Sudah <b><?php echo $jml_barang_dipinjam['COUNT(*)']; ?></b> Barang
				 </div>
			<?php } ?>

		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Jenis</b>
		</div>

		<div class="panel-body">
			<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
		<a href="tambah_jns.php" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
	<?php } ?><br><br>
	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 		<th class="text-center">No.</th>
 		<th class="text-center">Nama Jenis</th>
 		<th class="text-center">Jumlah</th>
 		<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
 		<th class="text-center">Aksi</th>
 	<?php } ?>
 	</tr>
 	</thead> 

 		<tbody>
  		<?php 
 	$no = 1;
 	while ($data = mysql_fetch_array($sql)) { ?>
 	
 	<tr>
 		<td class="text-center"><?php echo $no++ ?>.</td>
 		<td class="text-center"><a href="../barang/barang.php?id_jenis=<?php echo $data['id_jenis'] ?>"><?php echo $data['nm_jenis'] ?></td>
 		<?php 
					$id_jenis = $data['id_jenis'];
					$sql_jumlah = "SELECT COUNT(spek_barang) as jumlah_barang FROM barang WHERE id_jenis = $id_jenis";
					$eksekusi_jumlah = mysql_query($sql_jumlah);
					$data_jumlah = mysql_fetch_array($eksekusi_jumlah);
			?>

		<td class="text-center"><?php echo $data_jumlah['jumlah_barang'] ?></td>

 		<!-- <td class="text-center"><a href="../barang/barang.php?id_jenis=<?php echo $data['id_jenis'] ?>"  class="btn btn-success btn-sm">Detail</a> -->

 		<?php if($_SESSION['jabatan'] == 'Admin'){ ?>

 		<td class="text-center"><a href="ubah_jns.php?id_jenis=<?php echo $data['id_jenis'] ?>" class="btn btn-warning btn-sm glyphicon glyphicon-edit"></a>
 		
 		<a href="hapus_jns.php?id_jenis=<?php echo $data['id_jenis'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');"  class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a></td>
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