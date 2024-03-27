<?php
	$nik = $_GET['nik'];
	$kode = $_GET['kode'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA PENILAIAN</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_penilaian_kinerja where id_penilaian='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

	
		<h4>
		<b>DATA KINERJA PENILAIAN</b>
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
					<img src="nilai/<?php echo $data['nilai']; ?>" width="300px" />
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
				<td width="50%;">Tahun Penilaian</td>
				<td>:</td>
				<td>
					<?php echo $data['tahun_laporan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nilai Kinerja</td>
				<td>:</td>
				<td>
					<?php echo $data['nilai_kinerja']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nilai Perilaku</td>
				<td>:</td>
				<td>
					<?php echo $data['nilai_perilaku']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Predikat Nilai</td>
				<td>:</td>
				<td>
					<?php echo $data['predikat_nilai']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">NIP Pejabat Penilai</td>
				<td>:</td>
				<td>
					<?php echo $data['nip_pejabat_penilai']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nama Pejabat Penilai</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_pejabat_penilai']; ?>
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