<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_mutasi_cpns_ke_pns WHERE id_mutasi='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">TMT CPNS</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_cpns" name="tmt_cpns" value="<?php echo $data_cek['tmt_cpns']; ?>"
					/>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK CPNS</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk_cpns" name="nomor_sk_cpns"  value="<?php echo $data_cek['nomor_sk_cpns']; ?>"placeholder="Nomor SK Cpns" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK Cpns</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk_cpns" name="tanggal_sk_cpns" value="<?php echo $data_cek['tanggal_sk_cpns']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Bukan Pengangkatan CPNS</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_bkn_pengangkatan_cpns" name="nomor_bkn_pengangkatan_cpns"  value="<?php echo $data_cek['nomor_bkn_pengangkatan_cpns']; ?>"placeholder="Nomor Bukan Pengangkatan cpns" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT PNS</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_pns" name="tmt_pns" value="<?php echo $data_cek['tmt_pns']; ?>" placeholder="Tamat Cpns" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK PNS</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk_pns" name="nomor_sk_pns" value="<?php echo $data_cek['nomor_sk_pns']; ?>" placeholder="Nomor SK Pns" required>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK PNS</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk_pns" name="tanggal_sk_pns" value="<?php echo $data_cek['tanggal_sk_pns']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Pra Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sttpl_diklat_pra_jabatan" name="nomor_sttpl_diklat_pra_jabatan" value="<?php echo $data_cek['nomor_sttpl_diklat_pra_jabatan']; ?>" placeholder="Nomor Pra Jabatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal  Diklat Pra Jabatan</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sttpl_diklat_pra_jabatan" name="tanggal_sttpl_diklat_pra_jabatan"  value="<?php echo $data_cek['tanggal_sttpl_diklat_pra_jabatan']; ?>"placeholder="Tanggal Diklat Pra Jabatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Surat Sehat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_surat_keterangan_sehat" name="nomor_surat_keterangan_sehat" value="<?php echo $data_cek['nomor_surat_keterangan_sehat']; ?>" placeholder="Surat Sehat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">anggal Surat Sehat</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_surat_keterangan_sehat" name="tanggal_surat_keterangan_sehat" value="<?php echo $data_cek['tanggal_surat_keterangan_sehat']; ?>"
					/>
				</div>
			</div>
<!-- 
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Skck</label>
				<div class="col-sm-5"> 
					<input type="text" class="form-control" id="nomor_skck" name="nomor_skck" value="<?php echo $data_cek['nomor_skck']; ?>" placeholder="Nomor Skck" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Skck</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_skck" name="tanggal_skck" value="<?php echo $data_cek['tanggal_skck']; ?>"
					/>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Pengadaan Pegawai</label>
				<div class="col-sm-4">
					<select name="jenis_pengadaan_pegawai" id="jenis_pengadaan_pegawai" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['jenis_pengadaan_pegawai'] == "Umum") echo "<option value='Umum' selected>Umum</option>";
                else echo "<option value='Umum'>Umum</option>";

				if ($data_cek['jenis_pengadaan_pegawai'] == "Tenanga Honorer") echo "<option value='Tenanga Honorer' selected>Tenanga Honorer</option>";
                else echo "<option value='Tenanga Honorer'>Tenanga Honorer</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="mutasi/<?php echo $data_cek['mutasi']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="mutasi" name="mutasi">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-mutasi&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['mutasi']['tmp_name'];
$target = 'mutasi/';
$file_mutasi = @$_FILES['mutasi']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_mutasi);
    if (isset ($_POST['Ubah'])){
        if(!empty($sumber)){
			$mutasi= $data_cek['mutasi'];
            if (file_exists("mutasi/$mutasi")){
            unlink("mutasi/$mutasi");}
            $sql_ubah = "UPDATE riwayat_mutasi_cpns_ke_pns SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                tmt_cpns='".$_POST['tmt_cpns']."',
                nomor_sk_cpns='".$_POST['nomor_sk_cpns']."',
                tanggal_sk_cpns='".$_POST['tanggal_sk_cpns']."',
                nomor_bkn_pengangkatan_cpns='".$_POST['nomor_bkn_pengangkatan_cpns']."',
                tmt_pns='".$_POST['tmt_pns']."',
                nomor_sk_pns='".$_POST['nomor_sk_pns']."',
                tanggal_sk_pns='".$_POST['tanggal_sk_pns']."',
                nomor_sttpl_diklat_pra_jabatan='".$_POST['nomor_sttpl_diklat_pra_jabatan']."',
                tanggal_sttpl_diklat_pra_jabatan='".$_POST['tanggal_sttpl_diklat_pra_jabatan']."',
				nomor_surat_keterangan_sehat='".$_POST['nomor_surat_keterangan_sehat']."',
				tanggal_surat_keterangan_sehat='".$_POST['tanggal_surat_keterangan_sehat']."',
				
                jenis_pengadaan_pegawai='".$_POST['jenis_pengadaan_pegawai']."',
				mutasi='".$file_mutasi."' WHERE id_mutasi='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
			$sql_ubah = "UPDATE riwayat_mutasi_cpns_ke_pns SET
			nik='".$_POST['nik']."',
			nama='".$_POST['nama']."',
			tmt_cpns='".$_POST['tmt_cpns']."',
			nomor_sk_cpns='".$_POST['nomor_sk_cpns']."',
			tanggal_sk_cpns='".$_POST['tanggal_sk_cpns']."',
			nomor_bkn_pengangkatan_cpns='".$_POST['nomor_bkn_pengangkatan_cpns']."',
			tmt_pns='".$_POST['tmt_pns']."',
			nomor_sk_pns='".$_POST['nomor_sk_pns']."',
			tanggal_sk_pns='".$_POST['tanggal_sk_pns']."',
			nomor_sttpl_diklat_pra_jabatan='".$_POST['nomor_sttpl_diklat_pra_jabatan']."',
			tanggal_sttpl_diklat_pra_jabatan='".$_POST['tanggal_sttpl_diklat_pra_jabatan']."',
			nomor_surat_keterangan_sehat='".$_POST['nomor_surat_keterangan_sehat']."',
			tanggal_surat_keterangan_sehat='".$_POST['tanggal_surat_keterangan_sehat']."',
			
			jenis_pengadaan_pegawai='".$_POST['jenis_pengadaan_pegawai']."',
			mutasi='".$file_mutasi."'
			WHERE id_mutasi='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-mutasi&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-mutasi&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


