<!-- modal daftar -->

<?php 
  if (isset($_POST['daftar'])) {
    $nm_lengkap = $_POST['nm_lengkap'];
    $nm_pengguna = $_POST['nm_pengguna'];
    $kata_sandi = md5($_POST['kata_sandi']);
    $kelamin = $_POST['kelamin'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];

    $sql = mysql_query("INSERT INTO pengguna VALUES ('', '$nm_lengkap', '$nm_pengguna', '$kata_sandi', '$kelamin', '$no_telp', '$alamat', '$jabatan')");

    if ($sql) {
        echo "<script>alert('Anda berhasil mendaftar!');</script>";
    }else{
      header("location:wrong.php");
    }
  }
 ?>
  <style>
  .modal-header, h4, .close {
    background-color: gray;
    color:white !important;
    text-align: center;
    font-size: 20px;
    border-radius: 5px;
  }
  .modal-footer {
     border-radius: 5px;
  }
  </style>





<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header" style="padding:5px 20px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Silahkan Daftar</h4>
        </div>

        <div class="modal-body" style="padding: 25px 30px;">

          <h3>
            Jika ingin login silahkan daftar ke Admin.
          </h3>
        <!--   <form role="form" action="" method="POST">

         <div class="form-group">
      <label class="control-label col-sm-2" name="nm_lengkap">Nama Lengkap</label>
     <div class="col-sm-8" >
      <input type="text" name="nm_lengkap" class="form-control" required>
  </div>
  </div><br><br><br>

   <div class="form-group">
      <label class="control-label col-sm-2" name="nm_pengguna">Nama Pengguna</label>
     <div class="col-sm-8" >
      <input type="text" name="nm_pengguna" class="form-control" required>
  </div>
  </div><br><br>

  <div class="form-group">
      <label class="control-label col-sm-2" name="kata_sandi">Kata Sandi</label>
     <div class="col-sm-8" >
      <input type="password" name="kata_sandi" class="form-control" required>
  </div>
  </div><br><br>

  <div class="form-group">
    <label class="control-label col-sm-2" name="kelamin">Jenis Kelamin</label>
     <div class="col-sm-8" >
      <select name="kelamin" class="form-control"  value="<?php echo $data['kelamin'] ?>"  required>
        <option class="list-group-item disabled">Pilih Jenis Kelamin</option>
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-laki">Laki-laki</option>
        <option>Dll</option>
      </select> 
    </div>
    </div><br><br>

   <div class="form-group">
      <label class="control-label col-sm-2" name="no_telp">No. Telpon</label>
     <div class="col-sm-8" >
      <input type="text" name="no_telp" class="form-control" required>
  </div>
  </div><br><br>

   <div class="form-group">
      <label class="control-label col-sm-2" name="alamat">Alamat</label>
     <div class="col-sm-8" >
      <input type="text" name="alamat" class="form-control" required>
  </div>
  </div><br><br>

  <div class="list-group">
    <label class="control-label col-sm-2" name="jabatan">Jabatan</label>
     <div class="col-sm-8" >
      <select name="jabatan" class="form-control" required>
        <option class="list-group-item disabled">Pilih Jabatan</option>
          <option value="Peminjam">Peminjam</option>
      </select> 
    </div>
    </div><br><br>

  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-info" name="daftar">Daftar</button>
     </div>
    </div>
          </form> -->
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

 
 <!-- <div class="form">
   <h4>Silahkan Login</h4>
       
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
            
              <button type="submit" class="btn btn-default" name="masuk"><span></span>Login</button>
          </form>
          </div> -->

