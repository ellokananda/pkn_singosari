<div class="card card-info">
	<div class="card-header"style="background-color : #455A64;">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Riwayat Pegawai</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive" id="printableTable">
			<div>
				<a href="?page=add-pegawai" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
					<button class="btn btn-warning" onclick="window.print()">
					<i class="fa fa-edit"></i> Print
					</button>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>JK</th>
						<th>Eselon</th>
						<th>Pangkat</th>
						<th>Nama Jabatan</th>
						<th>Nama Satker</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from daftar_pegawai WHERE nik != ".$_SESSION['ses_nik']);
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						
						<td>
							<?php echo $data['nip']; ?>
						</td>
						<td>
							<?php echo $data['nama_lengkap']; ?>
						</td>
						<td>
							<?php echo $data['jenis_kelamin'];?>
						</td>
						<td>
							<?php echo $data['eselon'];?>
						</td>
						<td>
							<?php echo $data['pangkat_terakhir']; ?>
						</td>
						<td>
							<?php echo $data['jabatan_terakhir']; ?>
						</td>
						<td>
							<?php echo $data['satker']; ?>
						</td>

						<td style="display:flex;flex-direction:column">
						<!-- button 1 -->
							<div>
								<a href="?page=view-pegawai&kode=<?php echo $data['nik']; ?>" title="Detail"
								class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
						</a>
						<a href="?page=edit-pegawai&kode=<?php echo $data['nik']; ?>" title="Ubah" class="btn btn-success btn-sm">
							<i class="fa fa-edit"></i>
						</a>
						<a href="?page=del-pegawai&kode=<?php echo $data['nik']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
						title="Hapus" class="btn btn-danger btn-sm">
						<i class="fa fa-trash"></i>
						  </a>
						</div>
						<!-- button 2 -->
					
						<div style="margin-top:16px;">
							

					</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->