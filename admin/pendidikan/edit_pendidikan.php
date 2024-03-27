<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_pendidikan WHERE id_pendidikan='".$_GET['kode']."'";
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
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $_GET['nik']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" readonly id="nama" name="nama_lengkap" value="<?php echo $_GET['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tingkat Pendidikan</label>
				<div class="col-sm-4">
					<select name="tingkat_pendidikan" id="tingkat_pendidikan" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
						//cek data yg dipilih sebelumnya

                if ($data_cek['tingkat_pendidikan'] == "S3") echo "<option value='S3' selected>S3</option>";
                else echo "<option value='S3'>S3</option>";

				if ($data_cek['tingkat_pendidikan'] == "S2") echo "<option value='S2' selected>S2</option>";
                else echo "<option value='S2'>S2</option>";

				if ($data_cek['tingkat_pendidikan'] == "S1") echo "<option value='S1' selected>S1</option>";
                else echo "<option value='S1'>S1</option>";

                if ($data_cek['tingkat_pendidikan'] == "D4") echo "<option value='D4' selected>D4</option>";
                else echo "<option value='D4'>D4</option>";

				if ($data_cek['tingkat_pendidikan'] == "D3") echo "<option value='D3' selected>D3</option>";
                else echo "<option value='D3'>D3</option>";

                if ($data_cek['tingkat_pendidikan'] == "D2") echo "<option value='D2' selected>D2</option>";
                else echo "<option value='D2'>D2</option>";

				if ($data_cek['tingkat_pendidikan'] == "D1") echo "<option value='D1' selected>D1</option>";
                else echo "<option value='D1'>D1</option>";

                if ($data_cek['tingkat_pendidikan'] == "SLTA") echo "<option value='SLTA' selected>SLTA</option>";
                else echo "<option value='SLTA'>SLTA</option>";

				if ($data_cek['tingkat_pendidikan'] == "SLTP") echo "<option value='SLTP' selected>SLTP</option>";
                else echo "<option value='SLTP'>SLTP</option>";

				if ($data_cek['tingkat_pendidikan'] == "SD") echo "<option value='SD' selected>SD</option>";
                else echo "<option value='SD'>SD</option>";
            			?>
					</select>
					</div>
				</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Program Studi</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="program_studi" name="program_studi" value="<?php echo $data_cek['program_studi']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Ijazah</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nomor_ijazah" name="nomor_ijazah" value="<?php echo $data_cek['nomor_ijazah']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Ijazah</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tanggal_ijazah" name="tanggal_ijazah" value="<?php echo $data_cek['tanggal_ijazah']; ?>"
					/>
				</div>
			</div>
            

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lembaga Pendidikan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nama_lembaga_pendidikan" name="nama_lembaga_pendidikan" value="<?php echo $data_cek['nama_lembaga_pendidikan']; ?>"	/>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gelar</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="gelar" name="gelar" value="<?php echo $data_cek['gelar']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-radio">Ijazah Pengangkatan CPNS</label>
				<div class="col-sm-5">
					<label class="radio-inline">
                        <input type="radio" name="ijazah_pengangkatan_cpns" value="Ya" <?php 
                if ($data_cek['ijazah_pengangkatan_cpns'] == "Ya") echo "checked"; ?>> Ya
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ijazah_pengangkatan_cpns" value="Tidak" <?php 
                if ($data_cek['ijazah_pengangkatan_cpns'] == "Tidak") echo "checked"; ?>> Tidak
                    </label>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File Ijazah</label>
				<div class="col-sm-6">
					<img src="ijazah/<?php echo $data_cek['ijazah']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="ijazah" name="ijazah">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pendidikan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['ijazah']['tmp_name'];
	$target = 'ijazah/';
	$file_ijazah = @$_FILES['ijazah']['name'];
	$pindah = move_uploaded_file($sumber, $target.$file_ijazah);
	if (isset ($_POST['Ubah'])){
		if(!empty($sumber)){
			$ijazah= $data_cek['ijazah'];
            if (file_exists("ijazah/$ijazah")){
            unlink("ijazah/$ijazah");}

            $sql_ubah = "UPDATE riwayat_pendidikan SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama_lengkap']."',
                tingkat_pendidikan='".$_POST['tingkat_pendidikan']."',
                program_studi='".$_POST['program_studi']."',
                nomor_ijazah='".$_POST['nomor_ijazah']."',
                tanggal_ijazah='".$_POST['tanggal_ijazah']."',
                nama_lembaga_pendidikan='".$_POST['nama_lembaga_pendidikan']."',
                gelar='".$_POST['gelar']."',
                ijazah_pengangkatan_cpns='".$_POST['ijazah_pengangkatan_cpns']."',
				ijazah='".$file_ijazah."' WHERE id_pendidikan='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_pendidikan SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama_lengkap']."',
                tingkat_pendidikan='".$_POST['tingkat_pendidikan']."',
                program_studi='".$_POST['program_studi']."',
                nomor_ijazah='".$_POST['nomor_ijazah']."',
                tanggal_ijazah='".$_POST['tanggal_ijazah']."',
                nama_lembaga_pendidikan='".$_POST['nama_lembaga_pendidikan']."',
                gelar='".$_POST['gelar']."',
                ijazah_pengangkatan_cpns='".$_POST['ijazah_pengangkatan_cpns']."',
				ijazah='".$file_ijazah."' 
                WHERE id_pendidikan='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pendidikan&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pendidikan&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


