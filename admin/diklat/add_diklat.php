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
				<label class="col-sm-2 col-form-label">Jenis Diklat</label>
				<div class="col-sm-5">
					<select name="jenis_diklat" id="jenis_diklat" class="form-control">
						<option>- Pilih -</option>
						<option value="Diklat Struktural">Diklat Struktural</option>
						<option value="Diklat Fungsional">Diklat Fungsional</option>
					</select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Diklat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_diklat" name="nama_diklat" placeholder="Nama Diklat" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah Jam</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jumlah_jam" name="jumlah_jam" placeholder="Jumlah Jam Diklat" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Pelaksanaan Diklat</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_pelaksanaan_diklat" name="tanggal_pelaksanaan_diklat" placeholder="Tanggal Lahir" required>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Sertifikat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sertifikat" name="nomor_sertifikat" placeholder="Nomor Sertifikat" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi Penyelenggara</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="instansi_penyelenggara" name="instansi_penyelenggara" placeholder="Instansi Penanggung Jawab" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="diklat" name="diklat">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-diklat&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['diklat']['tmp_name'];
$target = 'diklat/';
$file_diklat = @$_FILES['diklat']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_diklat);
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
        $sql_simpan = "INSERT INTO riwayat_diklat (nik,nama, jenis_diklat, nama_diklat, jumlah_jam, tanggal_pelaksanaan_diklat, nomor_sertifikat, instansi_penyelenggara, diklat ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['jenis_diklat']."',
			'".$_POST['nama_diklat']."',
			'".$_POST['jumlah_jam']."',
			'".$_POST['tanggal_pelaksanaan_diklat']."',
			'".$_POST['nomor_sertifikat']."',
			'".$_POST['instansi_penyelenggara']."',
			'".$file_diklat."')";

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-diklat&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-diklat&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-diklat';
		}
	})</script>";
}
	}
     //selesai proses simpan data