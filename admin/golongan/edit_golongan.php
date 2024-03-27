<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_golongan WHERE id_golongan='".$_GET['kode']."'";
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
					<input type="text" class="form-control" readonly id="nama" name="nama" value="<?php echo $_GET['nama']; ?>"
					/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan</label>
				<div class="col-sm-5">
					<select name="golongan" id="golongan" class="form-control" 
					<?php if($_SESSION["ses_level"] == 'User') { ?> readonly <?php }?>
					>
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['golongan'] == "Non Eselon") echo "<option value='Non Eselon' selected>Non Eselon</option>";
                else echo "<option value='Non Eselon'>Non Eselon</option>";

                if ($data_cek['golongan'] == "II a") echo "<option value='II a' selected>II a</option>";
                else echo "<option value='II a'>II a</option>";

                if ($data_cek['golongan'] == "II b") echo "<option value='II b' selected>II b</option>";
                else echo "<option value='II b'>II b</option>";

                if ($data_cek['golongan'] == "III a") echo "<option value='III a' selected>III a</option>";
                else echo "<option value='III a'>III a</option>";

                if ($data_cek['golongan'] == "III b") echo "<option value='III b' selected>III b</option>";
                else echo "<option value='III b'>III b</option>";

                if ($data_cek['golongan'] == "IV a") echo "<option value='IV a' selected>IV a</option>";
                else echo "<option value='IV a'>IV a</option>";

                if ($data_cek['golongan'] == "IV b") echo "<option value='IV b' selected>IV b</option>";
                else echo "<option value='IV b'>IV b</option>";

				if ($data_cek['golongan'] == "V a") echo "<option value='V a' selected>V a</option>";
                else echo "<option value='V a'>V a</option>";
            			?>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis KP</label>
				<div class="col-sm-5">
					<select name="jenis_kp" id="jenis_kp" class="form-control"
					<?php if($_SESSION["ses_level"] == 'User') { ?> readonly <?php }?>
					>
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['jenis_kp'] == "Reguler") echo "<option value='Reguler' selected>Reguler</option>";
                else echo "<option value='Reguler'>Reguler</option>";

				if ($data_cek['jenis_kp'] == "Non Reguler") echo "<option value='Non Reguler' selected>Non Reguler</option>";
                else echo "<option value='Non Reguler'>Non Reguler</option>";
            			?>
					</select>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT KP</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_kp" 
					<?php if($_SESSION["ses_level"] == 'User') { ?> readonly <?php }?>
					name="tmt_kp" value="<?php echo $data_cek['tmt_kp']; ?>"
					/>
				</div>
			</div>
            
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control"
					<?php if($_SESSION["ses_level"] == 'User') { ?> readonly <?php }?>
					id="nomor_sk" name="nomor_sk" value="<?php echo $data_cek['nomor_sk']; ?>"	/>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK</label>
				<div class="col-sm-5">
					<input type="date" class="form-control"
					<?php if($_SESSION["ses_level"] == 'User') { ?> readonly <?php }?>
					id="tanggal_sk" name="tanggal_sk" value="<?php echo $data_cek['tanggal_sk']; ?>"	/>
				</div>
			</div>
			
			

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-golongan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	
    if (isset ($_POST['Ubah'])){
		$sumber = @$_FILES['file']['tmp_name'];
		$target = 'foto/';
		$nama_file = @$_FILES['file']['name'];
		$pindah = move_uploaded_file($sumber, $target.$nama_file);

        if(!empty($sumber)){
            $sql_ubah = "UPDATE riwayat_golongan SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
				file='".$nama_file."',
                golongan='".$_POST['golongan']."',
                jenis_kp='".$_POST['jenis_kp']."',
                tmt_kp='".$_POST['tmt_kp']."',               
                nomor_sk='".$_POST['nomor_sk']."',
                tanggal_sk='".$_POST['tanggal_sk']."' WHERE id_golongan='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_golongan SET
                golongan='".$_POST['golongan']."',
                jenis_kp='".$_POST['jenis_kp']."',
                tmt_kp='".$_POST['tmt_kp']."',                
                nomor_sk='".$_POST['nomor_sk']."',
                tanggal_sk='".$_POST['tanggal_sk']."' 	
                WHERE id_golongan='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-golongan&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-golongan&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


