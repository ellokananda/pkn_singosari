<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_tugas_tambahan WHERE id_tugas='".$_GET['kode']."'";
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
					<input type="text" class="form-control" readonly id="nama" name="nama" value="<?php echo $_GET['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Unit Organisasi</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="unit_organisasi" name="unit_organisasi" value="<?php echo $data_cek['unit_organisasi']; ?>"	/>
				</div>
			</div>


            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Tugas Tambahan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nama_tugas_tambahan" name="nama_tugas_tambahan" value="<?php echo $data_cek['nama_tugas_tambahan']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT Awal Tugas Tambahan</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tmt_awal_tugas_tambahan" name="tmt_awal_tugas_tambahan" value="<?php echo $data_cek['tmt_awal_tugas_tambahan']; ?>"
					/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT Akhir Tugas Tambahan</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tmt_akhir_tugas_tambahan" name="tmt_akhir_tugas_tambahan" value="<?php echo $data_cek['tmt_akhir_tugas_tambahan']; ?>"
					/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" value="<?php echo $data_cek['nomor_sk']; ?>"	/>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tanggal_sk" name="tanggal_sk" value="<?php echo $data_cek['tanggal_sk']; ?>"	/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Perangkat Daerah</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="perangkat_daerah" name="perangkat_daerah" value="<?php echo $data_cek['perangkat_daerah']; ?>"	/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="tugas/<?php echo $data_cek['tugas']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah File</label>
				<div class="col-sm-6">
					<input type="file" id="tugas" name="tugas">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-tugas&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['tugas']['tmp_name'];
$target = 'tugas/';
$file_tugas = @$_FILES['tugas']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_tugas);
    if (isset ($_POST['Ubah'])){

        if(!empty($sumber)){
			$tugas= $data_cek['tugas'];
            if (file_exists("tugas/$tugas")){
            unlink("tugas/$tugas");}
            $sql_ubah = "UPDATE riwayat_tugas_tambahan SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                unit_organisasi='".$_POST['unit_organisasi']."',
                nama_tugas_tambahan='".$_POST['nama_tugas_tambahan']."',
                tmt_awal_tugas_tambahan='".$_POST['tmt_awal_tugas_tambahan']."',
                tmt_akhir_tugas_tambahan='".$_POST['tmt_akhir_tugas_tambahan']."',
                nomor_sk='".$_POST['nomor_sk']."',
                tanggal_sk='".$_POST['tanggal_sk']."',
				perangkat_daerah='".$_POST['perangkat_daerah']."',
				tugas='".$file_tugas."'
                WHERE id_tugas='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_tugas_tambahan SET
                nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                unit_organisasi='".$_POST['unit_organisasi']."',
                nama_tugas_tambahan='".$_POST['nama_tugas_tambahan']."',
                tmt_awal_tugas_tambahan='".$_POST['tmt_awal_tugas_tambahan']."',
                tmt_akhir_tugas_tambahan='".$_POST['tmt_akhir_tugas_tambahan']."',
                nomor_sk='".$_POST['nomor_sk']."',
                tanggal_sk='".$_POST['tanggal_sk']."',
				perangkat_daerah='".$_POST['perangkat_daerah']."',	
                tugas='".$file_tugas."' WHERE id_tugas='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-tugas&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-tugas&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


