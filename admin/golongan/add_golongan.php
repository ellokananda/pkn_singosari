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
				<label class="col-sm-2 col-form-label">Golongan</label>
				<div class="col-sm-5">
					<select name="golongan" id="golongan" class="form-control">
						<option>- Pilih -</option>
						<option value="Non Eselon">Non Eselon</option>
						<option value="II a">II a</option>
						<option value="II b">II b</option>
						<option value="II c">II c</option>
						<option value="II d">II d</option>
						<option value="III a">III a</option>
						<option value="III b">III b</option>
						<option value="III c">III c</option>
						<option value="III d">III d</option>
						<option value="IV a">IV a</option>
						<option value="IV b">IV b</option>
						<option value="IV c">IV c</option>
						<option value="IV d">IV d</option>
						<option value="V a">V a</option>
					</select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis KP</label>
				<div class="col-sm-5">
					<select name="jenis_kp" id="jenis_kp" class="form-control">
						<option>- Pilih -</option>
						<option value="Reguler">Reguler</option>
						<option value="Non Reguler">Non Reguler</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT KP</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_kp" name="tmt_kp" placeholder="TMT KP" required>
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

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-golongan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
        $sql_simpan = "INSERT INTO riwayat_golongan (nik, nama, golongan, jenis_kp, tmt_kp, nomor_sk, tanggal_sk ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['golongan']."',
			'".$_POST['jenis_kp']."',
			'".$_POST['tmt_kp']."',
			'".$_POST['nomor_sk']."',
			'".$_POST['tanggal_sk']."')";

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-golongan&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-golongan&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
     //selesai proses simpan data