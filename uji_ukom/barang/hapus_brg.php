<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_barang = $_GET['id_barang'];

	$sql = mysql_query("DELETE FROM barang WHERE id_barang = '$id_barang'");

	if ($sql) {
		header("location:../jenis/jenis.php");
	}else{
		header("location:wrong.php");
	}

 ?>


  <?php 
 include '../footer.php';

  ?>