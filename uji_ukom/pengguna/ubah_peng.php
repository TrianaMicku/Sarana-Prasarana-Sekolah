<?php 
	include '../koneksi.php';
	include '../index.php';
	
	$id_pengguna = $_GET['id_pengguna'];

	$sql = mysql_query("SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'");

	$data = mysql_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		
		$nm_lengkap = $_POST['nm_lengkap'];
		$nm_pengguna = $_POST['nm_pengguna'];
		$kata_sandi = md5($_POST['kata_sandi']);
		$kelamin = $_POST['kelamin'];
		$no_telp = $_POST['no_telp'];
		$alamat = $_POST['alamat'];
		$jabatan = $_POST['jabatan'];

		$sql = mysql_query("UPDATE pengguna SET nm_lengkap = '$nm_lengkap', nm_pengguna = '$nm_pengguna', kata_sandi = '$kata_sandi', kelamin = '$kelamin', no_telp = '$no_telp', alamat = '$alamat',  jabatan = '$jabatan' WHERE id_pengguna = '$id_pengguna'");

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
			<b style="font-size: 12px;">Ubah Pengguna</b>
		</div>

 		<div class="panel-body">
 <form action="" method="POST">
 
 	
	 <div class="form-group">
			<label class="control-label col-sm-2" name="nm_lengkap">Nama Lengkap</label>
		 <div class="col-sm-4" >
			<input type="text" name="nm_lengkap" class="form-control" value="<?php echo $data['nm_lengkap'] ?>">
	</div>
	</div><br><br>

	<div class="form-group">
			<label class="control-label col-sm-2" name="nm_pengguna">Nama Pengguna</label>
		 <div class="col-sm-4" >
			<input type="text" name="nm_pengguna" class="form-control" value="<?php echo $data['nm_pengguna'] ?>">
	</div>
	</div><br><br>

 	<div class="form-group">
			<label class="control-label col-sm-2" name="kata_sandi">Kata Sandi</label>
		 <div class="col-sm-4" >
			<input type="password" name="kata_sandi" class="form-control" value="<?php echo $data['kata_sandi'] ?>">
	</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" name="kelamin">Jenis Kelamin</label>
		 <div class="col-sm-4" >
			<select name="kelamin" class="form-control" value="<?php echo $data['kelamin'] ?>">
				<option selected disabled>Pilih Jenis Kelamin</option>
				<option value="Perempuan">Perempuan</option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Dll">Dll</option>
			</select>	
		</div>
		</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" name="no_telp">No. Telpon</label>
		 <div class="col-sm-4" >
			<input type="text" name="no_telp" class="form-control" value="<?php echo $data['no_telp'] ?>">
	</div>
	</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" name="alamat">Alamat</label>
		 <div class="col-sm-4" >
			<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>">
	</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" name="jabatan">Jabatan</label>
		 <div class="col-sm-4" >
			<select name="jabatan" class="form-control"  value="<?php echo $data['jabatan'] ?>" >
				<option selected disabled>Pilih Jabatan</option>
				<option value="Admin">Admin</option>
				<option value="Manajemen">Manajemen</option>
				<option value="Peminjam">Peminjam</option>
			</select>	
		</div>
		</div><br><br>

	<div class="form-group">        
     		<div class="col-sm-offset-2 col-sm-10">
        		<button type="submit" class="btn btn-info btn-sm" name="ubah">Ubah</button>
     </div>
    </div>

 </form>
</div>
</div>

	 

</div>
 <?php 
 include '../footer.php';

  ?>