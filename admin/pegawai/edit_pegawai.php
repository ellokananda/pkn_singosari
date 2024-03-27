<?php

    if(isset($_GET['kode'])){ 
        $sql_cek = "SELECT * FROM daftar_pegawai WHERE nik='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
					 readonly/>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data_cek['nip']; ?>"
					readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $data_cek['nama_lengkap']; ?>"
					/>
				</div>
			</div>

			

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data_cek['tempat_lahir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data_cek['tanggal_lahir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Jenis Kelamin</label>
				<div class="col-sm-5">
					<label class="radio-inline">
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php 
                if ($data_cek['jenis_kelamin'] == "Laki-Laki") echo "checked"; ?>> Laki-laki
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php 
                if ($data_cek['jenis_kelamin'] == "Perempuan") echo "checked"; ?>> Perempuan
                    </label>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-5">
					<select name="agama" id="agama" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['agama'] == "Islam") echo "<option value='Islam' selected>Islam</option>";
                else echo "<option value='Islam'>Islam</option>";

                if ($data_cek['agama'] == "Kristen") echo "<option value='Kristen' selected>Kristen</option>";
                else echo "<option value='Kristen'>Kristen</option>";

				if ($data_cek['agama'] == "Katolik") echo "<option value='Katolik' selected>Katolik</option>";
                else echo "<option value='Katolik'>Katolik</option>";

				if ($data_cek['agama'] == "Hindu") echo "<option value='Hindu' selected>Hindu</option>";
                else echo "<option value='Hindu'>Hindu</option>";

				if ($data_cek['agama'] == "Budha") echo "<option value='Budha' selected>Budha</option>";
                else echo "<option value='Budha'>Budha</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No. KTP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $data_cek['no_ktp']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"	/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Pos</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?php echo $data_cek['kode_pos']; ?>"	/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Telepon</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $data_cek['nomor_telepon']; ?>"
					/>
				</div>
			</div> 

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Pernikahan</label>
				<div class="col-sm-5">
					<select name="status_pernikahan" id="status_pernikahan" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['status_pernikahan'] == "Belum Menikah") echo "<option value='Belum Menikah' selected>Belum Menikah</option>";
                else echo "<option value='Belum Menikah'>Belum Menikah</option>";

                if ($data_cek['status_pernikahan'] == "Menikah") echo "<option value='Menikah' selected>Menikah</option>";
                else echo "<option value='Menikah'>Menikah</option>";

				if ($data_cek['status_pernikahan'] == "Janda") echo "<option value='Janda' selected>Janda</option>";
                else echo "<option value='Janda'>Janda</option>";

				if ($data_cek['status_pernikahan'] == "Duda") echo "<option value='Duda' selected>Duda</option>";
                else echo "<option value='Duda'>Duda</option>";
            			?>
					</select>
				</div>
			</div>

			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kedudukan Hukum</label>
				<div class="col-sm-5">
					<select name="kedudukan_hukum" id="kedudukan_hukum" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
						//cek data yg dipilih sebelumnya

                if ($data_cek['kedudukan_hukum'] == "Aktif") echo "<option value='Aktif' selected>Aktif</option>";
                else echo "<option value='Aktif'>Aktif</option>";

                if ($data_cek['kedudukan_hukum'] == "Cuti Diluar Tanggungan Negara") echo "<option value='Cuti Diluar Tanggungan Negara' selected>Cuti Diluar Tanggungan Negara</option>";
                else echo "<option value='Cuti Diluar Tanggungan Negara'>Cuti Diluar Tanggungan Negara</option>";

				if ($data_cek['kedudukan_hukum'] == "Tugas Belajar") echo "<option value='Tugas Belajar' selected>Tugas Belajar</option>";
                else echo "<option value='Tugas Belajar'>Tugas Belajar</option>";

				if ($data_cek['kedudukan_hukum'] == "Pemberhentian Sementara") echo "<option value='Pemberhentian Sementara' selected>Pemberhentian Sementara</option>";
                else echo "<option value='Pemberhentian Sementara'>Pemberhentian Sementara</option>";

				if ($data_cek['kedudukan_hukum'] == "Masa Persiapan Pensiun") echo "<option value='Masa Persiapan Pensiun' selected>Masa Persiapan Pensiun</option>";
                else echo "<option value='Masa Persiapan Pensiun'>Masa Persiapan Pensiun</option>";

				if ($data_cek['kedudukan_hukum'] == "Mencapai BUP") echo "<option value='Mencapai BUP' selected>Mencapai BUP</option>";
                else echo "<option value='Mencapai BUP'>Mencapai BUP</option>";

				if ($data_cek['kedudukan_hukum'] == "PNS Terkan Hukuman Disiplin") echo "<option value='PNS Terkan Hukuman Disiplin' selected>PNS Terkan Hukuman Disiplin</option>";
                else echo "<option value='PNS Terkan Hukuman Disiplin'>PNS Terkan Hukuman Disiplin</option>";

				if ($data_cek['kedudukan_hukum'] == "Diberhentikan") echo "<option value='Diberhentikan' selected>Diberhentikan</option>";
                else echo "<option value='Diberhentikan'>Diberhentikan</option>";

				if ($data_cek['kedudukan_hukum'] == "Tidak Aktif") echo "<option value='Tidak Aktif' selected>Tidak Aktif</option>";
                else echo "<option value='Tidak Aktif'>Tidak Aktif</option>";
            			?>
					</select>
						</div>
						</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Pegawai</label>
				<div class="col-sm-5">
					<select name="jenis_pegawai" id="jenis_pegawai" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
						//cek data yg dipilih sebelumnya

                if ($data_cek['jenis_pegawai'] == "PNS Kab/Kota Bekerja Pada Kab/Kota") echo "<option value='PNS Kab/Kota Bekerja Pada Kab/Kota' selected>PNS Kab/Kota Bekerja Pada Kab/Kota</option>";
                else echo "<option value='PNS Kab/Kota Bekerja Pada Kab/Kota'>PNS Kab/Kota Bekerja Pada Kab/Kota</option>";

				if ($data_cek['jenis_pegawai'] == "PNS Kab/Kota DPK Pada Instansi Negeri") echo "<option value='PNS Kab/Kota DPK Pada Instansi Negeri' selected>PNS Kab/Kota DPK Pada Instansi Negeri</option>";
                else echo "<option value='PNS Kab/Kota DPK Pada Instansi Negeri'>PNS Kab/Kota DPK Pada Instansi Negeri</option>";

				if ($data_cek['jenis_pegawai'] == "PNS Kab/Kota DPB Pada Instansi Negeri") echo "<option value='PNS Kab/Kota DPB Pada Instansi Negeri' selected>PNS Kab/Kota DPB Pada Instansi Negeri</option>";
                else echo "<option value='PPNS Kab/Kota DPB Pada Instansi Negeri'>PNS Kab/Kota DPB Pada Instansi Negeri</option>";

				if ($data_cek['jenis_pegawai'] == "PNS Kab/Kota DPK Pada Instansi Swasta") echo "<option value='PNS Kab/Kota DPK Pada Instansi Swasta' selected>PNS Kab/Kota DPK Pada Instansi Swasta</option>";
                else echo "<option value='PNS Kab/Kota DPK Pada Instansi Swasta'>PNS Kab/Kota DPK Pada Instansi Swasta</option>";

				if ($data_cek['jenis_pegawai'] == "PNS Kementrian DPK Pada Instansi Kab/Kota") echo "<option value='PNS Kementrian DPK Pada Instansi Kab/Kota' selected>PNS Kementrian DPK Pada Instansi Kab/Kota</option>";
                else echo "<option value='PNS Kementrian DPK Pada Instansi Kab/Kota'>PNS Kementrian DPK Pada Instansi Kab/Kota</option>";

				if ($data_cek['jenis_pegawai'] == "PNS Kementrian DPB Pada Instansi Kab/Kota") echo "<option value='PNS Kementrian DPB Pada Instansi Kab/Kota' selected>PNS Kementrian DPB Pada Instansi Kab/Kota</option>";
                else echo "<option value='PNS Kementrian DPB Pada Instansi Kab/Kota'>PNS Kementrian DPB Pada Instansi Kab/Kota</option>";
            			?>
					</select>
						</div>
						</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Satuan Kerja</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="satker" name="satker" value="<?php echo $data_cek['satker']; ?>"
					/>
				</div>
			</div> 

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Unit Kerja</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="unit_kerja" name="unit_kerja" value="<?php echo $data_cek['unit_kerja']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pangkat Terakhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pangkat_terakhir" name="pangkat_terakhir" value="<?php echo $data_cek['pangkat_terakhir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan Terakhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jabatan_terakhir" name="jabatan_terakhir" value="<?php echo $data_cek['jabatan_terakhir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pangkat Terakhir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?php echo $data_cek['pendidikan_terakhir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Eselon</label>
				<div class="col-sm-5">
					<select name="eselon" id="eselon" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['eselon'] == "II a") echo "<option value='II a' selected>II a</option>";
                else echo "<option value='II a'>II a</option>";

                if ($data_cek['eselon'] == "II b") echo "<option value='II b' selected>II b</option>";
                else echo "<option value='II b'>II b</option>";

                if ($data_cek['eselon'] == "III a") echo "<option value='III a' selected>III a</option>";
                else echo "<option value='III a'>III a</option>";

                if ($data_cek['eselon'] == "III b") echo "<option value='III b' selected>III b</option>";
                else echo "<option value='III b'>III b</option>";

                if ($data_cek['eselon'] == "IV a") echo "<option value='IV a' selected>IV a</option>";
                else echo "<option value='IV a'>IV a</option>";

                if ($data_cek['eselon'] == "IV b") echo "<option value='IV b' selected>IV b</option>";
                else echo "<option value='IV b'>IV b</option>";

				if ($data_cek['eselon'] == "V a") echo "<option value='V a' selected>V a</option>";
                else echo "<option value='V a'>V a</option>";
            			?>
					</select>
				</div>
			</div>
					
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Pegawai</label>
				<div class="col-sm-6">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Foto</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['foto'];
            if (file_exists("foto/$foto")){
            unlink("foto/$foto");}

        $sql_ubah = "UPDATE daftar_pegawai SET	
			nama_lengkap='".$_POST['nama_lengkap']."',
			nip='".$_POST['nip']."',
			tempat_lahir='".$_POST['tempat_lahir']."',
			tanggal_lahir='".$_POST['tanggal_lahir']."',
			jenis_kelamin='".$_POST['jenis_kelamin']."',
			agama='".$_POST['agama']."',
			no_ktp='".$_POST['no_ktp']."',
			alamat='".$_POST['alamat']."',
			kode_pos='".$_POST['kode_pos']."',
			nomor_telepon='".$_POST['nomor_telepon']."',
			status_pernikahan='".$_POST['status_pernikahan']."',
			kedudukan_hukum='".$_POST['kedudukan_hukum']."',
			jenis_pegawai='".$_POST['jenis_pegawai']."',
			satker='".$_POST['satker']."',
			unit_kerja='".$_POST['unit_kerja']."',
			pangkat_terakhir='".$_POST['pangkat_terakhir']."',
			jabatan_terakhir='".$_POST['jabatan_terakhir']."',
			pendidikan_terakhir='".$_POST['pendidikan_terakhir']."',
			eselon='".$_POST['eselon']."',
			foto='".$nama_file."' WHERE nik='".$_POST['nik']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE daftar_pegawai SET	
			nama_lengkap='".$_POST['nama_lengkap']."',
			nip='".$_POST['nip']."',
			tempat_lahir='".$_POST['tempat_lahir']."',
			tanggal_lahir='".$_POST['tanggal_lahir']."',
			jenis_kelamin='".$_POST['jenis_kelamin']."',
			agama='".$_POST['agama']."',
			no_ktp='".$_POST['no_ktp']."',
			alamat='".$_POST['alamat']."',
			kode_pos='".$_POST['kode_pos']."',
			nomor_telepon='".$_POST['nomor_telepon']."',
			status_pernikahan='".$_POST['status_pernikahan']."',
			kedudukan_hukum='".$_POST['kedudukan_hukum']."',
			jenis_pegawai='".$_POST['jenis_pegawai']."',
			satker='".$_POST['satker']."',
			unit_kerja='".$_POST['unit_kerja']."',
			pangkat_terakhir='".$_POST['pangkat_terakhir']."',
			jabatan_terakhir='".$_POST['jabatan_terakhir']."',
			pendidikan_terakhir='".$_POST['pendidikan_terakhir']."',
			eselon='".$_POST['eselon']."',		
			foto='".$nama_file."'
		WHERE nik='".$_POST['nik']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pegawai';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pegawai';
            }
        })</script>";
    }
}


