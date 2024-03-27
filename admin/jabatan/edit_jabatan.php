<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_jabatan WHERE id_jabatan='".$_GET['kode']."'";
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
	<input type="hidden" class="form-control" id="nik" name="id" value="<?php echo $_GET['kode']; ?>"readonly/>
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
					<input type="text" class="form-control" readonly id="nama" name="nama" value="<?php echo $_GET['nama']; ?>"
					/>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi Induk</label>
				<div class="col-sm-5">
					<select name="instansi_induk" id="instansi_induk" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['instansi_induk'] == "Pemerintah Kabupaten Malang") echo "<option value='Pemerintah Kabupaten Malang' selected>Pemerintah Kabupaten Malang</option>";
                else echo "<option value='Pemerintah Kabupaten Malang'>Pemerintah Kabupaten Malang</option>";

                if ($data_cek['instansi_induk'] == "Badan Narkotika Nasional") echo "<option value='Badan Narkotika Nasional' selected>Badan Narkotika Nasional</option>";
                else echo "<option value='Badan Narkotika Nasional'>Badan Narkotika Nasional</option>";

				if ($data_cek['instansi_induk'] == "Sekretariat Jendral Komisi Pemilihan Umum") echo "<option value='Sekretariat Jendral Komisi Pemilihan Umum' selected>Sekretariat Jendral Komisi Pemilihan Umum</option>";
                else echo "<option value='Sekretariat Jendral Komisi Pemilihan Umum'>Sekretariat Jendral Komisi Pemilihan Umum</option>";

				if ($data_cek['instansi_induk'] == "Pemerintah Provinsi Jawa Timur") echo "<option value='Pemerintah Provinsi Jawa Timur' selected>Pemerintah Provinsi Jawa Timur</option>";
                else echo "<option value='Pemerintah Provinsi Jawa Timur'>Pemerintah Provinsi Jawa Timur</option>";
            			?>
					</select>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi Kerja</label>
				<div class="col-sm-5">
					<select name="instansi_kerja" id="instansi_kerja" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['instansi_kerja'] == "Pemerintah Kabupaten Malang") echo "<option value='Pemerintah Kabupaten Malang' selected>Pemerintah Kabupaten Malang</option>";
                else echo "<option value='Pemerintah Kabupaten Malang'>Pemerintah Kabupaten Malang</option>";

                if ($data_cek['instansi_kerja'] == "Badan Narkotika Nasional") echo "<option value='Badan Narkotika Nasional' selected>Badan Narkotika Nasional</option>";
                else echo "<option value='Badan Narkotika Nasional'>Badan Narkotika Nasional</option>";

				if ($data_cek['instansi_kerja'] == "Sekretariat Jendral Komisi Pemilihan Umum") echo "<option value='Sekretariat Jendral Komisi Pemilihan Umum' selected>Sekretariat Jendral Komisi Pemilihan Umum</option>";
                else echo "<option value='Sekretariat Jendral Komisi Pemilihan Umum'>Sekretariat Jendral Komisi Pemilihan Umum</option>";

				if ($data_cek['instansi_kerja'] == "Pemerintah Provinsi Jawa Timur") echo "<option value='Pemerintah Provinsi Jawa Timur' selected>Pemerintah Provinsi Jawa Timur</option>";
                else echo "<option value='Pemerintah Provinsi Jawa Timur'>Pemerintah Provinsi Jawa Timur</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Unit Organisasi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="unit_organisasi" name="unit_organisasi" value="<?php echo $data_cek['unit_organisasi']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Jabatan</label>
				<div class="col-sm-5">
					<select name="jenis_jabatan" id="jenis_jabatan" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['jenis_jabatan'] == "Jabatan Struktural") echo "<option value='Jabatan Struktural' selected>Jabatan Struktural</option>";
                else echo "<option value='Jabatan Struktural'>Jabatan Struktural</option>";

                if ($data_cek['jenis_jabatan'] == "Jabatan Fungsional Umum") echo "<option value='Jabatan Fungsional Umum' selected>Jabatan Fungsional Umum</option>";
                else echo "<option value='Jabatan Fungsional Umum'>Jabatan Fungsional Umum</option>";

				if ($data_cek['jenis_jabatan'] == "Jabatan Fungsional Tertentu") echo "<option value='Jabatan Fungsional Tertentu' selected>Jabatan Fungsional Tertentu</option>";
                else echo "<option value='Jabatan Fungsional Tertentu'>Jabatan Fungsional Tertentu</option>";
            			?>
					</select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="<?php echo $data_cek['nama_jabatan']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT Jabatan</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_jabatan" name="tmt_jabatan" value="<?php echo $data_cek['tmt_jabatan']; ?>"
					/>
				</div>
			</div>
            

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" value="<?php echo $data_cek['nomor_sk']; ?>"	/>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk" name="tanggal_sk" value="<?php echo $data_cek['tanggal_sk']; ?>"	/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="sk/<?php echo $data_cek['sk']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="sk" name="sk">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-jabatan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php	
$sumber = @$_FILES['sk']['tmp_name'];
$target = 'sk/';
$file_sk = @$_FILES['sk']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_sk);
    if (isset ($_POST['Ubah'])){
        if(!empty($sumber)){
			$sk= $data_cek['sk'];
            if (file_exists("sk/$sk")){
            unlink("sk/$sk");}

            $sql_ubah = "UPDATE riwayat_jabatan SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                instansi_induk='".$_POST['instansi_induk']."',
                instansi_kerja='".$_POST['instansi_kerja']."',
                unit_organisasi='".$_POST['unit_organisasi']."',
                jenis_jabatan='".$_POST['jenis_jabatan']."',
                nama_jabatan='".$_POST['nama_jabatan']."',
                tmt_jabatan='".$_POST['tmt_jabatan']."',
                nomor_sk='".$_POST['nomor_sk']."',
                tanggal_sk='".$_POST['tanggal_sk']."',
				sk='".$file_sk."' WHERE id_jabatan='".$_POST['id']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_jabatan SET
                instansi_induk='".$_POST['instansi_induk']."',
                instansi_kerja='".$_POST['instansi_kerja']."',
                unit_organisasi='".$_POST['unit_organisasi']."',
                jenis_jabatan='".$_POST['jenis_jabatan']."',
                nama_jabatan='".$_POST['nama_jabatan']."',
                tmt_jabatan='".$_POST['tmt_jabatan']."',
                nomor_sk='".$_POST['nomor_sk']."',
                tanggal_sk='".$_POST['tanggal_sk']."' ,
				sk='".$file_sk."'	
                WHERE id_jabatan='".$_POST['id']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
			
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-jabatan&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-jabatan&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}
?>


