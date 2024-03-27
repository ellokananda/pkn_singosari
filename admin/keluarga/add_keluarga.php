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
				<label class="col-sm-2 col-form-label">Nama Keluarga</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga" placeholder="Nama Keluarga" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hubungan Keluarga</label>
				<div class="col-sm-5">
					<select name="hubungan_keluarga" id="hubungan_keluarga" class="form-control">
						<option>- Pilih -</option>
						<option value="Suami">Suami</option>
						<option value="Istri">Istri</option>
						<option value="Anak Kandung">Anak Kandung</option>
                        <option value="Anak Angkat">Anak Angkat</option>
						<option value="Anak Tiri">Anak Tiri</option>
						<option value="Ayah">Ayah</option>
						<option value="Ibu">Ibu</option>
						<option value="Mertua Laki-Laki">Mertua Laki-Laki</option>
						<option value="Mertua Perempuan">Mertua Perempuan</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir Keluarga</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat_lahir_keluarga" name="tempat_lahir_keluarga" placeholder="Tempat Lahir Keluarga" required>
				</div>
			</div>

			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_lahir_keluarga" name="tanggal_lahir_keluarga" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Jenis Kelamin</label>
				<div class="col-sm-5">
					<label class="radio-inline">
                        <input type="radio" name="jenis_kelamin_keluarga" value="Laki-Laki"> Laki-Laki
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="jenis_kelamin_keluarga" value="Perempuan"> Perempuan
                    </label>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-5">
					<select name="agama_keluarga" id="agama_keluarga" class="form-control">
						<option>- Pilih -</option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Lainya">Lainya</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nik Keluarga</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nik_keluarga" name="nik_keluarga" placeholder="Nik Keluarga" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat_keluarga" name="alamat_keluarga" placeholder="Alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Pernikahan</label>
				<div class="col-sm-5">
					<select name="status_pernikahan" id="status_pernikahan" class="form-control">
						<option>- Pilih -</option>
						<option value="Belum Menikah">Belum Menikah</option>
						<option value="Menikah">Menikah</option>
						<option value="Janda">Janda</option>
						<option value="Duda">Duda</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Pekerjaan</label>
				<div class="col-sm-5">
					<select name="status_pekerjaan" id="status_pekerjaan" class="form-control">
						<option>- Pilih -</option>
						<option value="Belum Bekerja">Belum Bekerja</option>
						<option value="Bekerja di Instansi Negeri">Bekerja di Instansi Negeri</option>
						<option value="Bekerja di Instansi Swasta">Bekerja di Instansi Swasta</option>
						<option value="Wiraswasta">Wiraswasta</option>
						<option value="Pensiunan">Pensiunan</option>
						<option value="Tidak Bekerja">Tidak Bekerja</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Wajib Pajak</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="wajib_pajak" name="wajib_pajak" placeholder="Wajib Pajak" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Hidup</label>
				<div class="col-sm-5">
					<select name="status_hidup" id="status_hidup" class="form-control">
						<option>- Pilih -</option>
						<option value="Hidup">Hidup</option>
						<option value="Meninggal">Meninggal</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tunjangan Gaji</label>
				<div class="col-sm-5">
					<select name="tunjangan_gaji" id="tunjangan_gaji" class="form-control">
						<option>- Pilih -</option>
						<option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
					</select>
				</div>
			</div>

		</div>

			<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-keluarga&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
	</div>
<?php

    if (isset ($_POST['Simpan'])){
        $sql_simpan = "INSERT INTO riwayat_keluarga (nik, nama, nama_keluarga, hubungan_keluarga, tempat_lahir_keluarga, 
		tanggal_lahir_keluarga, jenis_kelamin_keluarga, agama_keluarga, nik_keluarga,
		alamat_keluarga, status_pernikahan, status_pekerjaan, wajib_pajak, 
		status_hidup, tunjangan_gaji ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['nama_keluarga']."',
			'".$_POST['hubungan_keluarga']."',
			'".$_POST['tempat_lahir_keluarga']."',
			'".$_POST['tanggal_lahir_keluarga']."',
			'".$_POST['jenis_kelamin_keluarga']."',
			'".$_POST['agama_keluarga']."',
			'".$_POST['nik_keluarga']."',
            '".$_POST['alamat_keluarga']."', 
			'".$_POST['status_pernikahan']."', 
			'".$_POST['status_pekerjaan']."', 
			'".$_POST['wajib_pajak']."', 
			'".$_POST['status_hidup']."', 
			'".$_POST['tunjangan_gaji']."')";

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-keluarga&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-keluarga&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
     //selesai proses simpan data