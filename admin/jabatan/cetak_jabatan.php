<?php
	$nik = $_GET['nik'];
	$kode = $_GET['kode'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA JABATAN</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_jabatan where id_jabatan='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

	<h4>
			<b>DATA RIWAYAT JABATAN</b>
		</h4>

		<table id="example" class="table table-striped table-bordered" style="width:100%">
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
				<td rowspan="6" align="center">
					<img src="sk/<?php echo $data['sk']; ?>" width="300px" />
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
				<td width="50%;">Instansi Induk</td>
				<td>:</td>
				<td>
					<?php echo $data['instansi_induk']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Instansi Kerja</td>
				<td>:</td>
				<td>
					<?php echo $data['instansi_kerja']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Unit Organisasi</td>
				<td>:</td>
				<td>
					<?php echo $data['unit_organisasi']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Jenis Jabatan</td>
				<td>:</td>
				<td>
					<?php echo $data['jenis_jabatan']; ?>
				</td>
			</tr>
			
			<tr>
				<td width="50%;">Nama Jabatan</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_jabatan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">TMT Jabatan</td>
				<td>:</td>
				<td>
					<?php echo $data['tmt_jabatan']; ?>
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

</body>

</html>