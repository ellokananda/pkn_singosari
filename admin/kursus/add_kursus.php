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
				<label class="col-sm-2 col-form-label">Jenis Kursus</label>
				<div class="col-sm-5">
					<select name="jenis_kursus" id="jenis_kursus" class="form-control">
						<option>- Pilih -</option>
						<option value="diklat fungsional">Diklat Fungsional</option>
						<option value="diklat teknis">Diklat Teknis</option>
						<option value="workshop">Workshop</option>
						<option value="pelatihan manajerial">Pelatihan Manajerial</option>
						<option value="pelatihan sosial kultural">Pelatihan Sosial Kultural</option>
						<option value="sosialisasi">Sosialisasi</option>
						<option value="bimbingan teknis">Bimbingan Teknis</option>
						<option value="seminar">Seminar</option>
						<option value="magang">Magang</option>
						<option value="kursus">Kursus</option>
						<option value="penataran">Penataran</option>
						<option value="pengembangan kompetensi">Pengembangan Kompetensi</option>
					</select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Kursus</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_kursus" name="nama_kursus" placeholder="Nama Kursus" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah Jam</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jumlah_jam" name="jumlah_jam" placeholder="Jumlah Jam Kursus" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Pelaksanaan Kursus</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_kursus" name="tgl_kursus" placeholder="Tanggal Kursus" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Selesai Kursus</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_selesai_kursus" name="tgl_selesai_kursus" placeholder="Tanggal Selesai Kursus" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Sertifikat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_sertif" name="no_sertif" placeholder="Nomor Sertifikat" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi Penyelenggara</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi Penanggung Jawab" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="course" name="course">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-kursus&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['course']['tmp_name'];
$target = 'course/';
$file_course = @$_FILES['course']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_course);
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
        $sql_simpan = "INSERT INTO riwayat_kursus (nik,nama, jenis_kursus, nama_kursus, jumlah_jam, tgl_kursus, tgl_selesai_kursus, no_sertif, instansi, course ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['jenis_kursus']."',
			'".$_POST['nama_kursus']."',
			'".$_POST['jumlah_jam']."',
			'".$_POST['tgl_kursus']."',
			'".$_POST['tgl_selesai_kursus']."',
			'".$_POST['no_sertif']."',
			'".$_POST['instansi']."',
			'".$file_course."')";

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-kursus&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-kursus&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-kursus';
		}
	})</script>";
}
	}
     //selesai proses simpan data