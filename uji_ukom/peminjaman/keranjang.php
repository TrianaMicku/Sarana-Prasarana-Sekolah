<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$id_pengguna = $_SESSION['id_pengguna'];
	$sql = mysql_query("SELECT * FROM peminjaman INNER JOIN barang ON barang.id_barang = peminjaman.id_barang WHERE id_pengguna = '$id_pengguna' AND status != '2' ORDER BY status DESC ");

	if (isset($_GET['id_pinjam'])) {
		$id_pinjam = $_GET['id_pinjam'];
		$del = mysql_query("DELETE FROM peminjaman WHERE id_pinjam = '$id_pinjam'");
			header("location:keranjang.php");
	}
 ?><br>
 
<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Keranjang <?php echo $_SESSION['nm_pengguna'] ?></b>
		</div>

		<div class="panel-body">
			<?php if($_SESSION['jabatan'] == 'Admin'){ ?>
    		<a href="tambah_peng.php" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
		<?php } ?><br><br>
	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 		<th>No.</th>
 					<th>Nama peminjam</th>
 					<th>Nama Barang</th>
 					<th>Kondisi</th>
 					<th>Keterangan</th>
 					<th>Aksi</th>
 	</tr>
 	</thead> 

 		<tbody>
 	<?php 
				$no = 1;
				while($data = mysql_fetch_array($sql)) { ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $_SESSION['nm_pengguna']; ?></td>
						<td><?php echo $data['spek_barang']; ?></td>
						<td><?php echo $data['kondisi']; ?></td>
						<?php 
							if ($data['status'] == '0') {
								$stat2 = "dibooking";
							}else{
								$stat2 = "dipinjam";
							} ?>
						<td><?php echo $stat2; ?></td>

						<?php 
							if ($data['status'] == '0') {
								$stat = "<a href='?id_pinjam=".$data['id_pinjam']."&id=".$id_pengguna."'>Batal Pinjam</a>";
							}else{
								$stat = "Anda Sedang Meminjam";
							} ?>
						<td><?php echo $stat; ?></td>
				</tr>

			<?php $no++;} ?>
 			</table>
</div>
</div>
</div>



 <?php 
	include '../footer.php';


 ?>