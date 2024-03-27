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
				<label class="col-sm-2 col-form-label">No. SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_sk" name="no_sk" placeholder="Nomor SK" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_sk" name="tgl_sk" placeholder="Tanggal SK" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_sk" name="tmt_sk" placeholder="TMT SK" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Penghargaan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_penghargaan" name="nama_penghargaan" placeholder="Nama Penghargaan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="reward" name="reward">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-penghargaan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['reward']['tmp_name'];
$target = 'reward/';
$file_reward = @$_FILES['reward']['name'];
$pindah = move_uploaded_file($sumber, $reward.$file_reward);
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
        $sql_simpan = "INSERT INTO riwayat_penghargaan (nik,nama, no_sk, tgl_sk, tmt_sk, nama_penghargaan, reward ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['no_sk']."',
			'".$_POST['tgl_sk']."',
			'".$_POST['tmt_sk']."',
			'".$_POST['nama_penghargaan']."',
			'".$file_reward."')";

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-penghargaan&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-penghargaan&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-penghargaan';
		}
	})</script>";
}
	}
     //selesai proses simpan data