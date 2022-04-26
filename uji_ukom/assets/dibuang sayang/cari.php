<form class="navbar-form navbar-left" action="">
        <form method="POST">
             <div class="col-sm-10">
               <input type="text" name="cari" placeholder="Cari..." alert-label="cari" class="form-control" autocomplete="off">
            </div>
              <button class="btn btn-danger glyphicon glyphicon-search" type="submit" name="cari"></button>
            </form>




            	<!-- <div class="form-group">
		<label class="control-label col-sm-2" for="id_jenis">Nama Jenis</label>
	 <div class="col-sm-4" >
		<select name="id_jenis" class="form-control" required>
			<option class="list-group-item disabled">Pilih Jenis</option>
			<?php 
				$sql = mysql_query("SELECT * FROM jenis");
				while ($data = mysql_fetch_array($sql)) {
					?>
				<option value="<?php echo($data['id_jenis']) ?>" <?php if (isset($_GET['id_jenis'])) { echo ($data['id_jenis']) == $data['id_jenis'] ? 'selected' : null;} ?>><?php echo ($data['nm_jenis']); ?></option>
				<?php } ?>
				</select>
			</div>
		</div><br><br>
 -->


 <!--  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffc266;">Peminjaman<b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Peminjaman</li>

              <li><a href="<?php echo base_url; ?>peminjaman/tampil_pinjam.php">Data Peminjaman Berjalan</a></li>
              <li><a href="<?php echo base_url; ?>peminjaman/dibooking.php">Data Peminjaman Dibooking</a></li>
              <li><a href="<?php echo base_url; ?>peminjaman/dipinjam.php">Data Peminjaman Dipinjam</a></li>
              <li><a href="<?php echo base_url; ?>peminjaman/kembalikan.php">Data Peminjaman Selesai</a></li>

              <li class="divider">
              <li><a href="<?php echo base_url; ?>peminjaman/#.php">Data Peminjaman berdasarkan Jenis</a></li> 
          </ul>
        </li> -->

        <!--  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffc266;">Laporan<b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">

            <li><a href="<?php echo base_url; ?>laporan/lap_peng.php">Laporan Pengguna</a></li>
            <li><a href="<?php echo base_url; ?>laporan/lap_jenis.php">Laporan Jenis</a></li>
            <li><a href="<?php echo base_url; ?>laporan/lap_barang2.php">Laporan Barang</a></li>
            <li><a href="<?php echo base_url; ?>laporan/lap_dist.php">Laporan Distributor</a></li>
          </ul>
        </li>
         <li><a href="<?php echo base_url; ?>laporan/admin.php" style="color: #ffc266;">admin</a></li>
         <li><a href="<?php echo base_url; ?>laporan/mjn.php" style="color: #ffc266;">mjn</a></li>
         <li><a href="<?php echo base_url; ?>laporan/pjm.php" style="color: #ffc266;">pjm</a></li>
          -->


<!-- home -->

  <!DOCTYPE html>
 <html lang="en" id="home">
 <head>
  <title>Aplikasi Inventaris Sarana & Prasarana</title>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">

 </head>
 <body >

    <nav class="navbar navbar-fixed-top" style="background-color: #008080;" role="navigation">
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
                  <img src="assets/img/triana.png" class="img-responsive" width="40" height="40">
                </td>
                <td>
                  <a href="#home" class="navbar-brand page-scroll" style="color: #ffc266;">SARPRAS</a>
                </td>
              </tr>
            </table>
            </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          
       <?php if(isset($_SESSION['masuk'])){ ?>

            <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
             <li><a style="color: #ffc266;" href="jenis/jenis.php">Ayo Pinjam</a></li>
            <?php } ?>

            <?php if($_SESSION['jabatan'] == 'Peminjam'){ ?>
             <li><a style="color: #ffc266;" href="jenis/jenis.php">Ayo Pinjam</a></li>
            <?php } ?>

            <?php if($_SESSION['jabatan'] == 'Manajemen'){ ?>
            <li><a style="color: #ffc266;" href="laporan/index.php">Ayo Pinjam</a></li>
            <?php } ?>

      <?php }  ?>
        <?php if(empty($_SESSION['masuk'])){ ?>
      <li><a style="color: #ffc266;" class="page-scroll" href="login.php">Login</a></li>
    <?php } ?>
    </div>  

          </div>
        </nav>


<!--   carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>

  </ol>
  <style>

  
.tales {
  width: 1400px !important;
  height: 600px !important;
}
  </style>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="assets/img/4.png" alt="Los Angeles" class="tales">
    </div>

    <div class="item">
      <img src="assets/img/3.png" alt="Chicago" class="tales">
    </div>

    <div class="item">
      <img src="assets/img/2.png" alt="New York" class="tales">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- akhir carousel -->


<script src="assets/js/script.js"></script>
  <!-- akhir kontak kami -->


<!-- akhir  -->