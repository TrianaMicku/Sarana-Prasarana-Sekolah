<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

?>
 
<div class="container">

 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Kontak Kami</b>	
	</div>

		<div class="panel-body">

	
 <table class="table table datatable table-bordered ">
 	<!--   <h4 style="margin-left: 130px; font-weight: bold;">Persediaan (Inventory)</h4> -->
            <br>

            <div class="col-sm-6">
            	 <img src="assets/img/9251logo_sekolah.jpg" style="width: 250px; height: 250px;">
          	</div>

             <p><b>Sekolah Menengah Kejuruan Al Amanah</b></p><hr>
            <span class="glyphicon glyphicon-map-marker"></span> Jl.Raya Puspitek Pocis Bakti Jaya / Jl Amd.Babakan Pocis,Bakti Jaya,Setu,Tangerang Selatan,Banten, 15315
            <hr>
            <span class=" glyphicon glyphicon-earphone"></span> Telepon/Fax : (021) 750674 <hr>
            <span class="glyphicon glyphicon-envelope"></span> alamanahedu@yahoo.co.id <hr>
            <a href="http://facebook.com/esemkaalamanah/" style="color: black;"><b class="fab fa-facebook-square" style="color: black;"></b> SMKALAMANAH </a><hr>
            <a href="hhtps://www.instagram.com/smkalamanah" style="color: black;"> <b class=" fab fa-instagram" style="color: black;"></b> SMKALAMANAH</a>
 	
 </table>

</div>
	</div>
		</div>



 <?php 
	include '../footer.php';


 ?>