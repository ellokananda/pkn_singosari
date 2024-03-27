<?php
	$nik = $_GET['nik'];
	$kode = $_GET['kode'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA HUKUMAN DISIPLIN</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_hukuman_disiplin where id_hukuman='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

		<h4>
			<b>DATA DISIPLIN</b>
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
					<img src="hd/<?php echo $data['hd']; ?>" width="300px" />
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
				<td width="50%;">Id Jenis Hukuman</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['id_jenis_hukuman']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor SK</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['nomor_sk']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal SK Hukuman</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tanggal_sk_hukuman']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">TMT Awal Hukuman</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tmt_awal_hukuman_disiplin']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Lama Hukuman Tahun</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['lama_hukuman_tahun']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Lama Hukuman Bulan</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['lama_hukuman_bulan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">TMT Akhir Hukuman</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['tmt_akhir_hukuman_disiplin']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Dasar Hukuman</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['dasar_hukum_disiplin']; ?>
				</td>
			</tr>
			<tr>
				<td width="20%;">Alasan Hukuman</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['alasan_hukum_disiplin']; ?>
				</td>
			</tr>
			<tr>
				<td width="20%;">Deskripsi Hukuman</td>
				<td width="1px;">:</td>
				<td>
					<?php echo $data['deskripsi_hukuman_disiplin']; ?>
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