<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_kenaikan_gaji_berkala WHERE id_gaji='".$_GET['kode']."'";
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
					<input type="text" class="form-control" id="nama" name="nama_lengkap" value="<?php echo $_GET['nama']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_kgb" name="tmt_kgb" value="<?php echo $data_cek['tmt_kgb']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nomor Sk</label>
				<div class="col-sm-5">
				<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" value="<?php echo $data_cek['nomor_sk']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Sk Kgb</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk_kgb" name="tanggal_sk_kgb" value="<?php echo $data_cek['tanggal_sk_kgb']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kenaikan</label>
				<div class="col-sm-5">
					<select name="jenis_kenaikan" id="jenis_kenaikan" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['jenis_kenaikan'] == "kenaikan pangkat") echo "<option value='kenaikan pangkat' selected>kenaikan pangkat</option>";
                else echo "<option value='kenaikan pangkat'>kenaikan pangkat</option>";

                if ($data_cek['jenis_kenaikan'] == "kgb") echo "<option value='kgb' selected>kgb</option>";
                else echo "<option value='kgb'>kgb</option>";

				if ($data_cek['jenis_kenaikan'] == "penyesuaian tabel gaji pokok") echo "<option value='penyesuaian tabel gaji pokok' selected>Sekretariat Jendral Komisi Pemilihan Umum</option>";
                else echo "<option value='penyesuaian tabel gaji pokok'>penyesuaian tabel gaji pokok</option>";

				if ($data_cek['jenis_kenaikan'] == "sk lain-lain") echo "<option value='sk lain-lain' selected>sk lain-lain</option>";
                else echo "<option value='sk lain-lain'>sk lain-lain</option>";
            			
				if ($data_cek['jenis_kenaikan'] == "cpns") echo "<option value='cpns' selected>cpns</option>";
                else echo "<option value='cpns'>cpns</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan Ruang</label>
				<div class="col-sm-4">
					<select name="golongan_ruang" id="golongan_ruang" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['golongan_ruang'] == "I/a") echo "<option value='I/a' selected>I/a</option>";
                else echo "<option value='I/a'>I/a</option>";

                if ($data_cek['golongan_ruang'] == "I/b") echo "<option value='I/b' selected>I/b</option>";
                else echo "<option value='I/b'>I/b</option>";

				if ($data_cek['golongan_ruang'] == "I/c") echo "<option value='I/c' selected>I/c</option>";
                else echo "<option value='I/c'>I/c</option>";

				if ($data_cek['golongan_ruang'] == "I/d") echo "<option value='I/d' selected>I/d</option>";
                else echo "<option value='I/d'>I/d</option>";

				if ($data_cek['golongan_ruang'] == "II/a") echo "<option value='II/a' selected>II/a</option>";
                else echo "<option value='II/a'>II/a</option>";

                if ($data_cek['golongan_ruang'] == "II/b") echo "<option value='II/b' selected>II/b</option>";
                else echo "<option value='II/b'>II/b</option>";

				if ($data_cek['golongan_ruang'] == "II/c") echo "<option value='II/c' selected>II/c</option>";
                else echo "<option value='I/c'>I/c</option>";

				if ($data_cek['golongan_ruang'] == "II/d") echo "<option value='II/d' selected>II/d</option>";
                else echo "<option value='II/d'>II/d</option>";

				if ($data_cek['golongan_ruang'] == "II/e") echo "<option value='II/e' selected>II/e</option>";
                else echo "<option value='II/e'>II/e</option>";

				if ($data_cek['golongan_ruang'] == "III/a") echo "<option value='III/a' selected>III/a</option>";
                else echo "<option value='III/a'>III/a</option>";
				
				if ($data_cek['golongan_ruang'] == "III/b") echo "<option value='III/b' selected>III/b</option>";
                else echo "<option value='III/b'>III/b</option>";

				if ($data_cek['golongan_ruang'] == "III/c") echo "<option value='III/c' selected>III/c</option>";
                else echo "<option value='III/c'>III/cr</option>";

				if ($data_cek['golongan_ruang'] == "III/d") echo "<option value='III/d' selected>III/d</option>";
                else echo "<option value='III/d'>III/d</option>";

				if ($data_cek['golongan_ruang'] == "IV/a") echo "<option value='IV/a' selected>IV/a</option>";
                else echo "<option value='IV/a'>IV/a</option>";

				if ($data_cek['golongan_ruang'] == "IV/b") echo "<option value='IV/b' selected>IV/b</option>";
                else echo "<option value='IV/b'>IV/b</option>";

				if ($data_cek['golongan_ruang'] == "IV/c") echo "<option value='IV/c' selected>IV/c</option>";
                else echo "<option value='IV/c'>IV/c/option>";

				if ($data_cek['golongan_ruang'] == "IV/d") echo "<option value='IV/d' selected>IV/d</option>";
                else echo "<option value='IV/d'>IV/d</option>";

				if ($data_cek['golongan_ruang'] == "IV/e") echo "<option value='IV/e' selected>IV/e</option>";
                else echo "<option value='IV/e'>IV/e</option>";

            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Kerja Tahun</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="masa_kerja_tahun" name="masa_kerja_tahun" value="<?php echo $data_cek['masa_kerja_tahun']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Masa Kerja Bulan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control"id="masa_kerja_bulan" name="masa_kerja_bulan" value="<?php echo $data_cek['masa_kerja_bulan']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gaji</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="gaji" name="gaji" value="<?php echo $data_cek['gaji']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Spesimen Pejabat</label>
				<div class="col-sm-5">
				<input type="text" class="form-control" id="spesimen_pejabat" name="spesimen_pejabat" value="<?php echo $data_cek['spesimen_pejabat']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="sp/<?php echo $data_cek['sp']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="sp" name="sp">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-gaji&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['sp']['tmp_name'];
	$target = 'sp/';
	$file_sp = @$_FILES['sp']['name'];
	$pindah = move_uploaded_file($sumber, $target.$file_sp);
    if (isset ($_POST['Ubah'])){
		if(!empty($sumber)){
			$sp= $data_cek['sp'];
            if (file_exists("sp/$sp")){
            unlink("sp/$sp");}
        
            $sql_ubah = "UPDATE riwayat_kenaikan_gaji_berkala SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama_lengkap']."',
                golongan_ruang='".$_POST['golongan_ruang']."',
				tmt_kgb='".$_POST['tmt_kgb']."',
				masa_kerja_tahun='".$_POST['masa_kerja_tahun']."',
				masa_kerja_bulan='".$_POST['masa_kerja_bulan']."',
				nomor_sk='".$_POST['nomor_sk']."',
				tanggal_sk_kgb='".$_POST['tanggal_sk_kgb']."',
                jenis_kenaikan='".$_POST['jenis_kenaikan']."',
				gaji='".$_POST['gaji']."',
				spesimen_pejabat='".$_POST['spesimen_pejabat']."',
				sp='".$file_sp."'
				WHERE id_gaji='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
			$sql_ubah = "UPDATE riwayat_kenaikan_gaji_berkala SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama_lengkap']."',
                golongan_ruang='".$_POST['golongan_ruang']."',
				tmt_kgb='".$_POST['tmt_kgb']."',
				masa_kerja_tahun='".$_POST['masa_kerja_tahun']."',
				masa_kerja_bulan='".$_POST['masa_kerja_bulan']."',
				nomor_sk='".$_POST['nomor_sk']."',
				tanggal_sk_kgb='".$_POST['tanggal_sk_kgb']."',
				jenis_kenaikan='".$_POST['jenis_kenaikan']."',
				gaji='".$_POST['gaji']."',
				spesimen_pejabat='".$_POST['spesimen_pejabat']."',
				sp='".$file_sp."'
			    WHERE id_gaji='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-gaji&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-gaji&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}
?>
