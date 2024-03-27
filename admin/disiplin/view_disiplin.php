<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from v_riwayat_hukuman_disiplin a
		INNER JOIN daftar_pegawai b ON a.nik=b.nik WHERE id_hukuman='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<!-- <div style="margin-left: 12; margin-bottom: 16px;">

<div class="dropdown">
	<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
		aria-haspopup="true" aria-expanded="false">
		Riwayat Pegawai
	</button>
	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a href="?page=data-golongan&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item"> <span class="menu-collapsed">Riwayat Golongan</span>
		</a>
		<a href="?page=data-jabatan&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Jabatan</a>
		<a href="?page=data-diklat&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Diklat</a>
		<a href="?page=data-tugas&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Tugas Tambahan</a>
		<a href="?page=data-pendidikan&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Pendidikan</a>
		<a href="?page=data-disiplin&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Hukuman Disiplin</a>
		<a href="?page=data-mutasi&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Mutasi CPNS ke PNS</a>
		<a href="?page=data-gaji&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Kenaikan Gaji Berkala</a>
		<a href="?page=data-penilaian&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Penilaian Kinerja</a>
		<a href="?page=data-penghargaan&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Penghargaan</a>
		<a href="?page=data-pangkat&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Pangkat</a>
		<a href="?page=data-kursus&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			class="dropdown-item">
			<span class="menu-collapsed">Riwayat Kursus</a>
	</div>
	<button class="btn btn-warning" style="color: black;">
		<a href="?page=data-keluarga&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>"
			style="color: white;">
			<i class="fa-duotone fa-backward-step" style="color: black;"></i>Riwayat Keluarga
		</a>
	</button>
</div>
<br> -->
<div class="row">
	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Hukuman Disiplin</h3>
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
								<b>Nama Pegawai</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						</tr>
							<td style="width: 150px">
								<b>Tingkat Hukuman Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['tingkat_hukuman']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Hukuman Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_hukuman']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>No SK</b>
							</td>
							<td>:
								<?php echo $data_cek['nomor_sk']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal SK</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_sk_hukuman']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>TMT Awal Hukuman</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_awal_hukuman_disiplin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Lama Hukuman (tahun)</b>
							</td>
							<td>:
								<?php echo $data_cek['lama_hukuman_tahun']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Lama Hukuman (bulan)</b>
							</td>
							<td>:
								<?php echo $data_cek['lama_hukuman_bulan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>TMT Akhir Hukuman</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_akhir_hukuman_disiplin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Dasar Hukum Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['dasar_hukum_disiplin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alasan Hukum Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['alasan_hukum_disiplin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Deskripsi Hukum Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['deskripsi_hukuman_disiplin']; ?>
							</td>
						</tr>
						<tr>
							
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-disiplin&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-disiplin&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>&kode=<?php echo $_GET['kode'];?>" target="blank"class="btn btn-primary">Print</a> 
					</div>		
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						File SK
					</h3>
				</center>
				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					
					<img src="hd/<?php echo $data_cek['hd']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>
</div>