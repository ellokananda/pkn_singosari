<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $_GET['nik']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $_GET['nama']; ?>"
					 readonly/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">No SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_sk" name="no_sk" placeholder="No SK" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_sk" name="tgl_sk" placeholder="Tanggal SK" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT Jabatan</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_jabatan" name="tmt_jabatan" placeholder="TMT Jabatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No BKN</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_bkn" name="no_bkn" placeholder="Nomor BKN" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal BKN</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_bkn" name="tgl_bkn" placeholder="Tanggal BKN" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kenaikan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jenis_kenaikan" name="jenis_kenaikan" placeholder="Jenis Kenaikan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="golongan" name="golongan" placeholder="Golongan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Kerja Tahun</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="masa_kerja_tahun" name="masa_kerja_tahun" placeholder="Masa Kerja Tahun" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Kerja Bulan</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="masa_kerja_bulan" name="masa_kerja_bulan" placeholder="Masa Kerja Bulan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Angka Kredit</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="angka_kredit" name="angka_kredit" placeholder="Angka Kredit" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="pgkt" name="pgkt">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pangkat&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['pgkt']['tmp_name'];
$target = 'pgkt/';
$file_pgkt = @$_FILES['pgkt']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_pgkt);
    if (isset ($_POST['Simpan'])){
		$newNip = '';
	if($_POST['nik'] != '') { //kalau nipnya ngga kosong
		$newNip = $_POST['nik'];
	} else {
		$sql_nik = mysqli_query($koneksi,"SELECT CONCAT(DATE_FORMAT(CURDATE(),'%Y'),DATE_FORMAT(CURDATE(),'%m'),DATE_FORMAT(CURDATE(),'%d'),(COUNT(*)+1))  as NIP FROM daftar_pegawai");
		while($row = mysqli_fetch_assoc($sql_nik)) {
			$newNip = $row['NIK'];
		}
	}
	if(!empty($sumber)){
        $sql_simpan = "INSERT INTO riwayat_pangkat (nik,nama, no_sk, tgl_sk, tmt_jabatan,
		no_bkn, tgl_bkn, jenis_kenaikan, golongan, masa_kerja_tahun, 
		masa_kerja_bulan, angka_kredit, pgkt) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['no_sk']."',
			'".$_POST['tgl_sk']."',
			'".$_POST['tmt_jabatan']."',
			'".$_POST['no_bkn']."',
			'".$_POST['tgl_bkn']."',
			'".$_POST['jenis_kenaikan']."',
			'".$_POST['golongan']."',
			'".$_POST['masa_kerja_tahun']."',
			'".$_POST['masa_kerja_bulan']."',
			'".$_POST['angka_kredit']."',
			'".$file_pgkt."')";

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pangkat&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pangkat&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-pangkat';
		}
	})</script>";
}
	}
     //selesai proses simpan data