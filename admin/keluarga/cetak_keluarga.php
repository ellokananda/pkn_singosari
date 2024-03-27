<?php
	$nik = $_GET['nik'];
	$kode = $_GET['kode'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA KELUARGA</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_keluarga where id_keluarga='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

	<h4>
			<b>CETAK DATA KELUARGA</b>
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
			</tr>
			<tr>
				<td width="50%;">Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nama Keluarga</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_keluarga']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Hubungan Keluarga</td>
				<td>:</td>
				<td>
					<?php echo $data['hubungan_keluarga']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tempat Lahir Keluarga</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lahir_keluarga']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal Lahir Keluarga</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_lahir_keluarga']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Jenis Kelamin Keluarga</td>
				<td>:</td>
				<td>
					<?php echo $data['jenis_kelamin_keluarga']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Agama Keluarga</td>
				<td>:</td>
				<td>
					<?php echo $data['agama_keluarga']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nik Keluarga</td>
				<td>:</td>
				<td>
					<?php echo $data['nik_keluarga']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Alamat Keluarga</td>
				<td>:</td>
				<td>
					<?php echo $data['alamat_keluarga']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Status Pernikahan</td>
				<td>:</td>
				<td>
					<?php echo $data['status_pernikahan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Status Pekerjaan</td>
				<td>:</td>
				<td>
					<?php echo $data['status_pekerjaan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Wajib Pajak</td>
				<td>:</td>
				<td>
					<?php echo $data['wajib_pajak']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Status Hidup</td>
				<td>:</td>
				<td>
					<?php echo $data['status_hidup']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tunjangan Gaji</td>
				<td>:</td>
				<td>
					<?php echo $data['tunjangan_gaji']; ?>
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