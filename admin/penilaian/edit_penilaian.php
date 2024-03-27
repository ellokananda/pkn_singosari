<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_penilaian_kinerja WHERE id_penilaian='".$_GET['kode']."'";
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
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $_GET['nama']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun Laporan</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="tahun_laporan" name="tahun_laporan" value="<?php echo $data_cek['tahun_laporan']; ?>"placeholder="Tahun Laporan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pejabat Penilai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_pejabat_penilai" name="nama_pejabat_penilai" value="<?php echo $data_cek['nama_pejabat_penilai']; ?>"placeholder="Nama Pejabat Penilai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP Pejabat Penilai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip_pejabat_penilai" name="nip_pejabat_penilai" value="<?php echo $data_cek['nip_pejabat_penilai']; ?>" placeholder="NIP Pejabat Penilai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan Pejabat Penilai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="golongan_pejabat_penilai" name="golongan_pejabat_penilai" value="<?php echo $data_cek['golongan_pejabat_penilai']; ?>" placeholder="Golongan Pejabat Penilai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan Pejabat Penilaian</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jabatan_pejabat_penilai" name="jabatan_pejabat_penilai" value="<?php echo $data_cek['jabatan_pejabat_penilai']; ?>" placeholder="Jabatan Pejabat Penilai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Unor Pejabat Penilai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="unor_pejabat_penilai" name="unor_pejabat_penilai" value="<?php echo $data_cek['unor_pejabat_penilai']; ?>" placeholder="Unor Pejabat Penilai" required>
				</div>
			</div>

			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nilai Kinerja</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nilai_kinerja" name="nilai_kinerja" value="<?php echo $data_cek['nilai_kinerja']; ?>" placeholder="Nilai Kinerja" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nilai Perilaku</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nilai_perilaku" name="nilai_perilaku" value="<?php echo $data_cek['nilai_perilaku']; ?>" placeholder="Nilai Perilaku" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Predikat nilai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="predikat_nilai" name="predikat_nilai" value="<?php echo $data_cek['predikat_nilai']; ?>" placeholder="Predikat Nilai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="nilai/<?php echo $data_cek['nilai']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="nilai" name="nilai">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-penilaian&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['nilai']['tmp_name'];
	$target = 'nilai/';
	$file_nilai = @$_FILES['nilai']['name'];
	$pindah = move_uploaded_file($sumber, $target.$file_nilai);
    if (isset ($_POST['Ubah'])){

        if(!empty($sumber)){
			$nilai= $data_cek['nilai'];
            if (file_exists("nilai/$nilai")){
            unlink("nilai/$nilai");}

            $sql_ubah = "UPDATE riwayat_penilaian_kinerja SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                tahun_laporan='".$_POST['tahun_laporan']."',
                nama_pejabat_penilai='".$_POST['nama_pejabat_penilai']."',
				nip_pejabat_penilai='".$_POST['nip_pejabat_penilai']."',
				golongan_pejabat_penilai='".$_POST['golongan_pejabat_penilai']."',
				jabatan_pejabat_penilai='".$_POST['jabatan_pejabat_penilai']."',
				unor_pejabat_penilai='".$_POST['unor_pejabat_penilai']."',
				nilai_kinerja='".$_POST['nilai_kinerja']."',
				nilai_perilaku='".$_POST['nilai_perilaku']."', 
				predikat_nilai='".$_POST['predikat_nilai']."', 
				nilai='".$file_nilai."'
				WHERE id_penilaian='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
			$sql_ubah = "UPDATE riwayat_penilaian_kinerja SET
			nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                tahun_laporan='".$_POST['tahun_laporan']."',
                nama_pejabat_penilai='".$_POST['nama_pejabat_penilai']."',
				nip_pejabat_penilai='".$_POST['nip_pejabat_penilai']."',
				golongan_pejabat_penilai='".$_POST['golongan_pejabat_penilai']."',
				jabatan_pejabat_penilai='".$_POST['jabatan_pejabat_penilai']."',
				unor_pejabat_penilai='".$_POST['unor_pejabat_penilai']."',
				nilai_kinerja='".$_POST['nilai_kinerja']."',
				nilai_perilaku='".$_POST['nilai_perilaku']."', 
				predikat_nilai='".$_POST['predikat_nilai']."', 
				nilai='".$file_nilai."'
				WHERE id_penilaian='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-penilaian&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-penilaian&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}
?>


