<div class="card card-info">
	<div class="card-header"style="background-color : #455A64;">	
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Riwayat Mutasi</h3>
	</div>
	<br>
				<center><h5><?php echo $_GET['nama']; ?></h5>
			<?php echo $_GET['nik']?></center>
	<!-- /.card-header -->
	<div class="card-body">
		
		<div style="display: flex; justify-content: left;">
			<?php if ($_SESSION["ses_level"] == 'Administrator') { ?>
				<div class="dropdown mr-2">
					<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Riwayat Pegawai
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<!-- <a class="dropdown-item"
							href="?page=data-golongan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Golongan</a> -->
						<a class="dropdown-item"
							href="?page=data-jabatan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Jabatan</a>
						<a class="dropdown-item"
							href="?page=data-diklat&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Diklat</a>
						<a class="dropdown-item"
							href="?page=data-tugas&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Tugas Tambahan</a>
						<a class="dropdown-item"
							href="?page=data-pendidikan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Pendidikan</a>
						<a class="dropdown-item"
							href="?page=data-disiplin&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Hukuman Disiplin</a>
						<a class="dropdown-item"
							href="?page=data-mutasi&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Mutasi CPNS ke PNS</a>
						<a class="dropdown-item"
							href="?page=data-gaji&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Kenaikan Gaji Berkala</a>
						<a class="dropdown-item"
							href="?page=data-penilaian&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Penilaian Kinerja</a>
						<a class="dropdown-item"
							href="?page=data-penilaian&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Penghargaan</a>
						<a class="dropdown-item"
							href="?page=data-pangkat&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Pangkat</a>
						<a class="dropdown-item"
							href="?page=data-kursus&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							kursus</a>
						<a class="dropdown-item"
							href="?page=data-satya&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>">Riwayat
							Satya Lencana</a>
					</div>
				</div>
			<?php } ?>
			<a href="?page=add-mutasi&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>"
				class="btn btn-primary mr-2">
				<i class="fa fa-edit"></i> Tambah Data</a>
			<button class="btn btn-warning mr-2" onclick="window.print()">
				<i class="fa fa-edit"></i> Print
			</button>
		</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>	
						<th>TMT CPNS</th>
						<th>No SK CPNS</th>
						<th>Tanggal SK CPNS</th>
						<th>No BKN</th>
						<th>TMT PNS</th>
						<th>No SK PNS</th>
						<th>Tanggal Sk PNS</th>
						<th>No STTPL</th>
						<th>Tanggal STTPL</th>
						<th>No Surat Dokter</th>
						<th>Tanggal SUrat Dokter</th>
						<th>Jenis Pengadaan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  //perlu di perhatikan
			  $sql = $koneksi->query("SELECT * from riwayat_mutasi_cpns_ke_pns a 
			  INNER JOIN daftar_pegawai b ON a.nik=b.nik WHERE a.nik='".$_GET['nik']."'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						
						<td>
							<?php echo $data['tmt_cpns']; ?>
						</td>
						<td>
							<?php echo $data['nomor_sk_cpns']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_sk_cpns']; ?>
						</td>
						<td>
							<?php echo $data['nomor_bkn_pengangkatan_cpns']; ?>
						</td>
						<td>
							<?php echo $data['tmt_pns'];?>
						</td>
						<td>
							<?php echo $data['nomor_sk_pns']; ?>
						</td>
                        <td>
							<?php echo $data['tanggal_sk_pns']; ?>
						</td>
						<td>
							<?php echo $data['nomor_sttpl_diklat_pra_jabatan']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_sttpl_diklat_pra_jabatan']; ?>
						</td>
						<td>
							<?php echo $data['nomor_surat_keterangan_sehat']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_surat_keterangan_sehat']; ?>
						</td>
						<td>
							<?php echo $data['jenis_pengadaan_pegawai']; ?>
						</td>

						<td style="display:flex;flex-direction:column">
						<!-- button 1 -->
							<div>
								<a href="?page=view-mutasi&kode=<?php echo $data['id_mutasi']; ?>" title="Detail"
								class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
						</a>
						<a href="?page=edit-mutasi&kode=<?php echo $data['id_mutasi']; ?>&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Ubah" class="btn btn-success btn-sm">
							<i class="fa fa-edit"></i>
						</a>
						<?php if($_SESSION["ses_level"] == 'Administrator') { ?>

						<a href="?page=del-mutasi&kode=<?php echo $data['id_mutasi']; ?>&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
						title="Hapus" class="btn btn-danger btn-sm">
						<i class="fa fa-trash"></i>
						  </a>
						  <?php } ?>


						</div>

					</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		
	</div>
	<!-- /.card-body -->