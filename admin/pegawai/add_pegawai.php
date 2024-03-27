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
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nip" placeholder="*(Kosongkan jika honorer)">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Pegawai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
				</div>
			</div>

		
			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Jenis Kelamin</label>
				<div class="col-sm-5">
					<label class="radio-inline">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </label>
				</div>
			</div>

			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-5">
					<select name="agama" id="agama" class="form-control">
						<option>- Pilih -</option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No. KTP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No.KTP" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="*Sesuai Ktp" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Pos</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Telepon</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="No Telepon" required>
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
				<label class="col-sm-2 col-form-label">Kedudukan Hukum</label>
				<div class="col-sm-5">
					<select name="kedudukan_hukum" id="kedudukan_hukum" class="form-control">
						<option>- Pilih -</option>
						<option value="Aktif">Aktif</option>
						<option value="Cuti Diluar Tanggungan Negara">Cuti Diluar Tanggungan Negara</option>
						<option value="Tugas Belajar">Tugas Belajar</option>
						<option value="Pemberhentian Sementara">Pemberhentian Sementara</option>
						<option value="Masa Persiapan Pensiun">Masa Persiapan Pensiun</option>
						<option value="Mencapai BUP">Mencapai BUP</option>
						<option value="PNS Terkan Hukuman Disiplin">PNS Terkan Hukuman Disiplin</option>
						<option value="Diberhentikan">Diberhentikan</option>
						<option value="Tidak Aktif">Tidak Aktif</option>
					</select>
				</div>
			</div>

			<!--jenis pegawai tidak wajib diisi-->
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Pegawai</label>
				<div class="col-sm-5">
					<select name="jenis_pegawai" id="jenis_pegawai" class="form-control">
						<option>- Pilih -</option>
						<option value="PNS Kab/Kota Bekerja Pada Kab/Kota">PNS Kab/Kota Bekerja Pada Kab/Kota</option>
						<option value="PNS Kab/Kota DPK Pada Instansi Negeri">PNS Kab/Kota DPK Pada Instansi Negeri</option>
						<option value="PNS Kab/Kota DPB Pada Instansi Negeri">PNS Kab/Kota DPB Pada Instansi Negeri</option>
						<option value="PNS Kab/Kota DPK Pada Instansi Swasta">PNS Kab/Kota DPK Pada Instansi Swasta</option>
						<option value="PNS Kementrian DPK Pada Instansi Kab/Kota">PNS Kementrian DPK Pada Instansi Kab/Kota</option>
						<option value="PNS Kementrian DPB Pada Instansi Kab/Kota">PNS Kementrian DPB Pada Instansi Kab/Kota</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Satuan Kerja</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="satker" name="satker" placeholder="Satuan Kerja" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Unit Kerja</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="unit_kerja" name="unit_kerja" placeholder="Unit Kerja" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pangkat Terakhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pangkat_terakhir" name="pangkat_terakhir" placeholder="Pangkat Terakhir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan Terakhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jabatan_terakhir" name="jabatan_terakhir" placeholder="Jabatan Terakhir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Eselon</label>
				<div class="col-sm-5">
					<select name="eselon" id="eselon" class="form-control">
						<option>- Pilih -</option>
						<option value="Non Eselon">Non Eselon</option>
						<option value="II a">II a</option>
						<option value="II b">II b</option>
						<option value="III a">III a</option>
						<option value="III b">III b</option>
						<option value="IV a">IV a</option>
						<option value="IV b">IV b</option>
						<option value="V a">V a</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Pegawai</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){
		$newNip = '';
		if($_POST['nip'] != '') { //kalau nipnya ngga kosong
			$newNip = $_POST['nip'];
		} else {
			$sql_nip = mysqli_query($koneksi,"SELECT CONCAT(DATE_FORMAT(CURDATE(),'%Y'),DATE_FORMAT(CURDATE(),'%m'),DATE_FORMAT(CURDATE(),'%d'),(COUNT(*)+1))  as NIP FROM daftar_pegawai");
			while($row = mysqli_fetch_assoc($sql_nip)) {
				$newNip = $row['NIP'];
			}
		}
		

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO daftar_pegawai (nik, nip, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, no_ktp, alamat,kode_pos, nomor_telepon, status_pernikahan, kedudukan_hukum, jenis_pegawai, satker, unit_kerja, pangkat_terakhir,jabatan_terakhir, pendidikan_terakhir, eselon, foto) VALUES (
			'".$_POST['nik']."',
			'".$newNip."',
			'".$_POST['nama_lengkap']."',
			'".$_POST['tempat_lahir']."',
			'".$_POST['tanggal_lahir']."',
			'".$_POST['jenis_kelamin']."',
			'".$_POST['agama']."',
			'".$_POST['no_ktp']."',
			'".$_POST['alamat']."',
			'".$_POST['kode_pos']."',
			'".$_POST['nomor_telepon']."',
			'".$_POST['status_pernikahan']."',
			'".$_POST['kedudukan_hukum']."',
			'".$_POST['jenis_pegawai']."',
			'".$_POST['satker']."',
			'".$_POST['unit_kerja']."',
			'".$_POST['pangkat_terakhir']."',
			'".$_POST['jabatan_terakhir']."',
			'".$_POST['pendidikan_terakhir']."',
			'".$_POST['eselon']."',
            '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pegawai';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pegawai';
          }
      })</script>";
	}
	}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=add-pegawai';
			}
		})</script>";
	}
	}
     //selesai proses simpan data