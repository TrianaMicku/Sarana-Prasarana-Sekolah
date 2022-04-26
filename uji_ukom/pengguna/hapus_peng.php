<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_pengguna = $_GET['id_pengguna'];

	$sql = mysql_query("DELETE FROM pengguna WHERE id_pengguna = '$id_pengguna'");

	if ($sql) {
		header("location:pengguna.php");
	}else{
		header("location:wrong.php");
	}

 ?>


  <?php 
 include '../footer.php';

  ?>