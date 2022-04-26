<?php 
	include '../koneksi.php';

	$sql = mysql_query("SELECT * FROM jenis");

	$date = date('y-m-d');
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=report_jenis.xls");
 ?><br>
 
<div class="container">

 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Laporan Jenis</b>	
	</div>

		<div class="panel-body">
	
 <table class="table table-bordered " border="1">
 		<tr>
 			<th style="text-align: center;">No.</th>
 			<th style="text-align: center;">Nama Jenis</th>
 			<th style="text-align: center;">Jumlah</th>
 	</tr>

 	
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
		</tr>
		<?php } ?>

 			</table>
</div>
</div>
</div>
