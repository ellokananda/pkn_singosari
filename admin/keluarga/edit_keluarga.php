<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_keluarga WHERE id_keluarga='".$_GET['kode']."'";
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
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $_GET['nik']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama_lengkap" value="<?php echo $_GET['nama']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Keluarga</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga" value="<?php echo $data_cek['nama_keluarga']; ?>"placeholder="Nama Keluarga" required>
				</div>
			</div>
			

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Hubungan Keluarga</label>
				<div class="col-sm-5">
					<select name="hubungan_keluarga" id="hubungan_keluarga" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['hubungan_keluarga'] == "Suami") echo "<option value='Suami' selected>Suami</option>";
                else echo "<option value='Suami'>Suami</option>";

                if ($data_cek['hubungan_keluarga'] == "Istri") echo "<option value='Istri' selected>Istri</option>";
                else echo "<option value='Istri'>Istri</option>";

				if ($data_cek['hubungan_keluarga'] == "Anak Kandung") echo "<option value='Anak Kandung' selected>Anak Kandung</option>";
                else echo "<option value='Anak Kandung'>Anak Kandung</option>";

				if ($data_cek['hubungan_keluarga'] == "Anak Angkat") echo "<option value='Anak Angkat' selected>Anak Angkat</option>";
                else echo "<option value='Anak Angkat'>Anak Angkat</option>";

                if ($data_cek['hubungan_keluarga'] == "Anak Tiri") echo "<option value='Anak Tiri' selected>Anak Tiri</option>";
                else echo "<option value='Anak Tiri'>Anak Tiri</option>";

                if ($data_cek['hubungan_keluarga'] == "Ayah") echo "<option value='Ayah' selected>Ayah</option>";
                else echo "<option value='Ayah'>Ayah</option>";

                if ($data_cek['hubungan_keluarga'] == "Ibu") echo "<option value='Ibu' selected>Ibu</option>";
                else echo "<option value='Ibu'>Ibu</option>";

                if ($data_cek['hubungan_keluarga'] == "Mertua Laki-Laki") echo "<option value='Mertua Laki-Laki' selected>Mertua Laki-Laki</option>";
                else echo "<option value='Mertua Laki-Laki'>Mertua Laki-Laki</option>";

                if ($data_cek['hubungan_keluarga'] == "Mertua Perempuan") echo "<option value='Mertua Perempuan' selected>Mertua Perempuan</option>";
                else echo "<option value='Mertua Perempuan'>Mertua Perempuan</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat_lahir_keluarga" name="tempat_lahir_keluarga" value="<?php echo $data_cek['tempat_lahir_keluarga']; ?>"placeholder="Tanggal Penilaian" required>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_lahir_keluarga" name="tanggal_lahir_keluarga" value="<?php echo $data_cek['tanggal_lahir_keluarga']; ?>"placeholder="Tanggal Diterima" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Jenis Kelamin</label>
				<div class="col-sm-5">
					<label class="radio-inline">
                        <input type="radio" name="jenis_kelamin_keluarga" value="Laki-Laki" <?php 
                if ($data_cek['jenis_kelamin_keluarga'] == "Laki-Laki") echo "checked"; ?>> Laki-laki
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="jenis_kelamin_keluarga" value="Perempuan" <?php 
                if ($data_cek['jenis_kelamin_keluarga'] == "Perempuan") echo "checked"; ?>> Perempuan
                    </label>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-5">
					<select name="agama_keluarga" id="agama_keluarga" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['agama_keluarga'] == "Islam") echo "<option value='Islam' selected>Islam</option>";
                else echo "<option value='Islam'>Islam</option>";

                if ($data_cek['agama_keluarga'] == "Kristen") echo "<option value='Kristen' selected>Kristen</option>";
                else echo "<option value='Kristen'>Kristen</option>";

				if ($data_cek['agama_keluarga'] == "Katolik") echo "<option value='Katolik' selected>Katolik</option>";
                else echo "<option value='Katolik'>Katolik</option>";

				if ($data_cek['agama_keluarga'] == "Hindu") echo "<option value='Hindu' selected>Hindu</option>";
                else echo "<option value='Hindu'>Hindu</option>";

                if ($data_cek['agama_keluarga'] == "Budha") echo "<option value='Budha' selected>Budha</option>";
                else echo "<option value='Budha'>Budha</option>";

                if ($data_cek['agama_keluarga'] == "Lainya") echo "<option value='Lainya' selected>Lainya</option>";
                else echo "<option value='Lainya'>Lainya</option>";
            			?>
					</select>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK Keluarga</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nik_keluarga" name="nik_keluarga" value="<?php echo $data_cek['nik_keluarga']; ?>"placeholder="Tanggal Atasan Penilai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat_keluarga" name="alamat_keluarga" value="<?php echo $data_cek['alamat_keluarga']; ?>"placeholder="Nama Pejabat Penilai" required>
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
				<label class="col-sm-2 col-form-label">Status Pekerjaan</label>
				<div class="col-sm-5">
					<select name="status_pekerjaan" id="status_pekerjaan" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['status_pekerjaan'] == "Belum Bekerja") echo "<option value='Belum Bekerja' selected>Belum Bekerja</option>";
                else echo "<option value='Belum Bekerja'>Belum Bekerja</option>";

                if ($data_cek['status_pekerjaan'] == "Bekerja di Instansi Negeri") echo "<option value='Bekerja di Instansi Negeri' selected>Bekerja di Instansi Negeri</option>";
                else echo "<option value='Bekerja di Instansi Negeri'>Bekerja di Instansi Negeri</option>";

                if ($data_cek['status_pekerjaan'] == "Bekerja di Instansi Swasta") echo "<option value='Bekerja di Instansi Swasta' selected>Bekerja di Instansi Swasta</option>";
                else echo "<option value='Bekerja di Instansi Swasta'>Bekerja di Instansi Swasta</option>";
                
                if ($data_cek['status_pekerjaan'] == "Wiraswasta") echo "<option value='Wiraswasta' selected>Wiraswasta</option>";
                else echo "<option value='Wiraswasta'>Wiraswasta</option>";

                if ($data_cek['status_pekerjaan'] == "Pensiunan") echo "<option value='Pensiunan' selected>Pensiunan</option>";
                else echo "<option value='Pensiunan'>Pensiunan</option>";

				if ($data_cek['status_pekerjaan'] == "Tidak Bekerja") echo "<option value='Tidak Bekerja' selected>Tidak Bekerja</option>";
                else echo "<option value='Tidak Bekerja'>Tidak Bekerja</option>";
            			?>
					</select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Wajib Pajak</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="wajib_pajak" name="wajib_pajak" value="<?php echo $data_cek['wajib_pajak']; ?>"/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Hidup</label>
				<div class="col-sm-5">
					<select name="status_hidup" id="status_hidup" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['status_hidup'] == "Hidup") echo "<option value='Hidup' selected>Hidup</option>";
                else echo "<option value='Hidup'>Hidup</option>";

				if ($data_cek['status_hidup'] == "Meninggal") echo "<option value='Meninggal' selected>Meninggal</option>";
                else echo "<option value='Meninggal'>Meninggal</option>";
            			?>
					</select>
				</div>
			</div>


            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tunjangan Gaji</label>
				<div class="col-sm-5">
					<select name="tunjangan_gaji" id="tunjangan_gaji" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['tunjangan_gaji'] == "Ya") echo "<option value='Ya' selected>Ya</option>";
                else echo "<option value='Ya'>Ya</option>";

				if ($data_cek['tunjangan_gaji'] == "Tidak") echo "<option value='Tidak' selected>Tidak</option>";
                else echo "<option value='Tidak'>Tidak</option>";
            			?>
					</select>
				</div>
			</div>
			
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-keluarga&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
    if (isset ($_POST['Ubah'])){

        if(!empty($sumber)){
            $sql_ubah = "UPDATE riwayat_keluarga SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama_lengkap']."',
                nama_keluarga='".$_POST['nama_keluarga']."',
                hubungan_keluarga='".$_POST['hubungan_keluarga']."',
                tempat_lahir_keluarga='".$_POST['tempat_lahir_keluarga']."',
                tanggal_lahir_keluarga='".$_POST['tanggal_lahir_keluarga']."',
                jenis_kelamin_keluarga='".$_POST['jenis_kelamin_keluarga']."',
                agama_keluarga='".$_POST['agama_keluarga']."',
                nik_keluarga='".$_POST['nik_keluarga']."',
                alamat_keluarga='".$_POST['alamat_keluarga']."',
                status_pernikahan='".$_POST['status_pernikahan']."',
				status_pekerjaan='".$_POST['status_pekerjaan']."',
				wajib_pajak='".$_POST['wajib_pajak']."',
				status_hidup='".$_POST['status_hidup']."',
                tunjangan_gaji='".$_POST['tunjangan_gaji']."' WHERE id_keluarga='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
			$sql_ubah = "UPDATE riwayat_keluarga SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama_lengkap']."',
                nama_keluarga='".$_POST['nama_keluarga']."',
                hubungan_keluarga='".$_POST['hubungan_keluarga']."',
                tempat_lahir_keluarga='".$_POST['tempat_lahir_keluarga']."',
                tanggal_lahir_keluarga='".$_POST['tanggal_lahir_keluarga']."',
                jenis_kelamin_keluarga='".$_POST['jenis_kelamin_keluarga']."',
                agama_keluarga='".$_POST['agama_keluarga']."',
                nik_keluarga='".$_POST['nik_keluarga']."',
                alamat_keluarga='".$_POST['alamat_keluarga']."',
                status_pernikahan='".$_POST['status_pernikahan']."',
				status_pekerjaan='".$_POST['status_pekerjaan']."',
				wajib_pajak='".$_POST['wajib_pajak']."',
				status_hidup='".$_POST['status_hidup']."',
                tunjangan_gaji='".$_POST['tunjangan_gaji']."' 
				WHERE id_keluarga='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-keluarga&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-keluarga&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


