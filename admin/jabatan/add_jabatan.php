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
					<input type="number" class="form-control" id="nik" name="nik" value="<?php echo $_GET['nik']; ?>"
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
				<label class="col-sm-2 col-form-label">Instansi Induk</label>
				<div class="col-sm-5">
					<select name="instansi_induk" id="instansi_induk" class="form-control">
						<option>- Pilih -</option>
						<option value="Pemerintah Kabupaten Malang">Pemerintah Kabupaten Malang</option>
						<option value="Badan Narkotika Nasional">Badan Narkotika Nasional</option>
						<option value="Sekretariat Jendral Komisi Pemilihan Umum">Sekretariat Jendral Komisi Pemilihan Umum</option>
						<option value="Pemerintah Provinsi Jawa Timur">Pemerintah Provinsi Jawa Timur</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi Kerja</label>
				<div class="col-sm-5">
					<select name="instansi_kerja" id="instansi_kerja" class="form-control">
						<option>- Pilih -</option>
						<option value="Pemerintah Kabupaten Malang">Pemerintah Kabupaten Malang</option>
						<option value="Badan Narkotika Nasional">Badan Narkotika Nasional</option>
						<option value="Sekretariat Jendral Komisi Pemilihan Umum">Sekretariat Jendral Komisi Pemilihan Umum</option>
						<option value="Pemerintah Provinsi Jawa Timur">Pemerintah Provinsi Jawa Timur</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Unit Organisasi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="unit_organisasi" name="unit_organisasi" placeholder="Unit Organisasi" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Jabatan</label>
				<div class="col-sm-5">
					<select name="jenis_jabatan" id="jenis_jabatan" class="form-control">
						<option>- Pilih -</option>
						<option value="Jabatan Struktural">Jabatan Struktural</option>
						<option value="Jabatan Fungsional Umum">Jabatan Fungsional Umum</option>
						<option value="Jabtan Fungsional Tertentu">Jabatan Fungsional Tertentu</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="[ Untuk JFU / JFT]" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT Jabatan</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_jabatan" name="tmt_jabatan" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="Nomor SK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk" name="tanggal_sk" placeholder="Tanggal SK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="sk" name="sk">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-jabatan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['sk']['tmp_name'];
$target = 'sk/';
$file_sk = @$_FILES['sk']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_sk);

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
		$sql_simpan = "INSERT INTO riwayat_jabatan (nik, nama, instansi_induk, instansi_kerja, unit_organisasi, jenis_jabatan, nama_jabatan, tmt_jabatan, nomor_sk, tanggal_sk, sk ) VALUES (
			 		'".$_POST['nik']."',
			 		'".$_POST['nama']."',
			 		'".$_POST['instansi_induk']."',
			 		'".$_POST['instansi_kerja']."',
			 		'".$_POST['unit_organisasi']."',
			 		'".$_POST['jenis_jabatan']."',
			 		'".$_POST['nama_jabatan']."',
			 		'".$_POST['tmt_jabatan']."',
			 		'".$_POST['nomor_sk']."',
			 		'".$_POST['tanggal_sk']."',
					'".$file_sk."')";
		
			    $query_simpan = mysqli_query($koneksi, $sql_simpan);
			    mysqli_close($koneksi);
	

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-jabatan&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-jabatan&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
	elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=add-jabatan';
			}
		})</script>";
	}
}
     //selesai proses simpan data