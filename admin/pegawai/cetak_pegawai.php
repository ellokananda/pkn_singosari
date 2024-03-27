<?php
	$nik = $_GET['nik'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA PEGAWAI</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from daftar_pegawai where nik='$nik'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
			<!-- <?php echo $data['nama_lengkap']; ?> -->
		</h2>

	</center>

		<h4>
			<b>DATA RIWAYAT PEGAWAI</b>
		</h4>

	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<tbody>
		<div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
			<tr>
				<td width="30%;">NIP</td>
				<td>:</td>
				<td>
					<?php echo $data['nip']; ?>
				</td>
				
				<td rowspan="6" align="center">
					<img src="foto/<?php echo $data['foto']; ?>" width="300px" />
				</td>
			</tr>
			<tr>
				<td width="30%;">NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_lengkap']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Tempat Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lahir']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_lahir']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $data['jenis_kelamin']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Agama</td>
				<td>:</td>
				<td>
					<?php echo $data['agama']; ?>
				</td>
			</tr>
			
			<tr>
				<td width="30%;">Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['alamat']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Nomor Telepon</td>
				<td>:</td>
				<td>
					<?php echo $data['nomor_telepon']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Status Pernikahan</td>
				<td>:</td>
				<td>
					<?php echo $data['status_pernikahan']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Kedudukan Hukum</td>
				<td>:</td>
				<td>
					<?php echo $data['kedudukan_hukum']; ?>
				</td>
			</tr>
			<tr>
				<td width="30%;">Jenis Pegawai</td>
				<td>:</td>
				<td>
					<?php echo $data['jenis_pegawai']; ?>
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