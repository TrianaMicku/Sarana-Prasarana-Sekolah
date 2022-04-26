<?php 
	include '../koneksi.php';
	include '../index.php';

	if (isset($_POST['simpan'])) {
		$nm_jenis = $_POST['nm_jenis'];

		$sql = mysql_query("INSERT INTO jenis VALUES ('', '$nm_jenis')");

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
			<b style="font-size: 12px;">Tambah Jenis</b>
		</div>
		
<div class="panel-body">
 <form action="" method="POST">
 	
 	<div class="form-group">
			<label class="control-label col-sm-2" for="nm_jenis">Nama Jenis</label>
		 <div class="col-sm-4" >
			<input type="text" name="nm_jenis" class="form-control" required>
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
</div>

 <?php 
 	include '../footer.php';

  ?>