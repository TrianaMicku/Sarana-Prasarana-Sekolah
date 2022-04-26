 <?php 
  
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
define("base_url", "http://localhost/uji_ukom/");
  if (empty($_SESSION['masuk'])) {
       header("location:home.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Inventaris</title>
  
  <script src="<?php echo base_url;?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url;?>assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url;?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url;?>assets/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url;?>assets/css/jquery.dataTables.min.css">

  <script src="<?php echo base_url;?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url;?>assets/js/popper.min.js"></script>


</head>
<body>
<style>
body {
  font-family: "Lato", sans-serif !important;
  padding-left: 175px;
  padding-right: 30px;
  margin-top: 10px;
}
</style>

<div class="print sidenav" style="background-color: black;">
 <?php if($_SESSION['jabatan'] == 'Admin'){ ?>

        <a class=" glyphicon glyphicon-home" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>page/dash.php"> Beranda</a>

        <a class=" glyphicon glyphicon-user" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>pengguna/pengguna.php"> Pengguna</a>

        <a class=" glyphicon glyphicon-tags" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>distributor/dist.php"> Supplier</a>

        <a class=" glyphicon glyphicon-list-alt" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>jenis/jenis.php"> Jenis</a>

        <a class=" glyphicon glyphicon-tasks" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>barang/barang2.php"> Barang</a>

        <a class=" glyphicon glyphicon-book" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>peminjaman/tampil_pinjam.php">  Peminjaman</a>

  <?php } ?>

    
  <?php if($_SESSION['jabatan'] == 'Manajemen'){ ?>
        
        <a class=" glyphicon glyphicon-print" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>page/dash.php"> Laporan</a>

         <a class=" glyphicon glyphicon-tasks" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>jenis/jenis.php"> Barang</a>
  <?php } ?>

  <?php if($_SESSION['jabatan'] == 'Peminjam'){ ?>

        <a class="glyphicon glyphicon-book" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>jenis/jenis.php"> Peminjaman</a>

  <?php }  ?>

  <?php if($_SESSION['jabatan'] == 'Peminjam'){ ?>

        <a class="glyphicon glyphicon-shopping-cart" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>peminjaman/keranjang.php?id_pengguna=<?php echo $_SESSION['id_pengguna']; ?>"> Keranjang</a>

  <?php }  ?>

      <a class="glyphicon glyphicon-phone-alt" style="font-weight: bold; padding: 15px; word-spacing: -5px !important;" href="../page/kontak.php"> Tentang Kami</a>

      <a class="glyphicon glyphicon-log-out" style="font-weight: bold; padding: 15px;" href="../logout.php" onclick="return confirm('Apakah anda ingin keluar?')" > Logout</a>

</div>

  <nav class="navbar navbar-fixed-top" style="background-color: #3caea3;" role="navigation">
     <div class="container">
       <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Tonggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>

            <table>
              <tr>
                <td>
                  <img src="../assets/img/triana.png" class="img-responsive" width="40" height="40">
                </td>
                <td>
                  <a href="" class="navbar-brand" style="color: white;">SARPRAS</a>
                </td>
              </tr>
            </table>
            </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">

           <li><a style="color: white;" href=""><span class="glyphicon glyphicon-user"></span> <?= ucfirst($_SESSION['nm_pengguna']);?> (<?= ucfirst($_SESSION['jabatan']);?>)</a></li>

           <?php if($_SESSION['jabatan'] == 'Peminjam'){ ?>
            <li><a href="../panduan/CaraMeminjam.pdf" class="btn btn-lg glyphicon glyphicon-info-sign" style="margin-top: 10px; margin-left: 100%; padding: 5px;"></a> </li>
          <?php } ?>


    </div>  
          </div>
              </nav>
<br><br>