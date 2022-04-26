<?php 
    session_start();
    include '../koneksi.php';
    include '../index.php';
    
   $id_barang = $_GET['id_barang'];

    $query = "INSERT INTO peminjaman VALUES(NULL,'".$_SESSION['id_pengguna']."','$id_barang','". date('Y-m-d') ."', 'NULL','0')";
    $eksekusi = mysql_query($query);

    if ($eksekusi) {
    	header("location:keranjang.php?id_barang=".$id_barang);
    }else{
    	header("location: gagal.php");
    }
 ?>