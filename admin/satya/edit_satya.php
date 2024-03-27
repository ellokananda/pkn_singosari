<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_satya_lencana WHERE id_satya_lencana='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">No SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_sk" name="no_sk" value="<?php echo $data_cek['no_sk']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_sk" name="tgl_sk" value="<?php echo $data_cek['tgl_sk']; ?>" >
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_sk" name="tmt_sk" value="<?php echo $data_cek['tmt_sk']; ?>" >
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="tahun" name="tahun" value="<?php echo $data_cek['tahun']; ?>" >
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Satya Lencana</label>
				<div class="col-sm-5">
					<select name="satya_lencana" id="satya_lencana" class="form-control">
					<option value="">-- Pilih --</option>
					<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['satya_lencana'] == "satya lencana x") echo "<option value='satya lencana x' selected>Satya Lencana X</option>";
                else echo "<option value='satya lencana x'>Satya Lencana X</option>";

				if ($data_cek['satya_lencana'] == "satya lencana xx") echo "<option value='satya lencana xx' selected>Satya Lencana XX</option>";
                else echo "<option value='satya lencana xx'>Satya Lencana XX</option>";
				if ($data_cek['satya_lencana'] == "satya lencana xx") echo "<option value='satya lencana xxx' selected>Satya Lencana XXX</option>";
                else echo "<option value='satya lencana xxx'>Satya Lencana XXX</option>";
						?>
					</select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="satlen/<?php echo $data_cek['satlen']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="satlen" name="satlen">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>


			

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-satya&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['satlen']['tmp_name'];
	$target = 'satlen/';
	$file_satlen = @$_FILES['satlen']['name'];
	$pindah = move_uploaded_file($sumber, $target.$file_satlen);
    if (isset ($_POST['Ubah'])){
        if(!empty($sumber)){
			$file_satlen= $data_cek['satlen'];
            if (file_exists("satlen/$file_satlen")){
            unlink("satlen/$file_satlen");}
            $sql_ubah = "UPDATE riwayat_satya_lencana SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
			no_sk='".$_POST['no_sk']."',
			tgl_sk='".$_POST['tgl_sk']."',
			tmt_sk='".$_POST['tmt_sk']."',
			tahun='".$_POST['tahun']."',
			satya_lencana='".$_POST['satya_lencana']."',
			satlen='".$file_satlen."' WHERE id_satya_lencana='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_satya_lencana SET
                no_sk='".$_POST['no_sk']."',
			tgl_sk='".$_POST['tgl_sk']."',
			tmt_sk='".$_POST['tmt_sk']."',
			tahun='".$_POST['tahun']."',
			satya_lencana='".$_POST['satya_lencana']."',
			satlen='".$file_satlen."' WHERE id_satya_lencana='".$_GET['kode']."'";	
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-satya&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-satya&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


