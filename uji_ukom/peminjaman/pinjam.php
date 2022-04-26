<?php 
	session_start();
	include '../koneksi.php';
	include '../index.php';

	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$jenis = $_GET['id_jenis'];
	$id_pengguna = $_SESSION['id_pengguna'];
	$id_barang = $_GET['id_barang'];

	$pinjam = mysql_query("INSERT INTO peminjaman
								(`id_pinjam`,
								 `id_pengguna`, 
								 `id_barang`, 
								 `tgl_pinjam`, 
								 `tgl_kembali`, 
								 `status`) 
								 VALUES (NULL, '$id_pengguna', '$id_barang','', '', '')");
	if($pinjam){
		header("location:tampil_pinjam.php");
	}else{
		echo "gagaal";
	}
 ?>
