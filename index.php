<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
    }

    //KONEKSI DB
	include "inc/koneksi.php";
	
	$sql = $koneksi->query("SELECT * from profil");
	while ($data= $sql->fetch_assoc()) {
	
	$nama=$data['nama_profil'];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Pegawai</title>
	<link rel="icon" href="dist/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-green navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>
								<?php echo $nama; ?>
							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<!-- <a href="index.php" class="brand-link">
				<img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> DATA PEGAWAI</span>
			</a> -->

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex" >
					<div class="image">
						<img src="dist/img/logokecamatan.png"  style="object-fit : cover;width : 90px;height : 126px;" class="img elevation-1" style="opacity: .8">
					</div>
					<div class="info" style="margin-top: 30px;">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level=="Administrator"){
						?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>


						<li class="nav-item">
							<a href="?page=data-pegawai" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Pegawai
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=data-profil" class="nav-link">
								<i class="nav-icon far fa fa-flag"></i>
								<p>
									Profil Perusahaan
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=notifikasi" class="nav-link">
							<i class="nav-icon far fa fa-bell"></i>
								<p>
									Notifikasi
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Pengguna Sistem
								</p>
							</a>
						</li>

						<?php
          				} elseif($data_level=="User"){
          				?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</a>
						</li>
							<a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
								<div class="w-100 justify-content-start align-items-center">
									<i class="nav-icon fas fa-history"></i>
									<span class="menu-collapsed  ml-2">Riwayat</span>
									<span class="submenu-icon ml-auto"></span>
								</div>
					</a>
					<!-- Submenu content -->
					<div id='submenu1' class="collapse sidebar-submenu">
						<!-- <a href="?page=data-golongan&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Golongan</span>
						</a> -->
						<a href="?page=data-jabatan&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Jabatan</span>
						</a>
						<a href="?page=data-diklat&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Diklat</span>
						</a>
						<a href="?page=data-tugas&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Tugas Tambahan</span>
						</a>
						<a href="?page=data-pendidikan&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Pendidikan</span>
						</a>
						<a href="?page=data-disiplin&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Hukuman Disiplin</span>
						</a>
						<a href="?page=data-mutasi&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Mutasi CPNS ke PNS</span>
						</a>
						<a href="?page=data-gaji&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Kenaikan Gaji Berkala</span>
						</a>
						<a href="?page=data-penilaian&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Penilaian Kinerja</span>
						</a>
						<a href="?page=data-penghargaan&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Penghargaan </span>
						</a>
						<a href="?page=data-pangkat&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Pangkat</span>
						</a>
						<a href="?page=data-kursus&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Kursus</span>
						</a>
						<a href="?page=data-satya&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="list-group-item list-group-item-action bg-dark text-white">
							<span class="menu-collapsed">Riwayat Satya Lencana</span>
						</a>
					</div>
						<!-- <li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Riwayat
								</p>
								</a>
								<li class="dropdown">
									<ul class="isi-dropdown">
										<li><a href="#">Riwayat Golongan</a></li>
										<li><a href="#">Riwayat Jabatan</a></li>
										<li><a href="#">Riwayat Tugas Tambahan</a></li>
										<li><a href="#">Riwayat Diklat</a></li>
							</ul>
						</li> -->

						<li class="nav-item">
							<a href="?page=data-keluarga&nik=<?php echo $_SESSION['ses_nik']; ?>&nama=<?php echo $_SESSION['ses_nama']; ?>" class="nav-link">
							<i class="nav-icon far fa fa-user-circle"></i>
								<p>
									Data Keluarga
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=notifikasi" class="nav-link">
							<i class="nav-icon far fa fa-bell"></i>
								<p>
									Notifikasi
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=data-profil" class="nav-link">
								<i class="nav-icon far fa fa-flag"></i>
								<p>
									Profil Perusahaan
								</p>
							</a>
						</li>


						<?php
							}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              	case 'admin':
                  include "home/admin.php";
                  break;

				case 'user':
                  include "home/user.php";
				  break;

				//Golongan
				case 'data-golongan':
					include "admin/golongan/data_golongan.php";
					break;
				case 'add-golongan':
					include "admin/golongan/add_golongan.php";
					break;
				case 'edit-golongan':
					include "admin/golongan/edit_golongan.php";	
					break;
				case 'del-golongan':
					include "admin/golongan/del_golongan.php";
					break;
				case 'view-golongan':
					include "admin/golongan/view_golongan.php";
					break;
				case 'cetak-golongan': 
					include "admin/golongan/cetak_golongan.php";
					break;
	

				//Pengguna
				case 'data-pengguna':
					include "admin/pengguna/data_pengguna.php";
					break;
				case 'add-pengguna':
					include "admin/pengguna/add_pengguna.php";
					break;
				case 'edit-pengguna':
					include "admin/pengguna/edit_pengguna.php";
					break;
				case 'del-pengguna':
					include "admin/pengguna/del_pengguna.php";
					break;

				//pegawai
				case 'data-pegawai':
					include "admin/pegawai/data_pegawai.php";
					break;
				case 'add-pegawai':
					include "admin/pegawai/add_pegawai.php";
					break;
				case 'edit-pegawai':
					include "admin/pegawai/edit_pegawai.php";
					break;
				case 'del-pegawai':
					include "admin/pegawai/del_pegawai.php";
					break;
				case 'view-pegawai':
					include "admin/pegawai/view_pegawai.php";
					break;
				case 'cetak-pegawai': 
					include "admin/pegawai/cetak_pegawai.php";
					break;
				
				//jabatan
				case 'data-jabatan':
					include "admin/jabatan/data_jabatan.php";
					break;
				case 'add-jabatan':
					include "admin/jabatan/add_jabatan.php";
					break;
				case 'edit-jabatan':
					include "admin/jabatan/edit_jabatan.php";
					break;
				case 'del-jabatan':
					include "admin/jabatan/del_jabatan.php";
					break;
				case 'view-jabatan':
					include "admin/jabatan/view_jabatan.php";
					break;
				case 'cetak-jabatan': 
					include "admin/jabatan/cetak_jabatan.php";
					break;

						//diklat
				case 'data-diklat':
					include "admin/diklat/data_diklat.php";
					break;
				case 'add-diklat':
					include "admin/diklat/add_diklat.php";
					break;
				case 'edit-diklat':
					include "admin/diklat/edit_diklat.php";
					break;
				case 'del-diklat':
					include "admin/diklat/del_diklat.php";
					break;
				case 'view-diklat':
					include "admin/diklat/view_diklat.php";
					break;
				case 'cetak-diklat': 
					include "admin/diklat/cetak_diklat.php";
					break;

					//tugas
				case 'data-tugas':
					include "admin/tugas/data_tugas.php";
					break;
				case 'add-tugas':
					include "admin/tugas/add_tugas.php";
					break;
				case 'edit-tugas':
					include "admin/tugas/edit_tugas.php";
					break;
				case 'del-tugas':
					include "admin/tugas/del_tugas.php";
					break;
				case 'view-tugas':
					include "admin/tugas/view_tugas.php";
					break;
				case 'cetak-tugas': 
					include "admin/tugas/cetak_tugas.php";
					break;

							//pendidikan
				case 'data-pendidikan':
					include "admin/pendidikan/data_pendidikan.php";
					break;
				case 'add-pendidikan':
					include "admin/pendidikan/add_pendidikan.php";
					break;
				case 'edit-pendidikan':
					include "admin/pendidikan/edit_pendidikan.php";
					break;
				case 'del-pendidikan':
					include "admin/pendidikan/del_pendidikan.php";
					break;
				case 'view-pendidikan':
					include "admin/pendidikan/view_pendidikan.php";
					break;
				case 'cetak-pendidikan': 
					include "admin/pendidikan/cetak_pendidikan.php";
					break;

				//disiplin hukum
				case 'data-disiplin':
					include "admin/disiplin/data_disiplin.php";
					break;
				case 'add-disiplin':
					include "admin/disiplin/add_disiplin.php";
					break;
				case 'edit-disiplin':
					include "admin/disiplin/edit_disiplin.php";
					break;
				case 'del-disiplin':
					include "admin/disiplin/del_disiplin.php";
					break;
				case 'view-disiplin':
					include "admin/disiplin/view_disiplin.php";
					break;
				case 'cetak-disiplin': 
					include "admin/disiplin/cetak_disiplin.php";
					break;

						// Mutasi
				case 'data-mutasi':
					include "admin/mutasi/data_mutasi.php";
					break;
				case 'add-mutasi':
					include "admin/mutasi/add_mutasi.php";
					break;
				case 'edit-mutasi':
					include "admin/mutasi/edit_mutasi.php";
					break;
				case 'del-mutasi':
					include "admin/mutasi/del_mutasi.php";
					break;
				case 'view-mutasi':
					include "admin/mutasi/view_mutasi.php";
					break;
				case 'cetak-mutasi': 
					include "admin/mutasi/cetak_mutasi.php";
					break;

					//satya lencana
					case 'data-satya':
						include "admin/satya/data_satya.php";
						break;
					case 'add-satya':
						include "admin/satya/add_satya.php";
						break;
					case 'edit-satya':
						include "admin/satya/edit_satya.php";
						break;
					case 'del-satya':
						include "admin/satya/del_satya.php";
						break;
					case 'view-satya':
						include "admin/satya/view_satya.php";
						break;
					case 'cetak-satya': 
						include "admin/satya/cetak_satya.php";
						break;

						//kenaikan gaji
				case 'data-gaji':
					include "admin/gaji/data_gaji.php";
					break;
				case 'add-gaji':
					include "admin/gaji/add_gaji.php";
					break;
				case 'edit-gaji':
					include "admin/gaji/edit_gaji.php";
					break;
				case 'del-gaji':
					include "admin/gaji/del_gaji.php";
					break;
				case 'view-gaji':
					include "admin/gaji/view_gaji.php";
					break;
				case 'cetak-gaji': 
					include "admin/gaji/cetak_gaji.php";
					break;

					//penghargaan
				case 'data-penghargaan':
					include "admin/penghargaan/data_penghargaan.php";
					break;
				case 'add-penghargaan':
					include "admin/penghargaan/add_penghargaan.php";
					break;
				case 'edit-penghargaan':
					include "admin/penghargaan/edit_penghargaan.php";
					break;
				case 'del-penghargaan':
					include "admin/penghargaan/del_penghargaan.php";
					break;
				case 'view-penghargaan':
					include "admin/penghargaan/view_penghargaan.php";
					break;
				case 'cetak-penghargaan': 
					include "admin/penghargaan/cetak_penghargaan.php";
					break;
				

					// penilaian
				case 'data-penilaian':
					include "admin/penilaian/data_penilaian.php";
					break;
				case 'add-penilaian':
					include "admin/penilaian/add_penilaian.php";
					break;
				case 'edit-penilaian':
					include "admin/penilaian/edit_penilaian.php";
					break;
				case 'del-penilaian':
					include "admin/penilaian/del_penilaian.php";
					break;
				case 'view-penilaian':
					include "admin/penilaian/view_penilaian.php";
					break;	
				case 'cetak-penilaian': 
					include "admin/penilaian/cetak_penilaian.php";
					break;

						// pangkat
				case 'data-pangkat':
					include "admin/pangkat/data_pangkat.php";
					break;
				case 'add-pangkat':
					include "admin/pangkat/add_pangkat.php";
					break;
				case 'edit-pangkat':
					include "admin/pangkat/edit_pangkat.php";
					break;
				case 'del-pangkat':
					include "admin/pangkat/del_pangkat.php";
					break;
				case 'view-pangkat':
					include "admin/pangkat/view_pangkat.php";
					break;	
				case 'cetak-pangkat': 
					include "admin/pangkat/cetak_pangkat.php";
					break;

						// kursus
				case 'data-kursus':
					include "admin/kursus/data_kursus.php";
					break;
				case 'add-kursus':
					include "admin/kursus/add_kursus.php";
					break;
				case 'edit-kursus':
					include "admin/kursus/edit_kursus.php";
					break;
				case 'del-kursus':
					include "admin/kursus/del_kursus.php";
					break;
				case 'view-kursus':
					include "admin/kursus/view_kursus.php";
					break;	
				case 'cetak-kursus': 
					include "admin/kursus/cetak_kursus.php";
					break;

					// keluarga
				case 'data-keluarga':
					include "admin/keluarga/data_keluarga.php";
					break;
				case 'add-keluarga':
					include "admin/keluarga/add_keluarga.php";
					break;
				case 'edit-keluarga':
					include "admin/keluarga/edit_keluarga.php";
					break;
				case 'del-keluarga':
					include "admin/keluarga/del_keluarga.php";
					break;
				case 'view-keluarga':
					include "admin/keluarga/view_keluarga.php";
					break;
				case 'cetak-keluarga': 
					include "admin/keluarga/cetak_keluarga.php";
					break;	
					

				//Profil
				case 'data-profil':
					include "admin/profil/data_profil.php";
					break;
					case 'edit-profil':
						include "admin/profil/edit_profil.php";
						break;
						
				//Notifikasi
				case 'notifikasi':
					include "admin/notifikasi/data_notifikasi.php";
					break;
			
              //default
              default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
          elseif($data_level=="User"){
              include "home/user.php";
              }
          }
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- <footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="https://www.youtube.com/channel/UCDxjOzW7F0JOkltlXT6g7AQ">
					<strong> elseif software house</strong>
				</a>
				All rights reserved.
			</div>
			<b>Created 2020</b>
		</footer> -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->

	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$('#body-row .collapse').collapse('hide'); 

		// Collapse/Expand icon
		$('#collapse-icon').addClass('fa-angle-double-left'); 

		// Collapse click
		$('[data-toggle=sidebar-colapse]').click(function() {
			SidebarCollapse();
		});

		function SidebarCollapse () {
			$('.menu-collapsed').toggleClass('d-none');
			$('.sidebar-submenu').toggleClass('d-none');
			$('.submenu-icon').toggleClass('d-none');
			$('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
			
			// Treating d-flex/d-none on separators with title
			var SeparatorTitle = $('.sidebar-separator-title');
			if ( SeparatorTitle.hasClass('d-flex') ) {
				SeparatorTitle.removeClass('d-flex');
			} else {
				SeparatorTitle.addClass('d-flex');
			}
			
			// Collapse/Expand icon
			$('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
		}

		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>