<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_diklat WHERE id_diklat='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">Jenis Diklat</label>
				<div class="col-sm-4">
					<select name="jenis_diklat" id="jenis_diklat" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['jenis_diklat'] == "Diklat Struktural") echo "<option value='Diklat Struktural' selected>Diklat Struktural</option>";
                else echo "<option value='Diklat Struktural'>Diklat Struktural</option>";

				if ($data_cek['jenis_diklat'] == "Diklat Fungsional") echo "<option value='Diklat Fungsional' selected>Diklat Fungsional</option>";
                else echo "<option value='Diklat Fungsional'>Diklat Fungsional</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Nama Diklat</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nama_diklat" name="nama_diklat" value="<?php echo $data_cek['nama_diklat']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-radio">Jumlah Jam Diklat</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="jumlah_jam" name="jumlah_jam" value="<?php echo $data_cek['jumlah_jam']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Pelaksanaan Diklat</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tanggal_pelaksanaan_diklat" name="tanggal_pelaksanaan_diklat" value="<?php echo $data_cek['tanggal_pelaksanaan_diklat']; ?>"
					/>
				</div>
			</div>
		
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Sertifikat</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nomor_sertifikat" name="nomor_sertifikat" value="<?php echo $data_cek['nomor_sertifikat']; ?>"	/>
				</div>
			</div>

            <!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi Penanggung Jawab Diklat</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="instansi_penanggung_jawab" name="instansi_penanggung_jawab" value="<?php echo $data_cek['instansi_penanggung_jawab']; ?>"	/>
				</div>
			</div> -->

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi Penyelenggara Diklat</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="instansi_penyelenggara" name="instansi_penyelenggara" value="<?php echo $data_cek['instansi_penyelenggara']; ?>"	/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="diklat/<?php echo $data_cek['diklat']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="diklat" name="diklat">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>


		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-diklat&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['diklat']['tmp_name'];
	$target = 'diklat/';
	$file_diklat = @$_FILES['diklat']['name'];
	$pindah = move_uploaded_file($sumber, $target.$file_diklat);
    if (isset ($_POST['Ubah'])){
        if(!empty($sumber)){
			$diklat= $data_cek['diklat'];
            if (file_exists("diklat/$diklat")){
            unlink("diklat/$diklat");}
            $sql_ubah = "UPDATE riwayat_diklat SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama_lengkap']."',
                jenis_diklat='".$_POST['jenis_diklat']."',
                nama_diklat='".$_POST['nama_diklat']."',
                jumlah_jam='".$_POST['jumlah_jam']."',
                tanggal_pelaksanaan_diklat='".$_POST['tanggal_pelaksanaan_diklat']."',
                nomor_sertifikat='".$_POST['nomor_sertifikat']."',
                instansi_penyelenggara='".$_POST['instansi_penyelenggara']."',
				diklat='".$file_diklat."' WHERE id_diklat='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_diklat SET
                jenis_diklat='".$_POST['jenis_diklat']."',
                nama_diklat='".$_POST['nama_diklat']."',
                jumlah_jam='".$_POST['jumlah_jam']."',
                tanggal_pelaksanaan_diklat='".$_POST['tanggal_pelaksanaan_diklat']."',
                nomor_sertifikat='".$_POST['nomor_sertifikat']."',
                instansi_penyelenggara='".$_POST['instansi_penyelenggara']."',
				diklat='".$file_diklat."'	
                WHERE id_diklat='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-diklat&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-diklat&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


