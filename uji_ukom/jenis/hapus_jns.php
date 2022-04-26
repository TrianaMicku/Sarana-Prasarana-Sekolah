<?php 
	include '../koneksi.php';
	include '../index.php';
	
	$id_jenis = $_GET['id_jenis'];

	$sql = mysql_query("DELETE FROM jenis WHERE id_jenis = '$id_jenis'");

	if ($sql) {
		header("location:jenis.php");
	}else{
		header("location:wrong.php");
	}

 ?>


  <?php 
 include '../footer.php';

  ?>