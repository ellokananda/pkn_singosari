<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM profil WHERE id_profil='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Profil</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" name="id_profil" value="<?php echo $data_cek['id_profil']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nama_profil" name="nama_profil" value="<?php echo $data_cek['nama_profil']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Telepon</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $data_cek['nomor_telepon']; ?>"
					/>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-profil" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
	if(!empty($sumber)){
    $sql_ubah = "UPDATE profil SET 
    nama_profil='".$_POST['nama_profil']."', 
    alamat='".$_POST['alamat']."',
	nomor_telepon='".$_POST['nomor_telepon']."' WHERE id_profil='".$_GET['kode']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);

}elseif(empty($sumber)){
	$sql_ubah = "UPDATE profil SET
	nama_profil='".$_POST['nama_profil']."', 
    alamat='".$_POST['alamat']."',
	nomor_telepon='".$_POST['nomor_telepon']."'
	WHERE id_profil='".$_GET['kode']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
}

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-profil';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-profil';
        }
      })</script>";
    }}
	