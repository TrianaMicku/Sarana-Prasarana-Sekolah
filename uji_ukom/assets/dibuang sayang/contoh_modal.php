<style>
  .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>

<div class="container">
  <h2>Silahkan Login </h2>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Login</h4>
        </div>

        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="" method="POST">

            <div class="form-group">
              <label>
              <span class="glyphicon glyphicon-user"></span>Nama Pengguna</label>

              <input type="text" class="form-control" name="nm_pengguna" placeholder="Nama Pengguna">
            </div>

            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span>Kata Sandi</label>

              <input type="password" class="form-control" name="kata_sandi" placeholder="Kata Sandi">
            </div>

            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            
              <button type="submit" class="btn btn-danger btn-block" name="masuk"><span class="glyphicon glyphicon-off"></span>Login</button>
          </form>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>


<!-- <?php
session_start();
  if (isset($_SESSION['masuk'])) {
  header("location:jenis/jenis.php");
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
      header("location:jenis/jenis.php");
    }
    elseif ($data['jabatan'] == Peminjam) 
      header("location:jenis/jenis.php");

    elseif ($data['jabatan'] == Manajemen) 
      header("location:laporan/lap_jenis.php");

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
    <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
  <style>
  body{
    background-image: url(assets/img/11.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
  .modal-header, .close {
    border-radius: 7px;
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
    color:black !important;
  }

  h4{
     text-align: center;
    font-style: italic;
    font-weight: bold;
    font-size: 25px;
  }

  .modal-body{
    padding:20px 25px;
  }

  .modal-footer {
     background: linear-gradient(to top left, #33ccff 0%, #ff99cc 100%);
     border-radius: 7px;
  }
  </style>

<div class="container">
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Silahkan Login</h4>
        </div>

        <div class="modal-body" style="">
          <form role="form" action="" method="POST">

            <div class="form-group">
                <div class="col-md-10">
              <label><span class="glyphicon glyphicon-user"></span> Nama Pengguna</label>
              <input type="text" class="form-control" name="nm_pengguna" placeholder="Nama Pengguna">
             
            </div>
             </div><br><br><br><br> 

            <div class="form-group">
              <div class="col-md-10">
              <label><span class="glyphicon glyphicon-eye-open"></span> Kata Sandi</label>

              <input type="password" class="form-control" name="kata_sandi" placeholder="Kata Sandi">
            </div>
             </div><br><br> 

            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            
              <button type="submit" class="btn btn-default" name="masuk"><span></span>Login</button>
          </form>
        </div>

        <div class="modal-footer">
          <p>Not a member? <a href="daftar.php">Sign Up</a></p>
          <p>Forgot Password ?<a href="#"></a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
</body>
</html> -->


  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-md" id="myBtn">Date</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="text-center">Data Peminjaman Berdasarkan Tanggal</h4>
        </div>

        <div class="modal-body" style="">
          <form role="form" action="" method="POST">
          
          <div class="form-group">
           <label>Dari tanggal</label>
            <input type="date" class="form-control" name="from-date" required>
          </div>

          <div class="form-group">
            <label>Sampai tanggal</label>
              <input type="date" class="form-control" name="to-date" required>
          </div>
          </form>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-info btn-sm">Submit</button>
            <button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 