<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_dist = $_GET['id_dist'];

	$sql = mysql_query("SELECT * FROM distributor WHERE id_dist = '$id_dist'");

	$data = mysql_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		$nm_dist = $_POST['nm_dist'];
		$telp_dist = $_POST['telp_dist'];
		$almt_dist = $_POST['almt_dist'];

		$sql = mysql_query("UPDATE distributor SET nm_dist = '$nm_dist', telp_dist = '$telp_dist', almt_dist = '$almt_dist' WHERE id_dist = '$id_dist'");

		if ($sql) {
			header("location:dist.php");
		}else{
			header("location:wrong.php");
		}
	}

 ?>

 <div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Ubah Supplier</b>
		</div>

<div class="panel-body">
 <form action="" method="POST">
 	
 	<div class="form-group">
			<label class="control-label col-sm-2" for="nm_dist">Nama Supplier</label>
		 <div class="col-sm-4" >
			<input type="text" name="nm_dist" class="form-control" value="<?php echo $data['nm_dist'] ?>" required>
	</div>
	</div><br><br>

	<div class="form-group">
			<label class="control-label col-sm-2" for="telp_dist">Telp. Supplier</label>
		 <div class="col-sm-4" >
			<input type="text" name="telp_dist" class="form-control" value="<?php echo $data['telp_dist'] ?>" required>
	</div>
	</div><br><br>

<div class="form-group">
			<label class="control-label col-sm-2" for="almt_dist">Alamat Supplier</label>
		 <div class="col-sm-4" >
			<input type="text" name="almt_dist" class="form-control" value="<?php echo $data['almt_dist'] ?>" required>
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