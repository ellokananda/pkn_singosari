<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
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
					<input type="date" class="form-control" id="tmt_cpns" name="tmt_cpns" placeholder="Tamat Cpns" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK CPNS</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk_cpns" name="nomor_sk_cpns" placeholder="Nomor SK Cpns" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK Cpns</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk_cpns" name="tanggal_sk_cpns" placeholder="Tanggal Sk Cpns" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Bukan Pengangkatan CPNS</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_bkn_pengangkatan_cpns" name="nomor_bkn_pengangkatan_cpns" placeholder="Nomor Bukan Pengangkatan cpns" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT PNS</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_pns" name="tmt_pns" placeholder="Tamat Cpns" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor SK PNS</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk_pns" name="nomor_sk_pns" placeholder="Nomor SK Pns" required>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK PNS</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk_pns" name="tanggal_sk_pns" placeholder="Tanggal Sk Pns" required>
				</div>
			</div>

			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Diklat Pra Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sttpl_diklat_pra_jabatan" name="nomor_sttpl_diklat_pra_jabatan" placeholder="Nomor Diklat pra Jabatabn" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Diklat Pra Jabatan</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sttpl_diklat_pra_jabatan" name="tanggal_sttpl_diklat_pra_jabatan" placeholder="Tanggal Diklat Pra Jabatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Surat Sehat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_surat_keterangan_sehat" name="nomor_surat_keterangan_sehat" placeholder="Surat Sehat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Surat Suhat</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_surat_keterangan_sehat" name="tanggal_surat_keterangan_sehat" placeholder="Tanggal Surat Sehat" required>
				</div>
			</div>
<!-- 
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Skck</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_skck" name="nomor_skck" placeholder="Nomor Skck" required>
				</div>
			</div> -->

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Skck</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_skck" name="tanggal_skck" placeholder="Tanggal Skck" required>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Pengaadan Pegawai</label>
				<div class="col-sm-5">
					<select name="jenis_pengadaan_pegawai" id="jenis_pengadaan_pegawai" class="form-control">
						<option>- Pilih -</option>
						<option value="Umum">Umum</option>
						<option value="Tenaga Honorer">Tenanga Honorer</option>
						</select>
				</div>
			</div> 

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="mutasi" name="mutasi">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

			<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-mutasi&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>

<?php
$sumber = @$_FILES['mutasi']['tmp_name'];
$target = 'mutasi/';
$file_mutasi = @$_FILES['mutasi']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_mutasi);
    if (isset ($_POST['Simpan'])){
		$newNip = '';
	if($_POST['nik'] != '') { //kalau nipnya ngga kosong
		$newNip = $_POST['nik'];
	} else {
		$sql_nik = mysqli_query($koneksi,"SELECT CONCAT(DATE_FORMAT(CURDATE(),'%Y'),DATE_FORMAT(CURDATE(),'%m'),DATE_FORMAT(CURDATE(),'%d'),(COUNT(*)+1))  as NIP FROM daftar_pegawai");
		while($row = mysqli_fetch_assoc($sql_nik)) {
			$newNip = $row['NIK'];
		}
	}

	if(!empty($sumber)){
        $sql_simpan = "INSERT INTO riwayat_mutasi_cpns_ke_pns (nik, nama, tmt_cpns, nomor_sk_cpns, tanggal_sk_cpns, nomor_bkn_pengangkatan_cpns, tmt_pns, nomor_sk_pns, tanggal_sk_pns, nomor_sttpl_diklat_pra_jabatan, tanggal_sttpl_diklat_pra_jabatan, nomor_surat_keterangan_sehat, tanggal_surat_keterangan_sehat, jenis_pengadaan_pegawai, mutasi ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['tmt_cpns']."',
			'".$_POST['nomor_sk_cpns']."',
			'".$_POST['tanggal_sk_cpns']."',
			'".$_POST['nomor_bkn_pengangkatan_cpns']."',
			'".$_POST['tmt_pns']."',
			'".$_POST['nomor_sk_pns']."',
			'".$_POST['tanggal_sk_pns']."',
			'".$_POST['nomor_sttpl_diklat_pra_jabatan']."',
			'".$_POST['tanggal_sttpl_diklat_pra_jabatan']."',
			'".$_POST['nomor_surat_keterangan_sehat']."',
			'".$_POST['tanggal_surat_keterangan_sehat']."',
			
			'".$_POST['jenis_pengadaan_pegawai']."',
			'".$file_mutasi."')";
			

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-mutasi&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-mutasi&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-mutasi';
		}
	})</script>";
}
}
     //selesai proses simpan data