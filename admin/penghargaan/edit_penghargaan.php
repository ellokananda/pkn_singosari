<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_penghargaan WHERE id_penghargaan='".$_GET['kode']."'";
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
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $_GET['nama']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">No. SK</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="no_sk" name="no_sk" value="<?php echo $data_cek['no_sk']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-radio">Tanggal SK</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tgl_sk" name="tgl_sk" value="<?php echo $data_cek['tgl_sk']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT SK</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tmt_sk" name="tmt_sk" value="<?php echo $data_cek['tmt_sk']; ?>"
					/>
				</div>
			</div>
		
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Penghargaan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nama_penghargaan" name="nama_penghargaan" value="<?php echo $data_cek['nama_penghargaan']; ?>"	/>
				</div>
			</div>

            <!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi Penanggung Jawab Diklat</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="instansi_penanggung_jawab" name="instansi_penanggung_jawab" value="<?php echo $data_cek['instansi_penanggung_jawab']; ?>"	/>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="reward/<?php echo $data_cek['reward']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="reward" name="reward">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>


		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-penghargaan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['reward']['tmp_name'];
	$target = 'reward/';
	$file_reward = @$_FILES['reward']['name'];
	$pindah = move_uploaded_file($sumber, $target.$file_reward);
    if (isset ($_POST['Ubah'])){
        if(!empty($sumber)){
			$reward= $data_cek['reward'];
            if (file_exists("reward/$reward")){
            unlink("reward/$reward");}
            $sql_ubah = "UPDATE riwayat_penghargaan SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                no_sk='".$_POST['no_sk']."',
                tgl_sk='".$_POST['tgl_sk']."',
                tmt_sk='".$_POST['tmt_sk']."',
                nama_penghargaan='".$_POST['nama_penghargaan']."',
				reward='".$file_reward."' WHERE id_penghargaan='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_penghargaan SET
                no_sk='".$_POST['no_sk']."',
                tgl_sk='".$_POST['tgl_sk']."',
                tmt_sk='".$_POST['tmt_sk']."',
                nama_penghargaan='".$_POST['nama_penghargaan']."',
				reward='".$file_reward."'	
                WHERE id_penghargaan='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-penghargaan&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-penghargaan&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


