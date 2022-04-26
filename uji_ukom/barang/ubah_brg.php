<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_barang = $_GET['id_barang'];

	$sql = mysql_query("SELECT * FROM barang WHERE id_barang = '$id_barang'");

	$data = mysql_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		$gambar = $_FILES['gambar']['name'];
		$ekstensi = $_FILES['gambar']['tmp_name'];
		$spek_barang = $_POST['spek_barang'];
		$kondisi = $_POST['kondisi'];
		$sumber_dana = $_POST['sumber_dana'];
		$harga = $_POST['harga'];
		$id_dist = $_POST['id_dist'];
		$tgl_beli = $_POST['tgl_beli'];

		if (empty($gambar)) {
			$sql = mysql_query("UPDATE barang SET spek_barang = '$spek_barang', kondisi = '$kondisi', sumber_dana = '$sumber_dana', harga = '$harga', id_dist = '$id_dist', tgl_beli = '$tgl_beli' WHERE id_barang = '$id_barang'");
		}else{
			$lokasi = "../assets/img2/".$gambar;
			move_uploaded_file($ekstensi, $lokasi);

			$sql = mysql_query("UPDATE barang SET gambar = '$gambar',  spek_barang = '$spek_barang', kondisi = '$kondisi', sumber_dana = '$sumber_dana', harga = '$harga', id_dist = '$id_dist', tgl_beli = '$tgl_beli' WHERE id_barang = '$id_barang'");
		}

				

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
			<b style="font-size: 12px;">Ubah Barang</b>
		</div>

<div class="panel-body">
 <form action="" method="POST" enctype="multipart/form-data">

	 <div class="form-group">
			<label class="control-label col-sm-2" for="gambar">Gambar</label>
		 <div class="col-sm-4" >
			<input type="file" name="gambar" class="form-control" value="<?php echo $data['gambar'] ?>">
	</div>
	</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" for="spek_barang">Spesifikasi Barang</label>
		 <div class="col-sm-4" >
			<input type="text" name="spek_barang" class="form-control" value="<?php echo $data['spek_barang'] ?>">
	</div>
	</div><br><br>

	 <div class="list-group">
		<label class="control-label col-sm-2" for="kondisi">Kondisi</label>
	 <div class="col-sm-4" >
		<select name="kondisi" class="form-control" value="<?php echo $data['kondisi'] ?>">
			<option selected disabled>Pilih Kondisi</option>
			<option value="Baik">Baik</option>
			<option value="Rusak">Rusak</option>
			<option value="Hilang">Hilang</option>
		</select>
			</div>
		</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" for="sumber_dana">Sumber Dana</label>
		 <div class="col-sm-4" >
			<input type="text" name="sumber_dana" class="form-control" value="<?php echo $data['sumber_dana'] ?>">
	</div>
	</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" for="harga">Harga</label>
		 <div class="col-sm-4" >
			<input type="text" name="harga" class="form-control" value="<?php echo $data['harga'] ?>">
	</div>
	</div><br><br>


	<div class="form-group">
		<label class="control-label col-sm-2" for="id_dist">Distributor</label>
	 <div class="col-sm-4" >
		<select name="id_dist" class="form-control" value="<?php echo $data['id_dist'] ?>">
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
			<label class="control-label col-sm-2" for="tgl_beli">Tanggal Beli</label>
		 <div class="col-sm-4" >
			<input type="date" name="tgl_beli" class="form-control" value="<?php echo $data['tgl_beli'] ?>">
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