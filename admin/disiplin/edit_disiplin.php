<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_hukuman_disiplin WHERE id_hukuman='".$_GET['kode']."'";
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
		<input type="hidden" class="form-control" name="id_hukum" value="<?php echo $_GET['kode']; ?>"/>
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
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Sk Hukuman</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" value="<?php echo $data_cek['nomor_sk']; ?>" placeholder="Nomor SK Hukuman" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal SK Hukuman</label>
				<div class="col-sm-5">
                <input type="date" class="form-control" id="tanggal_sk_hukuman" name="tanggal_sk_hukuman" value="<?php echo $data_cek['tanggal_sk_hukuman']; ?>"placeholder="Tanggal SK Hukuman" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT HD</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_awal_hukuman_disiplin" name="tmt_awal_hukuman_disiplin" value="<?php echo $data_cek['tmt_awal_hukuman_disiplin']; ?>placeholder="Tamat Awal Hukuman" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Tahun</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="lama_hukuman_tahun" name="lama_hukuman_tahun" value="<?php echo $data_cek['lama_hukuman_tahun']; ?>"placeholder="Hukuman Tahun" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Bulan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="lama_hukuman_bulan" name="lama_hukuman_bulan" value="<?php echo $data_cek['lama_hukuman_bulan']; ?>"placeholder="Hukuman Bulan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Akhir Hukuman</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_akhir_hukuman_disiplin" name="tmt_akhir_hukuman_disiplin" value="<?php echo $data_cek['tmt_akhir_hukuman_disiplin']; ?>"placeholder="Tamat Akhir Hukuman" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Dasar Hukuman Disiplin</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="dasar_hukum_disiplin" name="dasar_hukum_disiplin" value="<?php echo $data_cek['dasar_hukum_disiplin']; ?>"placeholder="Dasar Hukuman" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Hukuman Disiplin</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="deskripsi_hukuman_disiplin" name="deskripsi_hukuman_disiplin"value="<?php echo $data_cek['deskripsi_hukuman_disiplin']; ?>" placeholder="Deskripsi Hukuman" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alasan Hukuman Disiplin</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alasan_hukum_disiplin" name="alasan_hukum_disiplin" value="<?php echo $data_cek['alasan_hukum_disiplin']; ?>" placeholder="Alasan Hukuman" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="hd/<?php echo $data_cek['hd']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah File</label>
				<div class="col-sm-6">
					<input type="file" id="hd" name="hd">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
			<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-disiplin&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
$sumber = @$_FILES['hd']['tmp_name'];
$target = 'hd/';
$file_hd = @$_FILES['hd']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_hd);
    if (isset ($_POST['Ubah'])){
        if(!empty($sumber)){
			$hd= $data_cek['hd'];
            if (file_exists("hd/$hd")){
            unlink("hd/$hd");}
            $sql_ubah = "UPDATE riwayat_hukuman_disiplin SET
              	nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
				id_jenis_hukuman='".$_POST['jenis_hukuman']."',
                nomor_sk='".$_POST['nomor_sk']."',
                tanggal_sk_hukuman='".$_POST['tanggal_sk_hukuman']."',
                tmt_awal_hukuman_disiplin='".$_POST['tmt_awal_hukuman_disiplin']."',
                lama_hukuman_tahun='".$_POST['lama_hukuman_tahun']."',
                lama_hukuman_bulan='".$_POST['lama_hukuman_bulan']."',
                tmt_akhir_hukuman_disiplin='".$_POST['tmt_akhir_hukuman_disiplin']."',
                dasar_hukum_disiplin='".$_POST['dasar_hukum_disiplin']."',
				alasan_hukum_disiplin='".$_POST['alasan_hukum_disiplin']."',
                deskripsi_hukuman_disiplin='".$_POST['deskripsi_hukuman_disiplin']."',
				hd='".$file_hd."' WHERE id_hukuman='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_hukuman_disiplin SET
				id_jenis_hukuman='".$_POST['jenis_hukuman']."',
                nomor_sk='".$_POST['nomor_sk']."',
                tanggal_sk_hukuman='".$_POST['tanggal_sk_hukuman']."',
				tmt_awal_hukuman_disiplin='".$_POST['tmt_awal_hukuman_disiplin']."',
                lama_hukuman_tahun='".$_POST['lama_hukuman_tahun']."',
                lama_hukuman_bulan='".$_POST['lama_hukuman_bulan']."',
                tmt_akhir_hukuman_disiplin='".$_POST['tmt_akhir_hukuman_disiplin']."',
                dasar_hukum_disiplin='".$_POST['dasar_hukum_disiplin']."',
                deskripsi_hukuman_disiplin='".$_POST['deskripsi_hukuman_disiplin']."',
				hd='".$file_hd."'
                WHERE id_hukuman='".$_GET['kode']."'";
       		 $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-disiplin&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-disiplin&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}
?>


