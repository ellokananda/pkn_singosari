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
				<label class="col-sm-2 col-form-label">Unit Organisasi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="unit_organisasi" name="unit_organisasi" placeholder="Unit Organisasi" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Tugas Tambahan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_tugas_tambahan" name="nama_tugas_tambahan" placeholder="Nama Tugas Tambahan" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT Awal Tugas Tambahan</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_awal_tugas_tambahan" name="tmt_awal_tugas_tambahan" placeholder="TMT Awal Tugas Tambahan" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT Akhir Tugas Tambahan</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_akhir_tugas_tambahan" name="tmt_akhir_tugas_tambahan" placeholder="TMT Akhir Tugas Tambahan" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="Nomor Sk" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk" name="tanggal_sk" placeholder="Tanggal SK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Perangkat Daerah</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="perangkat_daerah" name="perangkat_daerah" placeholder="Perangkat Daerah" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="tugas" name="tugas">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-tugas&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['tugas']['tmp_name'];
$target = 'tugas/';
$file_tugas = @$_FILES['tugas']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_tugas);

    if (isset ($_POST['Simpan'])){
		$newNip = '';
		if($_POST['nik'] != '') { //kalau nipnya ngga kosong
			$newNip = $_POST['nik'];
		} else {
			$sql_nip = mysqli_query($koneksi,"SELECT CONCAT(DATE_FORMAT(CURDATE(),'%Y'),DATE_FORMAT(CURDATE(),'%m'),DATE_FORMAT(CURDATE(),'%d'),(COUNT(*)+1))  as NIP FROM daftar_pegawai");
			while($row = mysqli_fetch_assoc($sql_nip)) {
				$newNip = $row['NIK'];
			}
		}
		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO riwayat_tugas_tambahan (nik, nama, unit_organisasi, nama_tugas_tambahan, tmt_awal_tugas_tambahan, tmt_akhir_tugas_tambahan, nomor_sk, tanggal_sk, perangkat_daerah, tugas ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['unit_organisasi']."',
			'".$_POST['nama_tugas_tambahan']."',
			'".$_POST['tmt_awal_tugas_tambahan']."',
			'".$_POST['tmt_akhir_tugas_tambahan']."',
			'".$_POST['nomor_sk']."',
			'".$_POST['tanggal_sk']."',
			'".$_POST['perangkat_daerah']."',
			'".$file_tugas."')";


        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-tugas&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-tugas&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, Dokumen Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-tugas';
		}
	})</script>";
}
}
     //selesai proses simpan data