<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}


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
			header("Location:tampil_pinjam.php");
		}else{
			echo "gagal";
		}
	}

	if (isset($_POST['cari_tgl'])) {
		$awal = $_POST['awal'];
		$akhir = $_POST['akhir'];

		$query = mysql_query("SELECT * FROM peminjaman p 
											inner join barang b on b.id_barang = p.id_barang
											inner join jenis je on je.id_jenis = b.id_jenis
											inner join distributor di on di.id_dist = b.id_dist
											inner join pengguna pe on p.id_pengguna = pe.id_pengguna 
											WHERE p.tgl_pinjam BETWEEN '$awal' AND '$akhir' 
											ORDER BY p.status ASC");;
	}else{
		
	$query = mysql_query("SELECT * FROM peminjaman p 
										inner join barang b on b.id_barang = p.id_barang
										inner join jenis je on je.id_jenis = b.id_jenis
										inner join distributor di on di.id_dist = b.id_dist
										inner join pengguna pe on p.id_pengguna = pe.id_pengguna 
										ORDER BY p.status ASC");
	}

 ?><br>

 	<form action="" method="post" class="form-inline float-left">
		<div class="form-group">
			<label> Dari Tanggal</label>
				<input type="date" name="awal" class="form-control" >
		</div>
		
		<div class="form-group">
			<label>Sampai Tanggal</label>
				<input type="date" name="akhir" class="form-control" >
		</div>
			 <button type="submit" name="cari_tgl" class="btn btn-info">Submit</button>
	</form><br><br>
 
<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Peminjaman</b>
		</div>

		<div class="panel-body">
			 <?php if($_SESSION['jabatan'] == 'Manajemen'){ ?>
			<div class="col-md-4">
				<button type="submit" class="print btn btn-danger btn-sm" onclick="window.print();">Export PDF</button>
				<a href="javascript:void(0)" data-toggle="modal" data-target="#modal-excel" class="print btn btn-danger btn-sm">Export Excel</a>

		<style>
				@media print{
					.print {
						display: none;
					}
				}

		</style>

			<br><br> 
		<?php } ?>
			</div>
			
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 			<th class="text-center">No</th>
			<th class="text-center">Nama Peminjam</th>
			<th class="text-center">Nama Barang</th>
			<th class="text-center">Tanggal Pinjam</th>
			<th class="text-center">Tanggal Kembali</th>
			 <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
			<th class="text-center">Status</th>
			<th class="text-center">Aksi</th>
		<?php } ?>
 	</tr>
 	</thead> 

 		<tbody>
	 <?php 
		$no = 1;
		while ($data = mysql_fetch_array($query)) { 
			?>		
			
			<tr>
				<td class="text-center"><?php echo $no++ ?>.</td>
				<td class="text-center"><a data-toggle="modal" data-target="#<?php echo $data['id_pinjam'] ?>" ><?php echo $data['nm_lengkap']; ?></a></td>
				<td class="text-center"><a data-toggle="modal" data-target="#<?php echo $data['id_barang'] ?>" ><?php echo $data['spek_barang']; ?></a></td>
				<td class="text-center"><?php echo ($data['tgl_pinjam']) ?></td>
				<td class="text-center"><?php echo ($data['tgl_kembali']) ?></td>

				 <?php if($_SESSION['jabatan'] == 'Admin'){ ?>
				 	
				<?php if ($data['status'] == "0") {
					$stat2 = "Diambil";
				}elseif($data['status'] == "1" ){
					$stat2 = "Dipinjam";
				}else{
					$stat2 = "Dikembalikan"; 
				} ?>

				<td class="text-center"><?php echo $stat2; ?></td>
				
				<?php if ($data['status'] == "0") {
					$stat = "<a style='width: 100%;' class='btn btn-primary' href='?id_barang=".$data['id_barang']."&status=0&id_pinjam=".$data['id_pinjam']."'>Diambil</a>";
				}elseif( $data['status'] == "1" ){
					$stat = "<a style='width: 100%;' class='btn btn-info' href='?id_barang=".$data['id_barang']."&status=1&id_pinjam=".$data['id_pinjam']."'>Kembali</a>";
				}else{
					$stat = "<a style='width: 100%;' class='btn btn-default disabled'>Selesai</a>"; 
				} ?>
				<td class="text-center"><?php echo $stat; ?></td>
			<?php } ?>




	<!-- modal biodata pengguna -->

  <div class="modal fade bs-example-modal-md" tabindex="-1" id="<?php echo $data['id_pinjam'] ?>" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" eks-dismiss="modal">&times;</button>
          <h4 class="modal-title">Biodata Pengguna</h4>
        </div>

        <div class="modal-body">
	        <p>Nama Lengkap	    : <?php echo $data['nm_lengkap'] ?></p>
	        <p>Jenis Kelamin	: <?php echo $data['kelamin'] ?></p>
	        <p>Alamat			: <?php echo $data['alamat'] ?></p>
	      	<p>No.Telp			: <?php echo $data['no_telp'] ?></p>	
        </div>
      </div>
    </div>
  </div>
   <!-- akhir modal biodata -->


   <!-- Modal barang -->
  <div class="modal fade bs-example-modal-sm" tabindex="-1" id="<?php echo $data['id_barang'] ?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" eks-dismiss="modal">&times;</button>
          <h4 class="modal-title">Barang Yang dipinjam</h4>
        </div>

        <div class="modal-body">
        	<p>Gambar 		: <img style="width: 60px;" src="../assets/img2/<?php echo $data['gambar'] ?>"></p>
        	<p>Nama Jenis 	: <?php echo $data['nm_jenis'] ?></p>
	        <p>Nama Barang 	: <?php echo $data['spek_barang'] ?></p>
	       	<p>Sumber Dana  : <?php echo $data['sumber_dana'] ?></p>
	      	<p>Tanggal Beli : <?php echo $data['tgl_beli'] ?></p>
	      	<p>Kondisi 		: <?php echo $data['kondisi'] ?></p>
	      	<p>Harga Beli 	: <?php echo $data['harga'] ?></p>
	      	<p>Distributor  : <?php echo $data['nm_dist'] ?></p>
	      	
        </div>
      </div>
    </div>
  </div>
  <!-- akhir modal barang -->

			</tr>	
<?php } ?>
</tbody>
		</table>
	</div>
</div>


<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});

</script>



		
</div>



 <?php 
	include '../footer.php';


 ?>