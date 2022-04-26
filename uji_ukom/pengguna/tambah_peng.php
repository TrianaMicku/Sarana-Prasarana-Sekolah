<?php 
	include '../koneksi.php';
	include '../index.php';

	if (isset($_POST['simpan'])) {
		$nm_lengkap = $_POST['nm_lengkap'];
		$nm_pengguna = $_POST['nm_pengguna'];
		$kata_sandi = md5($_POST['kata_sandi']);
		$kelamin = $_POST['kelamin'];
		$no_telp = $_POST['no_telp'];
		$alamat = $_POST['alamat'];
		$jabatan = $_POST['jabatan'];

		$sql = mysql_query("INSERT INTO pengguna VALUES ('', '$nm_lengkap', '$nm_pengguna', '$kata_sandi', '$kelamin', '$no_telp', '$alamat', '$jabatan')");

		if ($sql) {
			header("location:pengguna.php");
		}else{
			header("location:wrong.php");
		}
	}
 ?><br>

 	<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Tambah Pengguna</b>
		</div>

	<div class="panel-body">
 		<form action="" method="POST">
 	
	 <div class="form-group">
			<label class="control-label col-sm-2" name="nm_lengkap">Nama Lengkap</label>
		 <div class="col-sm-4" >
			<input type="text" name="nm_lengkap" class="form-control" required>
	</div>
	</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" name="nm_pengguna">Nama Pengguna</label>
		 <div class="col-sm-4" >
			<input type="text" name="nm_pengguna" class="form-control" required>
	</div>
	</div><br><br>

 	<div class="form-group">
			<label class="control-label col-sm-2" name="kata_sandi">Kata Sandi</label>
		 <div class="col-sm-4" >
			<input type="password" name="kata_sandi" class="form-control" required>
	</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" name="kelamin">Jenis Kelamin</label>
		 <div class="col-sm-4" >
			<select name="kelamin" class="form-control"  value="<?php echo $data['kelamin'] ?>"  required>
				<option selected disabled>Pilih Jenis Kelamin</option>
				<option value="Perempuan">Perempuan</option>
				<option value="Laki-laki">Laki-laki</option>
				<option>Dll</option>
			</select>	
		</div>
		</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" name="no_telp">No. Telpon</label>
		 <div class="col-sm-4" >
			<input type="text" name="no_telp" class="form-control" required>
	</div>
	</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" name="alamat">Alamat</label>
		 <div class="col-sm-4" >
			<input type="text" name="alamat" class="form-control" required>
	</div>
	</div><br><br>

	<div class="list-group">
		<label class="control-label col-sm-2" name="jabatan">Jabatan</label>
		 <div class="col-sm-4" >
			<select name="jabatan" class="form-control" required>
				<option selected disabled>Pilih Jabatan</option>
				<option value="Admin">Admin</option>
				<option value="Manajemen">Manajemen</option>
				<option value="Peminjam">Peminjam</option>
			</select>	
		</div>
		</div><br><br>

	<div class="form-group">        
  		<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-info btn-sm" name="simpan">Simpan</button>
     </div>
    </div>

 </form>

</div>
</div>


 <?php 
 	include '../footer.php';

  ?>


  