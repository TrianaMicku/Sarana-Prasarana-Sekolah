<?php
session_start();
	if (isset($_SESSION['masuk'])) {
	header("location:page/dash.php");
}
	include 'koneksi.php';
	
	if (isset($_POST['masuk'])) {
		$nm_pengguna = $_POST['nm_pengguna'];
		$kata_sandi = md5($_POST['kata_sandi']);

	$sql = mysql_query("SELECT * FROM pengguna WHERE nm_pengguna = '$nm_pengguna' AND kata_sandi = '$kata_sandi'");
	
	$num = mysql_num_rows($sql);

	if ($num > 0) {
		$data = mysql_fetch_array($sql);

		$_SESSION['masuk'] = true;
		$_SESSION['id_pengguna'] = $data['id_pengguna'];
		$_SESSION['nm_pengguna'] = $data['nm_pengguna'];
		$_SESSION['jabatan'] = $data['jabatan'];
		
		if ($data['jabatan'] == Admin) {
			header("location:page/dash.php");
		}
		elseif ($data['jabatan'] == Peminjam) 
			header("location:jenis/jenis.php");

		elseif ($data['jabatan'] == Manajemen) 
			header("location:page/dash.php");

		}
		else{
			echo "<script>alert('Login Gagal !');</script>";

		}
		}	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Inventaris Sarana & Prasarana</title>
		  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/style.css">
 		  <script src="assets/js/jquery.min.js"></script>
   		<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

  <style>
    body{
     /*  background-image:url('assets/img/13.jpg');
       background-repeat: no-repeat;
       background-size: cover;*/
       background-color: white;
      }

      .form{
       background:rgba(0, 0, 0, 0.14);
       box-shadow: 0px 0px 15px 3px;
       border-radius:3px;
       width:400px;
       margin:15px auto;
       padding:20px;
      }

      .form h1{
       color: black;
       text-align:center;
      }

      .form img{
       width:150px;
      }

      #input{
      /* background: rgba(23, 20, 30, 0.30);*/
       font-size:12pt;
       font-family:arial;
       color:brown;
       width:100%;
       height:40px;
       padding:5px 5px 5px 10px;
       margin:3px;
       border-radius:3px;
       border:none;
       border-radius: 10px;
      }
      #input[type="submit"]{
       background:rgba(31, 15, 2, 0.78);
       color:#fff;
       cursor:pointer;       
      }
      #input:hover, #input:focus{
       background:rgba(97, 52, 13, 0.55);
       outline-style:none;
      }
      #input[type="submit"]:hover, #input[type="submit"]:focus{
       background:rgba(31, 15, 2, 0.78);
      }

  </style>
  <div class="container">

    <a href="panduan/login2.pdf" class="btn btn-warning btn-lg glyphicon glyphicon-info-sign" style="margin-top: 10px; margin-left: 100%; padding: 5px;"></a>

   <!--  <a href="home.php" class="btn btn-warning btn-sm glyphicon glyphicon-chevron-right" style="margin-top: 10px; margin-left: 100%; padding: 10px;"></a>

    <a href="#" class="btn btn-warning btn-sm glyphicon glyphicon-chevron-left" style="margin-top: 10px; float: left; padding: 10px;"></a>
 -->
  </div>
<div class="form">
  <h1>Silahkan Masuk</h1>
  <center><img src="assets/img/triana.png"></center>
  <form method="POST" action="">
   <input id="input" type="text" name="nm_pengguna" placeholder="Nama Pengguna" >
   <input id="input" type="password" name="kata_sandi" placeholder="Kata Sandi"><br><br>
   <input name="masuk" style="width: 100%;" type="submit" value="Login" class="btn btn-danger" ><br><br>
  </form>
 </div>


<!-- <?php 
  include 'footer.php';

  ?> -->
