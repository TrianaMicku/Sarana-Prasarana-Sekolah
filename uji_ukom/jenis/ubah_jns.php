<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_jenis = $_GET['id_jenis'];

	$sql = mysql_query("SELECT * FROM jenis WHERE id_jenis = '$id_jenis'");

	$data = mysql_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		$nm_jenis = $_POST['nm_jenis'];


		$sql = mysql_query("UPDATE jenis SET nm_jenis = '$nm_jenis' WHERE id_jenis = '$id_jenis'");

		if ($sql) {
			header("location:jenis.php");
		}else{
			header("location:wrong.php");
		}
	}

 ?><br>

<div class="container">
 	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Ubah Jenis</b>
		</div>

<div class="panel-body">
 <form action="" method="POST">
 	<div class="form-group">
			<label class="control-label col-sm-2" for="nm_jenis">Nama Jenis</label>
		 <div class="col-sm-4" >
			<input type="text" name="nm_jenis" class="form-control" value="<?php echo $data['nm_jenis'] ?>" required>
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