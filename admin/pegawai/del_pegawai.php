<?php

if(isset($_GET['kode'])){
    $sql_cek = "select * from daftar_pegawai where nik='".$_GET['kode']."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>
<?php
    $foto= $data_cek['foto'];
    if (file_exists("foto/$foto")){
        unlink("foto/$foto");
    }
    ?>

 <?php
  $sql_hapus = "DELETE FROM daftar_pegawai WHERE nik='".$_GET['kode']."'";
  $query_hapus = mysqli_query($koneksi, $sql_hapus);
  if ($query_hapus) {
      echo "<script>
      Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value) {window.location = 'index.php?page=data-pegawai'
      ;}})</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value) {window.location = 'index.php?page=data-pegawai'
      ;}})</script>";
      }
?>


  