<?php
	$nik = $_GET['nik'];
	$kode = $_GET['kode'];

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA MUTASI</title>
</head>

<body>
	<center>

		<h2>
			<?php

			$sql_tampil = "select * from riwayat_mutasi_cpns_ke_pns where id_mutasi='$kode'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		</h2>

	</center>

		<h4>
			<b>DATA RIWAYAT MUTASI</b>
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
					<img src="mutasi/<?php echo $data['mutasi']; ?>" width="300px" />
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
				<td width="50%;">TMT CPNS</td>
				<td>:</td>
				<td>
					<?php echo $data['tmt_cpns']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor SK CPNS</td>
				<td>:</td>
				<td>
					<?php echo $data['nomor_sk_cpns']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal SK CPNS</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_sk_cpns']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor BKN Pengangkatan</td>
				<td>:</td>
				<td>
					<?php echo $data['nomor_bkn_pengangkatan_cpns']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">TMT PNS</td>
				<td>:</td>
				<td>
					<?php echo $data['tmt_pns']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor SK PNS</td>
				<td>:</td>
				<td>
					<?php echo $data['nomor_sk_pns']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal SK PNS</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_sk_pns']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">No STTLP</td>
				<td>:</td>
				<td>
					<?php echo $data['nomor_sttpl_diklat_pra_jabatan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal STTLP</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_sttpl_diklat_pra_jabatan']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Nomor Surat Keterangan Sehat</td>
				<td>:</td>
				<td>
					<?php echo $data['nomor_surat_keterangan_sehat']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Tanggal Surat Keterangan Sehat</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_surat_keterangan_sehat']; ?>
				</td>
			</tr>
			<tr>
				<td width="50%;">Jenis Pengadaan Pegawai</td>
				<td>:</td>
				<td>
					<?php echo $data['jenis_pengadaan_pegawai']; ?>
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