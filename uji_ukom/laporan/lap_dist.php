<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}

	$sql = mysql_query("SELECT * FROM distributor");
 ?><br>
 
<div class="container">

 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Laporan Distributor</b>	
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
		<a href="../cetak/excel_dist.php" class="print btn-sm btn btn-danger">Ekspor Excel</a>
			<br>
	
 <table class="table table-bordered ">
 	<thead>
 		<tr>
 			<th style="text-align: center;">No.</th>
 			<th style="text-align: center;">Nama Distributor</th>
 			<th style="text-align: center;">No.Telp</th>
 			<th style="text-align: center;">Alamat</th>
 	</tr>
 	</thead> 

 		<tbody>
				<?php
		$no = 1;
		while($data = mysql_fetch_array($sql)) { ?>
		
		<tr>
			<td style="text-align: center;"><?php echo $no++;?>.</td>
			<td style="text-align: center;"><?php echo $data['nm_dist']?></td>
			<td style="text-align: center;"><?php echo $data['telp_dist']?></td>
			<td style="text-align: center;"><?php echo $data['almt_dist']?></td>
		<?php } ?>
 			</table>
</div>
</div>
</div>



 <?php 
	include '../footer.php';


 ?>