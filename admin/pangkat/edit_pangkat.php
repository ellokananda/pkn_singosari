<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_pangkat WHERE id_pangkat='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">No SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_sk" name="no_sk" value="<?php echo $data_cek['no_sk']; ?>"
					/>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_sk" name="tgl_sk"  value="<?php echo $data_cek['tgl_sk']; ?>">
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
				<label class="col-sm-2 col-form-label">No BKN</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_bkn" name="no_bkn"  value="<?php echo $data_cek['no_bkn']; ?>"placeholder="No BKN" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal BKN</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_bkn" name="tgl_bkn" value="<?php echo $data_cek['tgl_bkn']; ?>" placeholder="Tanggal BKN" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kenaikan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jenis_kenaikan" name="jenis_kenaikan" value="<?php echo $data_cek['jenis_kenaikan']; ?>" placeholder="Jenis Kenaikan" required>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="golongan" name="golongan" value="<?php echo $data_cek['golongan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Kerja Tahun</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="masa_kerja_tahun" name="masa_kerja_tahun" value="<?php echo $data_cek['masa_kerja_tahun']; ?>" placeholder="Masa Kerja Tahun" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Kerja Bulan</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="masa_kerja_bulan" name="masa_kerja_bulan" value="<?php echo $data_cek['masa_kerja_bulan']; ?>" placeholder="Masa Kerja Bulan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Angka Kredit</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="angka_kredit" name="angka_kredit" value="<?php echo $data_cek['angka_kredit']; ?>" placeholder="Angka Kredit" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="pgkt/<?php echo $data_cek['pgkt']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="pgkt" name="pgkt">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pangkat&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['pgkt']['tmp_name'];
$target = 'pgkt/';
$file_pgkt = @$_FILES['pgkt']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_pgkt);
    if (isset ($_POST['Ubah'])){
        if(!empty($sumber)){
			$pgkt= $data_cek['pgkt'];
            if (file_exists("pgkt/$pgkt")){
            unlink("pgkt/$pgkt");}
            $sql_ubah = "UPDATE riwayat_pangkat SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                no_sk='".$_POST['no_sk']."',
			tgl_sk='".$_POST['tgl_sk']."',
			tmt_jabatan='".$_POST['tmt_jabatan']."',
			no_bkn='".$_POST['no_bkn']."',
			tgl_bkn='".$_POST['tgl_bkn']."',
			jenis_kenaikan='".$_POST['jenis_kenaikan']."',
			golongan='".$_POST['golongan']."',
			masa_kerja_tahun='".$_POST['masa_kerja_tahun']."',
			masa_kerja_bulan='".$_POST['masa_kerja_bulan']."',
			angka_kredit='".$_POST['angka_kredit']."',
				pgkt='".$file_pgkt."'
				WHERE id_pangkat='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
			$sql_ubah = "UPDATE riwayat_pangkat SET
            no_sk='".$_POST['no_sk']."',
			tgl_sk='".$_POST['tgl_sk']."',
			tmt_jabatan='".$_POST['tmt_jabatan']."',
			no_bkn='".$_POST['no_bkn']."',
			tgl_bkn='".$_POST['tgl_bkn']."',
			jenis_kenaikan='".$_POST['jenis_kenaikan']."',
			golongan='".$_POST['golongan']."',
			masa_kerja_tahun='".$_POST['masa_kerja_tahun']."',
			masa_kerja_bulan='".$_POST['masa_kerja_bulan']."',
			angka_kredit='".$_POST['angka_kredit']."',
			pgkt='".$file_pgkt."'
			WHERE id_pangkat='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pangkat&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pangkat&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


