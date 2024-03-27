<div class="card card-info">
	<div class="card-header"style="background-color : #455A64;">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Notifikasi</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
			<br>
			<?php
			// Kenaikan Pangkat 6 Bulan sebelum 4 tahun dari TMT_KP 
			  $usersql = $_SESSION["ses_level"] == 'Administrator' ? '' : "AND a.nik=".$_SESSION['ses_nik'];
			  //perlu di perhatikan
			  $sql = $koneksi->query("SELECT *,TIMESTAMPDIFF(MONTH,TIMESTAMPADD(YEAR,4,tmt_jabatan),CURDATE()) as hmin from riwayat_pangkat a 
			  INNER JOIN daftar_pegawai b ON a.nik=b.nik 
			  WHERE TIMESTAMPDIFF(MONTH,CURDATE(),tmt_jabatan) <= 6 $usersql");
              while ($data= $sql->fetch_assoc()) {
            ?>
				<div class="container">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title"><b>Kenaikan pangkat (<?php echo $data['nama_lengkap'] ?>)</b></h5>
						<p class="card-text"><?php echo $data['hmin'] ?> bulan lagi anda akan ada kenaikan pangkat, lakukan pengajuan kenaikan pangkat segera.</p>
						<!-- <a href="#" class="btn btn-primary">View Details</a> -->
						</div>
					</div>
				</div>
					<?php
              }
            ?>
			<?php
			// Kenaikan Gaji berkala 4 Bulan sebelum 2 tahun dari TMT_ KGB 
			  $sql = $koneksi->query("SELECT *,TIMESTAMPDIFF(MONTH,TIMESTAMPADD(YEAR,2,tmt_kgb),CURDATE()) as hmin from 
			  riwayat_kenaikan_gaji_berkala a 
							INNER JOIN daftar_pegawai b ON a.nik=b.nik 
							WHERE TIMESTAMPDIFF(MONTH,TIMESTAMPADD(YEAR,2,tmt_kgb),CURDATE()) <= 4 $usersql");
              while ($data= $sql->fetch_assoc()) {
            ?>
				<div class="container">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title"><b>Kenaikan gaji berkala (<?php echo $data['nama_lengkap'] ?>)</b></h5>
						<p class="card-text"><?php echo $data['hmin'] ?> bulan lagi anda akan ada kenaikan gaji berkala, lakukan pengajuan kenaikan gaji berkala segera.</p>
						<!-- <a href="#" class="btn btn-primary">View Details</a> -->
						</div>
					</div>
				</div>
					<?php
              }
            ?>
			<?php
			//Pensiun 8 Bulan Kurang 58 Tahun dari Tanggal Lahir 
			  $sql = $koneksi->query("SELECT TIMESTAMPDIFF(MONTH,tanggal_lahir,CURDATE())-8 as usia,696 - (TIMESTAMPDIFF(MONTH,tanggal_lahir,CURDATE())) as hmin, a.nama_lengkap from daftar_pegawai a
			  WHERE 696 - (TIMESTAMPDIFF(MONTH,tanggal_lahir,CURDATE())) >= 0 AND 696 - (TIMESTAMPDIFF(MONTH,tanggal_lahir,CURDATE())) <= 8 $usersql");
              while ($data= $sql->fetch_assoc()) {
            ?>
				<div class="container">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title"><b>Masa Pensiun (<?php echo $data['nama_lengkap'] ?>)</b></h5>
						<p class="card-text"><?php echo $data['hmin'] ?> bulan lagi sudah masa pensiun anda, terima kasih telah bekerja dengan baik.</p>
						<!-- <a href="#" class="btn btn-primary">View Details</a> -->
						</div>
					</div>
				</div>
					<?php
              }
            ?>
	</div>
			</div>