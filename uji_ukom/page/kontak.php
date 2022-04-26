<?php 
session_start();
  include '../koneksi.php';
  include '../index.php';
  
  if (empty($_SESSION['masuk'])) {
    header("location:../home.php");
  }

?><br>
 
<div class="container">

    <div class="panel panel-default">
    <div class="panel-heading">
      <b style="font-size: 12px;">Tentang Kami</b> 
  </div>

    <div class="panel-body">
    <h4 style="margin-left: 50%; font-weight: bold;">Persediaan (Inventaris)</h4>
            <br>

            <div class="col-sm-6">
              <img src="../assets/img/images.jpg" style="width: 400px; height: 300px; padding-top: 5px;">
            </div>

            <p style="text-align: justify;">Sarana dan Prasarana adalah barang sudah difasilitaskan sekolah ataupun instansi yang dapat dipinjam dan digunakan untuk memenuhi tujuan tertentu.</p> <br>

              <h4>Manfaat Aplikasi Sarana dan Prasarana</h4>
            <ol>
              <li style="text-align: justify;" > Menghemat lebih banyak waktu</li>
              <li style="text-align: justify;" > Mempermudah meminjam barang</li>
              <li style="text-align: justify;" > Mengatur permintaan peminjaman lebih mudah</li>
              <li style="text-align: justify;" > Lebih efisien</li>
              <li style="text-align: justify;" > Memudahkan dalam menginputkan barang</li>
            </ol>
 <br><br> 
<hr>
  
 <table class="table table datatable table-bordered ">
  <!--   <h4 style="margin-left: 130px; font-weight: bold;">Persediaan (Inventory)</h4> -->
            <br>

            <div class="col-sm-6">
               <center><img src="../assets/img/9251logo_sekolah.jpg" style="width: 200px; height: 200px;"></center>
            </div>

             <p class="text-center"><b>Sekolah Menengah Kejuruan Al Amanah</b></p>
            <span class="glyphicon glyphicon-map-marker"></span> Jl.Raya Puspitek Pocis Bakti Jaya / Jl Amd.Babakan Pocis,Bakti Jaya,Setu,Tangerang Selatan,Banten, 15315
            <br> <br>
            <span class=" glyphicon glyphicon-earphone"></span> Telepon/Fax : (021) 750674 <br> <br>

            <span class="glyphicon glyphicon-envelope"></span> alamanahedu@yahoo.co.id <br> <br>

            <a href="http://facebook.com/esemkaalamanah/" style="color: black;"><b style="color: black;"> Facebook : </b> SMKALAMANAH </a><br>
            <a href="hhtps://www.instagram.com/smkalamanah" style="color: black;"> <b  style="color: black;"> Instagram : </b> SMKALAMANAH</a>
  
 </table>

</div>
  </div>
    </div>



 <?php 
  include '../footer.php';


 ?>