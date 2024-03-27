<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from riwayat_satya_lencana a
		INNER JOIN daftar_pegawai b ON a.nik=b.nik WHERE id_satya_lencana='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Satya Lencana</h3>

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
						<tr>
							<td style="width: 150px">
								<b>No. SK</b>
							</td>
							<td>:
								<?php echo $data_cek['no_sk']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal SK</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_sk']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>TMT</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_sk']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tahun</b>
							</td>
							<td>:
								<?php echo $data_cek['tahun']; ?>
							</td>
						</tr>
						<tr>

                        <tr>
							<td style="width: 150px">
								<b>Satya Lencana</b>
							</td>
							<td>:
								<?php echo $data_cek['satya_lencana']; ?>
							</td>
						</tr>					
					</tbody>
				</table>
				<div class="card-footer">

					<a href="?page=data-satya&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-satya&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>" target="blank"class="btn btn-primary">Print</a> 
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
					
					<img src="satlen/<?php echo $data_cek['satlen']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>
			</div>