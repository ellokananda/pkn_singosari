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
				<label class="col-sm-2 col-form-label">TMT</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt_kgb" name="tmt_kgb" placeholder="Tamat Kgb" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nomor Sk</label>
				<div class="col-sm-5">
				<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="Nomor Sk" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Sk Kgb</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tanggal_sk_kgb" name="tanggal_sk_kgb" placeholder="Tanggal Sk kgb" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kenaikan</label>
				<div class="col-sm-5">
					<select name="jenis_kenaikan" id="jenis_kenaikan" class="form-control">
					<option value="kenaikan pangkat">Kenaikan Pangkat</option>
                    <option value="kgb">KGB</option>
                    <option value="penyesuaian tabel gaji pokok">Penyesuaian Tabel Gaji Pokok</option>
                    <option value="sk lain-lain">SK Lain-lain</option>
                    <option value="cpns">CPNS</option>
						</select>
				</div>
			</div> 

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan Ruang</label>
				<div class="col-sm-5">
					<select name="golongan_ruang" id="golongan_ruang" class="form-control">
					<option value="I/a">I/a</option>
                    <option value="I/b">I/b</option>
                    <option value="I/c">I/c</option>
                    <option value="I/d">I/d</option>
                    <option value="II/a">II/a</option>
                    <option value="II/b">II/b</option>
                    <option value="II/c">II/c</option>
                    <option value="II/d">II/d</option>
                    <option value="II/e">II/e</option>
                    <option value="III/a">III/a</option>
                    <option value="III/b">III/b</option>
                    <option value="III/c">III/c</option>
                    <option value="III/d">III/d</option>
                    <option value="IV/a">IV/a</option>
                    <option value="IV/b">IV/b</option>
                    <option value="IV/c">IV/c</option>
                    <option value="IV/d">IV/d</option>
                    <option value="IV/e">IV/e</option>
						</select>
				</div>
			</div> 

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Kerja Tahun</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="masa_kerja_tahun" name="masa_kerja_tahun" placeholder="Masa Kerja Tahun" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Masa Kerja Bulan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control"id="masa_kerja_bulan" name="masa_kerja_bulan" placeholder="Masa Kerja Bulan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gaji</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="gaji" name="gaji" placeholder="Gaji" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Spesimen Pejabat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="spesimen_pejabat" name="spesimen_pejabat" placeholder="Spesimen Pejabat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Upload Dokumen SK</label>
				<div class="col-sm-6">
					<input type="file" id="sp" name="sp">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>

			<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-gaji&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
	</div>

<?php
$sumber = @$_FILES['sp']['tmp_name'];
$target = 'sp/';
$file_sp = @$_FILES['sp']['name'];
$pindah = move_uploaded_file($sumber, $target.$file_sp);
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
        $sql_simpan = "INSERT INTO riwayat_kenaikan_gaji_berkala (nik, nama, golongan_ruang, tmt_kgb, masa_kerja_tahun, masa_kerja_bulan, nomor_sk, 
		tanggal_sk_kgb, jenis_kenaikan, gaji, spesimen_pejabat, sp  ) VALUES (
			'".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['golongan_ruang']."',
			'".$_POST['tmt_kgb']."',
			'".$_POST['masa_kerja_tahun']."',
			'".$_POST['masa_kerja_bulan']."',
			'".$_POST['nomor_sk']."',
			'".$_POST['tanggal_sk_kgb']."', 
			'".$_POST['jenis_kenaikan']."',
			'".$_POST['gaji']."',
			'".$_POST['spesimen_pejabat']."',
			'".$file_sp."')";
			
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-gaji&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-gaji&nik=".$_GET['nik']."&nama=".$_GET['nama']."';
          }
      })</script>";
	}
}
elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, File Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-gaji';
		}
	})</script>";
}
}
     //selesai proses simpan data