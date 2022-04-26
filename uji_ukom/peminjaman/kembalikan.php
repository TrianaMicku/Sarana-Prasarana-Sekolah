<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$sql_kembalikan = mysql_query("SELECT * FROM peminjaman INNER JOIN pengguna on peminjaman.id_pengguna = pengguna.id_pengguna INNER JOIN barang on peminjaman.id_barang = barang.id_barang WHERE peminjaman.status=2");

	if (isset($_GET['id_barang']) && isset($_GET['status']) ) {
		$id_barang = $_GET['id_barang'];
		$id_pinjam = $_GET['id_pinjam'];
		$status = $_GET['status'] + 1;

		if ($status == "2") {
			$tgl = date('Y-m-d');
			$sql = mysql_query("UPDATE peminjaman SET status = '$status', tgl_kembali = '$tgl' WHERE id_pinjam = '$id_pinjam'");			
		}else{
			$sql = mysql_query("UPDATE peminjaman SET status = '$status'  WHERE id_pinjam = '$id_pinjam'");
		}

		if ($sql) {
			header("Location:kembalikan.php");
		}else{
			echo "gagal";
		}
	}
 ?><br>
 
<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
		<b style="font-size: 12px;">Daftar Peminjaman Dikembalikan
		</b>		
	</div>

		<div class="panel-body">
				 <?php if($_SESSION['jabatan'] == 'Manajemen'){ ?>
		<style>
				@media print{
					.print {
						display: none;
					}
				}

		</style>

		<button type="submit" class="print btn btn-danger glyphicon glyphicon-print" onclick="window.print();"></button>

			<br><br> 
		<?php } ?>
	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 			<th style="text-align: center;">No</th>
			<th style="text-align: center;">Nama Peminjam</th>
			<th style="text-align: center;">Nama Barang</th>
			<th style="text-align: center;">Tanggal Pinjam</th>
			<th style="text-align: center;">Tanggal Kembali</th>
			<th style="text-align: center;">Status</th>
 	</tr>
 	</thead> 

 		<tbody>
 	<?php 
		$no = 1;
		while ($data = mysql_fetch_array($sql_kembalikan)) { ?>
			
			<tr>
				<td style="text-align: center;"><?php echo $no++ ?></td>
				<td style="text-align: center;"><?php echo $data['nm_pengguna']; ?></td>
				<td style="text-align: center;"><?php echo ($data['spek_barang']) ?></td>
				<td style="text-align: center;"><?php echo ($data['tgl_pinjam']) ?></td>
				<td style="text-align: center;"><?php echo $data['tgl_kembali'] ?></td>
				<?php if ($data['status'] == "0") {
					$stat = "Barang diambil</a>";
				}elseif( $data['status'] == "1" ){
					$stat = "Barang dipinjam</a>";
				}else{
					$stat = "Barang sudah kembali</a>"; 
				} ?>
				<td style="text-align: center;"><?php echo $stat; ?></td>
				
			</tr>	
<?php } ?>

 			</table>
</div>
</div>
</div>



 <?php 
	include '../footer.php';


 ?>