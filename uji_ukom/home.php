<?php
  include 'koneksi.php';
 
 ?>
<!-- home -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aplikasi Sarana Prasarana Sekolah</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>

    <div class="landing-page">
      <div class="page-content">
        <h2 style="color: brown;">Selamat Datang Di Sistem Sarana Prasarana</h2>
        <h4 style="color: brown;">Memudahkan anda dalam meminjam barang</h4>
        <a href="login.php" style="color: white;">Ayo Pinjam</a>
      </div>
    </div>

<style>
  
  *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
}
.landing-page{
  width: 100%;
  height: 100vh;
  background: #000;
  position: relative;
  overflow: hidden;
}
.landing-page::after{
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url(assets/img/3.png) no-repeat;
  background-size: cover;
  opacity: ;
  animation: anim 25s linear infinite;
}
@keyframes anim {
  50%{
    transform: scale(2);
  }
  100%{
    transform: scale(1);
  }
}
.page-content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 1;
  width: 100%;
  max-width: 800px;
  text-align: center;
  padding: 0 40px;
  box-sizing: border-box;
}
.page-content h2{
  color: black;
  text-transform: uppercase;
  font-size: 40px;
  font-weight: 900;
  margin-bottom: 20px;
}
.page-content h4{
  color: #fff;
  margin-bottom: 20px;
}
.page-content a{
  display: inline-block;
  text-decoration: none;
  color: #ff7979;
  border: 2px solid #ff7979;
  text-transform: uppercase;
  padding: 10px 20px;
  transition: 0.4s linear;
}
.page-content a:hover{
  color: #fff;
  background: #ff7979;
}
.text{
  padding: 10px;
  text-align: justify;
}
.text div{
  margin-bottom: 6px;
}

</style>

<!-- akhir  -->

