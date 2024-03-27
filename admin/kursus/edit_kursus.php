<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM riwayat_kursus WHERE id_kursus='".$_GET['kode']."'";
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
				<label class="col-sm-2 col-form-label">Jenis Kursus</label>
				<div class="col-sm-4">
					<select name="jenis_kursus" id="jenis_kursus" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['jenis_kursus'] == "diklat fungsional") echo "<option value='diklat fungsional' selected>diklat fungsional</option>";
                else echo "<option value='diklat fungsional'>diklat fungsional</option>";

				if ($data_cek['jenis_kursus'] == "diklat teknis") echo "<option value='diklat teknis' selected>diklat teknis</option>";
                else echo "<option value='diklat teknis'>diklat teknis</option>";

				if ($data_cek['jenis_kursus'] == "workshop") echo "<option value='workshop' selected>workshop</option>";
                else echo "<option value='workshop'>workshop</option>";

				if ($data_cek['jenis_kursus'] == "pelatihan manajerial") echo "<option value='pelatihan manajerial' selected>pelatihan manajerial</option>";
                else echo "<option value='pelatihan manajerial'>pelatihan manajerial</option>";

				if ($data_cek['jenis_kursus'] == "pelatihan sosial kultural") echo "<option value='pelatihan sosial kultural' selected>pelatihan sosial kultural</option>";
                else echo "<option value='pelatihan sosial kultural'>pelatihan sosial kultural</option>";

				if ($data_cek['jenis_kursus'] == "sosialisasi") echo "<option value='sosialisasi' selected>sosialisasi</option>";
                else echo "<option value='sosialisasi'>sosialisasi</option>";

				if ($data_cek['jenis_kursus'] == "bimbingan_teknis") echo "<option value='bimbingan_teknis' selected>bimbingan_teknis</option>";
                else echo "<option value='bimbingan_teknis'>bimbingan_teknis</option>";

				if ($data_cek['jenis_kursus'] == "seminar") echo "<option value='seminar' selected>seminar</option>";
                else echo "<option value='seminar'>seminar</option>";

				if ($data_cek['jenis_kursus'] == "magang") echo "<option value='magang' selected>magang</option>";
                else echo "<option value='magang'>magang</option>";

				if ($data_cek['jenis_kursus'] == "kursus") echo "<option value='kursus' selected>kursus</option>";
                else echo "<option value='kursus'>kursus</option>";
            			
				if ($data_cek['jenis_kursus'] == "penataran") echo "<option value='penataran' selected>penataran</option>";
                else echo "<option value='penataran'>penataran</option>";

				if ($data_cek['jenis_kursus'] == "pengembangan kompetensi") echo "<option value='pengembangan kompetensi' selected>pengembangan kompetensi</option>";
                else echo "<option value='pengembangan kompetensi'>pengembangan kompetensi</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-radio">Nama Kursus</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nama_kursus" name="nama_kursus" value="<?php echo $data_cek['nama_kursus']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-radio">Jumlah Jam Diklat</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="jumlah_jam" name="jumlah_jam" value="<?php echo $data_cek['jumlah_jam']; ?>"	/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Pelaksanaan Kursus</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tgl_kursus" name="tgl_kursus" value="<?php echo $data_cek['tgl_kursus']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Selesai Kursus</label>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tgl_selesai_kursus" name="tgl_selesai_kursus" value="<?php echo $data_cek['tgl_selesai_kursus']; ?>"
					/>
				</div>
			</div>
		
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sertifikat</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="no_sertif" name="no_sertif" value="<?php echo $data_cek['no_sertif']; ?>"	/>
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
					<input type="text" class="form-control" id="instansi" name="instansi" value="<?php echo $data_cek['instansi']; ?>"	/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">File SK</label>
				<div class="col-sm-6">
					<img src="course/<?php echo $data_cek['course']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Dokumen</label>
				<div class="col-sm-6">
					<input type="file" id="course" name="course">
					<p class="help-block">
						<font color="red">"Format file PNG/JPG"</font>
					</p>
				</div>
			</div>


		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-kursus&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['course']['tmp_name'];
	$target = 'course/';
	$file_course = @$_FILES['course']['name'];
	$pindah = move_uploaded_file($sumber, $target.$file_course);
    if (isset ($_POST['Ubah'])){
        if(!empty($sumber)){
			$course= $data_cek['course'];
            if (file_exists("course/$course")){
            unlink("course/$course");}
            $sql_ubah = "UPDATE riwayat_kursus SET
				nik='".$_POST['nik']."',
				nama='".$_POST['nama']."',
                jenis_kursus='".$_POST['jenis_kursus']."',
                nama_kursus='".$_POST['nama_kursus']."',
                jumlah_jam='".$_POST['jumlah_jam']."',
                tgl_kursus='".$_POST['tgl_kursus']."',
				tgl_selesai_kursus='".$_POST['tgl_selesai_kursus']."',
                no_sertif='".$_POST['no_sertif']."',
                instansi='".$_POST['instansi']."',
				course='".$file_course."' WHERE id_kursus='".$_GET['kode']."'";
            $query_ubah = mysqli_query($koneksi, $sql_ubah);
    
        }elseif(empty($sumber)){
            $sql_ubah = "UPDATE riwayat_kursus SET
                jenis_kursus='".$_POST['jenis_kursus']."',
                nama_kursus='".$_POST['nama_kursus']."',
                jumlah_jam='".$_POST['jumlah_jam']."',
                tgl_kursus='".$_POST['tgl_kursus']."',
				tgl_selesai_kursus='".$_POST['tgl_selesai_kursus']."',
                no_sertif='".$_POST['no_sertif']."',
                instansi='".$_POST['instansi']."',
				course='".$file_course."' WHERE id_kursus='".$_GET['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
            }
    
			$nik = $_GET['nik'];
			$nama = $_GET['nama'];
    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-kursus&nik=$nik&nama=$nama';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-kursus&nik=$nik&nama=$nama';
            }
        })</script>";
    }
}


