<div class="card card-info">
	<div class="card-header"style="background-color : #455A64;">	
		<h3 class="card-title">
			<i class="fa fa-table"></i> Profil Perusahaan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama Perusahaan</th>
						<th>Alamat</th>
						<th>Nomor Telepon</th>
						<?php if($_SESSION["ses_level"] == 'Administrator') { ?>	
						<th>Aksi</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from profil");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['nama_profil']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['nomor_telepon']; ?>
						</td>
						<?php if($_SESSION["ses_level"] == 'Administrator') { ?>	
						<td>						
							<a href="?page=edit-profil&kode=<?php echo $data['id_profil']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-wrench"></i>
							</a>
							<?php } ?>
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
	<!-- /.card-body -->