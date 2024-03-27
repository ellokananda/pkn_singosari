<?php
	$nik = $_GET['nik'];
	$kode = $_GET['kode'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA GAJI</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_kenaikan_gaji_berkala where id_gaji='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

		<h4>
			<b>DATA RIWAYAT GAJI BERKALA</b>
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
					<img src="sp/<?php echo $data['sp']; ?>" width="300px" />
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
				<td width="50%;">TMT KGB</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tmt_kgb']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor Sk </td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['nomor_sk']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal Sk Kgb</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tanggal_sk_kgb']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Golongan Ruang</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['golongan_ruang']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Jenis Kenaikan</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['jenis_kenaikan']; ?>
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
			<tr>
				<td width="50%;">Gaji</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['gaji']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Spesimen Pejabat</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['spesimen_pejabat']; ?>
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