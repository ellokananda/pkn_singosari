<?php
	$nik = $_GET['nik'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA DIKLAT</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_diklat where nik='$nik'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

		<h4>
			<b>DATA RIWAYAT DIKLAT</b>
		</h4>

	
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<tbody>
		<div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
			<tr>
				<td width="50%;">NIK</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $nik; ?>
				</td>
				<td rowspan="6" align="center">
					<img src="diklat/<?php echo $data['diklat']; ?>" width="300px" />
				</td>
			</tr>
			<tr>
				<td width="50%;">Nama</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Jenis Diklat</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['jenis_diklat']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nama Diklat</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['nama_diklat']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Jumlah Jam</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['jumlah_jam']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal Pelaksanaan</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tanggal_pelaksanaan_diklat']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor sertifikat</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['nomor_sertifikat']; ?>
				</td>
			</tr>
			
			<tr>
				<td width="50%;"> Instansi Penyelenggara</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['instansi_penyelenggara']; ?>
				</td>
			</tr> 
			
			<?php } ?>
		</tbody>
	</table>
	</div>
	</div>

	<script>
		window.print();
	</script>

</body>

</html>