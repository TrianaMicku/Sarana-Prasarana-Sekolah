<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_jns = $_GET['id'];


	if (isset($_POST['simpan'])) {
		$id_jenis = $_POST['id_jenis'];
		$gambar = $_FILES['gambar']['name'];
		$ekstensi = $_FILES['gambar']['tmp_name'];
		$spek_barang = $_POST['spek_barang'];
		$kondisi = $_POST['kondisi'];
		$sumber_dana = $_POST['sumber_dana'];
		$harga = $_POST['harga'];
		$id_dist = $_POST['id_dist'];
		$tgl_beli = $_POST['tgl_beli'];

		$lokasi = "../assets/img2/".$gambar;

		move_uploaded_file($ekstensi, $lokasi);


		$sql = mysql_query("INSERT INTO barang VALUES('', '$id_jenis', '$gambar', '$spek_barang', '$kondisi', '$sumber_dana', '$harga', '$id_dist', '$tgl_beli')");

		if ($sql) {
			header("location:../jenis/jenis.php");
		}else{
			header("location:wrong.php");
		}
	}
 ?><br>
 
 <div class="container">
 	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Tambah Barang </b>
		</div>

<div class="panel-body">
<form action="" method="POST" enctype="multipart/form-data">

 		<div class="form-group">
			<label class="control-label col-sm-2" >Id Jenis</label>
		 <div class="col-sm-4" >
			<input type="text" name="id_jenis" class="form-control" value="<?php echo $id_jns ?>" required>
	</div>
	</div><br><br>

		<div class="form-group">
			<label class="control-label col-sm-2" >Gambar</label>
		 <div class="col-sm-4" >
			<input type="file" name="gambar" id="gambar" class="form-control" required>
	</div>
	</div><br><br>

	<div class="form-group">
			<label class="control-label col-sm-2">Spesifikasi Barang</label>
		 <div class="col-sm-4" >
			<input type="text" name="spek_barang" class="form-control" required>
	</div>
	</div><br><br>

	 <div class="list-group">
		<label class="control-label col-sm-2" >Kondisi</label>
	 <div class="col-sm-4" >
		<select name="kondisi" class="form-control" required>
			<option selected disabled>Pilih Kondisi</option>
			<option value="Baik">Baik</option>
			<option value="Rusak">Rusak</option>
			<option value="Hilang">Hilang</option>
		</select>
			</div>
		</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" >Sumber Dana</label>
		 <div class="col-sm-4" >
			<input type="text" name="sumber_dana" class="form-control" required>
	</div>
	</div><br><br>

	<div class="form-group">
			<label class="control-label col-sm-2" >Harga</label>
		 <div class="col-sm-4" >
			<input type="text" name="harga" class="form-control" required>
	</div>
	</div><br><br>


	<div class="form-group">
		<label class="control-label col-sm-2" >Distributor</label>
	 <div class="col-sm-4" >
		<select name="id_dist" class="form-control" required>
			<option selected disabled>Pilih Distributor</option>
			<?php 
				$sql = mysql_query("SELECT * FROM distributor");
				while ($data = mysql_fetch_array($sql)) {
					?>
				<option value="<?php echo($data['id_dist']) ?>" <?php if (isset($_GET['id_dist'])) { echo ($data['id_dist']) == $data['id_dist'] ? 'selected' : null;} ?>><?php echo ($data['nm_dist']); ?></option>
				<?php } ?>
				</select>
			</div>
		</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2">Tanggal Beli</label>
		 <div class="col-sm-4" >
			<input type="date" name="tgl_beli" class="form-control" required>
	</div>
	</div><br><br>

	<div class="form-group">        
     		<div class="col-sm-offset-2 col-sm-10">
        		<button type="submit" class="btn btn-info btn-sm" name="simpan">Simpan</button>
     </div>
    </div>
 
</div>
</form>
</div>
</div>

 <?php 
 	include '../footer.php';

  ?>

 