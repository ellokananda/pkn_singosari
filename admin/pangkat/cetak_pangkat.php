<?php
	$nik = $_GET['nik'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA PANGKAT</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_pangkat where nik='$nik'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

		<h4>
			<b>DATA RIWAYAT PANGKAT</b>
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
					<img src="pgkt/<?php echo $data['pgkt']; ?>" width="300px" />
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
				<td width="50%;">No SK</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['no_sk']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">TMT Pangkat</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tmt_jabatan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nama Pangkat</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['jenis_kenaikan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Golongan</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['golongan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Masa Kerja Tahun</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['masa_kerja_tahun']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Masa Kerja Bulan</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['masa_kerja_bulan']; ?>
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