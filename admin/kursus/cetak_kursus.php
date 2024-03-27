<?php
	$nik = $_GET['nik'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA KURSUS</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_kursus where nik='$nik'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

		<h4>
			<b>DATA RIWAYAT KURSUS</b>
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
					<img src="course/<?php echo $data['course']; ?>" width="300px" />
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
				<td width="50%;">Jenis Kursus</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['jenis_kursus']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nama Kursus</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['nama_kursus']; ?>
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
				<td width="50%;">Tanggal Mulai</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tgl_kursus']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal Selesai</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tgl_selesai_kursus']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor sertifikat</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['no_sertif']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Instansi Penanggung Jawab</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['instansi']; ?>
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