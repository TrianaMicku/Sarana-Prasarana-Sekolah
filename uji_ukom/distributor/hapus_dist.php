<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_dist = $_GET['id_dist'];

	$sql = mysql_query("DELETE FROM distributor WHERE id_dist = '$id_dist'");

	if ($sql) {
		header("location:dist.php");
	}else{
		header("location:wrong.php");
	}

 ?>


  <?php 
 include '../footer.php';

  ?>