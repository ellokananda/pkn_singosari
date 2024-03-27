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
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $_GET['nama']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tingkat Pendidikan</label>
				<div class="col-sm-5">
					<select name="tingkat_pendidikan" id="tingkat_pendidikan" class="form-control">
						<option>- Pilih -</option>
						<option value="S3">S3</option>
						<option value="S2">S2</option>
						<option value="S1">S1</option>
						<option value="D4">D4</option>
						<option value="D3">D3</option>
						<option value="D2">D2</option>
						<option value="D1">D1</option>
						<option value="SLTA">SLTA</option>
						<option value="SLTP">SLTP</option>
						<option value="SD">SD</option>
					</select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Program Studi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="program_studi" name="program_studi" placeholder="Program Studi" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Ijazah</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_ijazah" name="nomor_ijazah" placeholder="Nomor Ijazah" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Ijazah /  Lulus</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_ijazah" name="tanggal_ijazah" placeholder="Tanggal Lulus " required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lembaga Pendidikan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_lembaga_pendidikan" name="nama_lembaga_pendidikan" placeholder="Lembaga Pendidikan" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Gelar</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="gelar" name="gelar" placeholder="Gelar" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-radio">Merupakan Ijazah Pengangkatan CPNS</label>
				<div class="col-sm-5">
					<label class="radio-inline">
                        <input type="radio" name="ijazah_pengangkatan_cpns" value="Ya"> Ya
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ijazah_pengangkatan_cpns" value="Tidak"> Tidak
                    </label>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen Ijazah</label>
				<div class="col-sm-6">
					<input type="file" id="ijazah" name="ijazah">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=data-pendidikan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['ijazah']['tmp_name'];
$target = 'ijazah/';
$file_ijazah = @$_FILES['ijazah']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_ijazah);
    if (isset ($_POST['Simpan'])){
		$newNip = '';
	if($_POST['nik'] != '') { //kalau niknya ngga kosong
		$newNip = $_POST['nik'];
	} else {
		$sql_nik = mysqli_query($koneksi,"SELECT CONCAT(DATE_FORMAT(CURDATE(),'%Y'),DATE_FORMAT(CURDATE(),'%m'),DATE_FORMAT(CURDATE(),'%d'),(COUNT(*)+1))  as NIP FROM daftar_pegawai");
		while($row = mysqli_fetch_assoc($sql_nik)) {
			$newNip = $row['NIK'];
		}
	}

	if(!empty($sumber)){
        $sql_simpan = "INSERT INTO riwayat_pendidikan (nik, nama, tingkat_pendidikan, program_studi, nomor_ijazah, tanggal_ijazah, nama_lembaga_pendidikan, gelar,  ijazah_pengangkatan_cpns, ijazah ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['tingkat_pendidikan']."',
            '".$_POST['program_studi']."',
			'".$_POST['nomor_ijazah']."',
			'".$_POST['tanggal_ijazah']."',
			'".$_POST['nama_lembaga_pendidikan']."',
			'".$_POST['gelar']."',
			'".$_POST['ijazah_pengangkatan_cpns']."',
			'".$file_ijazah."')";
            
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pendidikan&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pendidikan&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-pendidikan';
		}
	})</script>";
}
}
     //selesai proses simpan data