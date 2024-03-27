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
				<label class="col-sm-2 col-form-label">Jenis Hukuman</label>
				<div class="col-sm-5">
				<select class="form-control" name="jenis_hukuman" id="jenis_hukuman" data-error="Jenis Hukuman Disiplin Wajib Dipilih" required="" fdprocessedid="9nq7st">
					<?php 
					  $sql = $koneksi->query("SELECT * from ref_tingkat_hukuman");
					  while ($data= $sql->fetch_assoc()) { ?>
                                  <optgroup label=<?php echo $data['tingkat_hukuman'] ?>>
					<?php 
					$id_tingkat_hukuman = $data['id_tingkat_hukuman'];
					  $sql2 = $koneksi->query("SELECT * from ref_jenis_hukuman WHERE id_tingkat_hukuman = '$id_tingkat_hukuman'");
					  while ($datajenis= $sql2->fetch_assoc()) { ?>
							<option value=<?php echo $datajenis['id_jenis_hukuman'] ?>><?php echo $datajenis['jenis_hukuman'] ?></option>
							<?php }?>
                                  </optgroup>
								  <?php }?>
                              </select>
				</div>
			</div>
			<!-- <optgroup label="RINGAN">
                                      <option>Teguran Lisan</option>
                                      <option>Teguran Tertulis</option>
                                      <option>Pernyataan Tidak Puas Secara Tertulis</option>
                                  </optgroup>
                                  <optgroup label="SEDANG">
                                      <option>Penundaan Kenaikan Gaji Berkala Selama 1 (satu) Tahun</option>
                                      <option>Penundaan Kenaikan Pangkat Selama 1 (satu) Tahun</option>
                                      <option>Penurunan Pangkat Setingkat Lebih Rendah Selama 1 (satu) Tahun</option>
                                  </optgroup>
                                  <optgroup label="BERAT">
                                      <option>Penurunan Pangkat Setingkat Lebih Rendah Selama 3 (tiga) Tahun</option>
                                      <option>Pemindahan Dalam Rangka Penurunan Jabatan Setingkat Lebih Rendah</option>
                                      <option>Pembebasan Dari Jabatan</option>
                                      <option>Pemberhentian Dengan Hormat Tidak Atas Permintaan Sendiri Sebagai PNS</option>
                                      <option>Pemberhentian Tidak Dengan Hormat Sebagai PNS</option>
                                  </optgroup> -->
			

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Sk Hukuman</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="Nomor SK Hukuman" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK Hukuman</label>
				<div class="col-sm-5">
                <input type="date" class="form-control" id="tanggal_sk_hukuman" name="tanggal_sk_hukuman" placeholder="Tanggal SK Hukuman" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT HD</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_awal_hukuman_disiplin" name="tmt_awal_hukuman_disiplin" placeholder="Tamat Awal Hukuman" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Tahun</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="lama_hukuman_tahun" name="lama_hukuman_tahun" placeholder="Hukuman Tahun" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Bulan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="lama_hukuman_bulan" name="lama_hukuman_bulan" placeholder="Hukuman Bulan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Akhir Hukuman</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_akhir_hukuman_disiplin" name="tmt_akhir_hukuman_disiplin" placeholder="Tamat Akhir Hukuman" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Dasar Hukuman Disiplin</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="dasar_hukum_disiplin" name="dasar_hukum_disiplin" placeholder="Dasar Hukuman" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Hukuman Disiplin</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="deskripsi_hukuman_disiplin" name="deskripsi_hukuman_disiplin" placeholder="Deskripsi Hukuman" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alasan Hukuman Disiplin</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alasan_hukum_disiplin" name="alasan_hukum_disiplin" placeholder="Alasan Hukuman" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="hd" name="hd">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-disiplin&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['hd']['tmp_name'];
$target = 'hd/';
$file_hd = @$_FILES['hd']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_hd);
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
        $sql_simpan = "INSERT INTO riwayat_hukuman_disiplin (nik, nama, id_jenis_hukuman, nomor_sk, tanggal_sk_hukuman, tmt_awal_hukuman_disiplin, lama_hukuman_tahun, lama_hukuman_bulan, tmt_akhir_hukuman_disiplin, dasar_hukum_disiplin, alasan_hukum_disiplin, deskripsi_hukuman_disiplin, hd ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['jenis_hukuman']."',
			'".$_POST['nomor_sk']."',
			'".$_POST['tanggal_sk_hukuman']."',
			'".$_POST['tmt_awal_hukuman_disiplin']."',
			'".$_POST['lama_hukuman_tahun']."',
			'".$_POST['lama_hukuman_bulan']."',
			'".$_POST['tmt_akhir_hukuman_disiplin']."',
            '".$_POST['dasar_hukum_disiplin']."',  
			'".$_POST['alasan_hukum_disiplin']."',  
			'".$_POST['deskripsi_hukuman_disiplin']."',
			'".$file_hd."')";

        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-disiplin&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-disiplin&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-disiplin';
		}
	})</script>";
}
}
     //selesai proses simpan data