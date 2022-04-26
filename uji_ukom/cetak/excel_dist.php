<?php 

	include '../koneksi.php';
	

	$sql = mysql_query("SELECT * FROM distributor");

	$date = date('y-m-d');
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=report_dist.xls");
 ?><br>
 
<div class="container">

 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Laporan Distributor</b>	
	</div>

		<div class="panel-body">
		
 <table class="table table-bordered " border="1">
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