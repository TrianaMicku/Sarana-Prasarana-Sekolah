<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$sql = mysql_query("SELECT * FROM jenis");
 ?><br>
 
<div class="container">

 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Laporan Jenis</b>	
	</div>

		<div class="panel-body">
			<style>
				@media print{
					.print {
						display: none;
					}
				}

		</style>

		<button type="submit" class="print btn btn-danger btn-sm" onclick="window.print();">Ekspor PDF</button>
		<a href="../cetak/excel_jenis.php" class="print btn-sm btn btn-danger">Ekspor Excel</a>

			<br><br>

	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr>
 			<th style="text-align: center;">No.</th>
 			<th style="text-align: center;">Nama Jenis</th>
 			<th style="text-align: center;">Jumlah</th>
 			<th style="text-align: center;" class="print">Aksi</th>
 	</tr>
 	</thead> 

 		<tbody>
				<?php
		$no = 1;
		while($data = mysql_fetch_array($sql)) { ?>
		
		<tr>
			<td style="text-align: center;"><?php echo $no++;?>.</td>
			<td style="text-align: center;"><?=$data['nm_jenis']?></td>

			<?php 
					$id_jenis = $data['id_jenis'];
					$sql_jumlah = "SELECT COUNT(spek_barang) as jumlah_barang FROM barang WHERE id_jenis = $id_jenis";
					$eksekusi_jumlah = mysql_query($sql_jumlah);
					$data_jumlah = mysql_fetch_array($eksekusi_jumlah);
			?>

			<td style="text-align: center;"><?php echo $data_jumlah['jumlah_barang'] ?></td>
			<td style="text-align: center;" class="print">
				<a href="lap_barang.php?id_jenis=<?=$data['id_jenis']?>" class="btn btn-danger glyphicon glyphicon-list-alt"></a>
			</td>
		</tr>
		<?php } ?>

		<?php 

			$sql_total ="SELECT COUNT(spek_barang) as total FROM barang";
			$eksekusi_total = mysql_query($sql_total);
			$data_total = mysql_fetch_array($eksekusi_total);
		 ?>

		 <tr>
		 	<td colspan="2" style="font-weight: bold;">Total :</td>
		 	<td style="text-align: center;"><?php echo $data_total['total'] ?></td>
		 	<td style="text-align: center;" class="print"></td>
		 </tr>

 			</table>
</div>
</div>
</div>



 <?php 
	include '../footer.php';


 ?>