<?php
    if(isset($_SESSION["ses_nik"])){	
        $sql_cek = "SELECT * from daftar_pegawai WHERE nik ='".$_SESSION["ses_nik"]."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Pegawai</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
				<tbody>
						<tr>
							<td style="width: 150px">
								<b>NIK</b>
							</td>
							<td>:
								<?php echo $data_cek['nik']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_lengkap']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nip</b>
							</td>
							<td>:
								<?php echo $data_cek['nip']; ?>
							</td>
						</tr>

						<tr>
							<td style="width: 150px">
								<b>Tempat Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['tempat_lahir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_lahir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin</b>
							</td>
							<td>
								<?php echo $data_cek['jenis_kelamin']; ?>
							</td>
						</tr>
						
						
						<tr>
							<td style="width: 150px">
								<b>Agama</b>
							</td>
							<td>:
								<?php echo $data_cek['agama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nomor Telepon</b>
							</td>
							<td>:
								<?php echo $data_cek['nomor_telepon']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status Pernikahan</b>
							</td>
							<td>:
								<?php echo $data_cek['status_pernikahan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kedudukan Hukum</b>
							</td>
							<td>:
								<?php echo $data_cek['kedudukan_hukum']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Pegawai</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_pegawai']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
				<?php if($_SESSION["ses_level"] == 'Administrator') { ?>
					<a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>
					<?php } ?>
					<a href="?page=cetak-pegawai&nik=<?php echo $data_cek['nik']; ?>" target="blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a> 
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto Pegawai
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama_lengkap']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>