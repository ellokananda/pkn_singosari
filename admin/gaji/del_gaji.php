<?php

if(isset($_GET['kode'])){
    $sql_cek = "select * from riwayat_kenaikan_gaji_berkala where id_gaji='".$_GET['kode']."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

 <?php
  $sql_hapus = "DELETE FROM riwayat_kenaikan_gaji_berkala WHERE id_gaji='".$_GET['kode']."'";
  $query_hapus = mysqli_query($koneksi, $sql_hapus);
  $nik = $_GET['nik'];
  $nama = $_GET['nama'];
  if ($query_hapus) {
      echo "<script>
      Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value) {window.location = 'index.php?page=data-gaji&nik=$nik&nama=$nama'
      ;}})</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value) {window.location = 'index.php?page=data-gaji&nik=$nik&nama=$nama'
      ;}})</script>";
      }

   