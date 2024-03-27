<?php
	$nik = $_GET['nik'];
	$kode = $_GET['kode'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA PENDIDIKAN</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_pendidikan where id_pendidikan='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>
		<h4>
			<b>DATA RIWAYAT PENDIDIKAN</b>
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
					<img src="ijazah/<?php echo $data['ijazah']; ?>" width="300px" />
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
				<td width="50%;">Tingkat Pendidikan</td>
				<td>:</td>
				<td>
					<?php echo $data['tingkat_pendidikan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Program Studi</td>
				<td>:</td>
				<td>
					<?php echo $data['program_studi']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor Ijazah</td>
				<td>:</td>
				<td>
					<?php echo $data['nomor_ijazah']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal Ijazah</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_ijazah']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nama Lembaga Pendidikan</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_lembaga_pendidikan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Gelar</td>
				<td>:</td>
				<td>
					<?php echo $data['gelar']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Ijazah Pengangkatan Cpns</td>
				<td>:</td>
				<td>
					<?php echo $data['ijazah_pengangkatan_cpns']; ?>
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