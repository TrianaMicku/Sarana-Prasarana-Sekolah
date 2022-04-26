<?php 
	include '../koneksi.php';
	include '../index.php';
	
 ?><br>

<div class="container">
	<div class="row">

<!-- total semua -->
 			 <div class="col-lg-3" style="margin-right: 30px;">
    <div class="col-lg-12 btn-info" style="border-radius: 10px; width: 250px;  height: 60px; margin-right: 10px;">
      	<?php 
 			$sqlAdmin = mysql_query("SELECT COUNT(*) AS ttlAdmin FROM pengguna WHERE jabatan = 'Admin'");
 			$dataAdmin = mysql_fetch_array($sqlAdmin);
 		?>
      	<h3 style="color: black;"><a href="admin.php" style="color: white; float: right;">|<?php echo $dataAdmin['ttlAdmin'] ?></a>Data Admin </h3>

      </div>
    </div>

   			 <div class="col-lg-3" style="margin-right: 30px;">
    <div class="col-lg-12 btn-warning" style="border-radius: 10px; width: 260px;  height: 60px; margin-right: 10px;">
		<?php 
 			$sqlMjn = mysql_query("SELECT COUNT(*) AS ttlMjn FROM pengguna WHERE jabatan = 'Manajemen'");
 			$dataMjn = mysql_fetch_array($sqlMjn);
		?>
      	<h3 style="color: black;"><a href="mjn.php" style="color: white; float: right;"> |<?php echo $dataMjn['ttlMjn'] ?></a>Data Manajemen</h3>
      </div>
    </div>

    <div class="col-lg-3" style="margin-right: 30px;">
    <div class="col-lg-12 btn-success" style="border-radius: 10px; width: 260px;  height: 60px; margin-right: 10px;">
		<?php 
 			$sqlPjm = mysql_query("SELECT COUNT(*) AS ttlPjm FROM pengguna WHERE jabatan = 'Peminjam'");
 			$dataPjm = mysql_fetch_array($sqlPjm);
		?>
      	<h3 style="color: black;"><a href="pjm.php" style="color: white; float: right;"> |<?php echo $dataPjm['ttlPjm'] ?></a>Data Peminjam</h3>
      </div>
    </div>

</div>
</div>


 <?php 
	include '../footer.php';
 ?>