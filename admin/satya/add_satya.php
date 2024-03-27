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
					<input type="text" class="form-control" id="no_sk" name="no_sk" placeholder="No. SK" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_sk" name="tgl_sk" placeholder="Tanggal SK" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_sk" name="tmt_sk" placeholder="TMT SK" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Satya Lencana</label>
				<div class="col-sm-5">
					<select name="satya_lencana" id="satya_lencana" class="form-control">
						<option>- Pilih -</option>
						<option value="satya lencana x">Satya Lencana X</option>
						<option value="satya lencana xx">Satya Lencana XX</option>
                        <option value="satya lencana xxx">Satya Lencana XXX</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="satlen" name="satlen">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-satya&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['satlen']['tmp_name'];
$target = 'satlen/';
$file_satya = @$_FILES['satlen']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_satya);
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
        $sql_simpan = "INSERT INTO riwayat_satya_lencana (nik,nama, no_sk, tgl_sk, tmt_sk, tahun, satya_lencana, satlen ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['no_sk']."',
			'".$_POST['tgl_sk']."',
			'".$_POST['tmt_sk']."',
			'".$_POST['tahun']."',
			'".$_POST['satya_lencana']."',
			'".$file_satya."')";

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-satya&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-satya&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-satya';
		}
	})</script>";
}
	}
     //selesai proses simpan data