<?php
	$nik = $_GET['nik'];
	$kode = $_GET['kode'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA GOLONGAN</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_golongan where id_golongan='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

		<h4>
			<b>DATA RIWAYAT GOLONGAN</b>
		</h4>

		<table id="example" class="table table-striped table-bordered" style="width:100%">
		<tbody>
		<tbody> 
		<div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
			  <tr>
				<td width="50%;">NIK</td>
				<td>:</td>
				<td>
					<?php echo $nik; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Golongan</td>
				<td>:</td>
				<td>
					<?php echo $data['golongan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Jenis KP</td>
				<td>:</td>
				<td>
					<?php echo $data['jenis_kp']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tamat KP</td>
				<td>:</td>
				<td>
					<?php echo $data['tmt_kp']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor SK</td>
				<td>:</td>
				<td>
					<?php echo $data['nomor_sk']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal SK</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_sk']; ?>
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

