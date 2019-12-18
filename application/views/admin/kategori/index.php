		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					ㅤㅤ
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url('admin/home') ?>"><i class="fa fa-clipboard"></i> Master Data</a></li>
					<li><a href="<?php echo base_url('admin/categories') ?>">Categories</a></li>
					<li class="active">List Categories</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">List Categories</h3>
								<a class="btn btn-sm btn-primary pull-right" href="<?php echo base_url('admin/categories/insert') ?>">Tambah Data</a>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>No.</th>
											<th>Nama Kategori</th>
											<th>Deskripsi</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach($categories as $num => $val) : ?>
										<tr>
											<td><?php echo ++$num; ?></td>
											<td><?php echo $val->nama ?></td>
											<td><?php echo $val->deskripsi ?></td>
											<td>
												<a class="btn-sm btn-primary" href="#"><i class="fa fa-search"></i></a>
												<a class="btn-sm btn-warning"
													href="<?php echo site_url("admin/categories/update/" .$val->id_kategori) ?>"><i
														class="fa fa-edit"></i></a>
												<a class="btn-sm btn-danger"
													href="<?php echo site_url("admin/categories/delete/" .$val->id_kategori) ?>"><i
														class="fa fa-trash"></i></a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
									<tfoot>
										<tr>
											<th>No.</th>
											<th>Nama Kategori</th>
											<th>Deskripsi</th>
											<th>Aksi</th>
										</tr>
									</tfoot>
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Modal -->
		<div class="modal fade" id="modalTambahToko" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Form Insert Toko</h5>
					</div>
					<form action="" id="formTambahToko">
					<div class="modal-body">
							<div class="form-group">
								<label for="nama_toko">Nama Toko</label>
								<input type="text" class="form-control" id="nama_toko" name="nama_toko" placeholder=""
									autocomplete="off">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder=""
									autocomplete="off">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea type="text" class="form-control" id="alamat" name="alamat" placeholder=""
									autocomplete="off"></textarea>
							</div>
							<div class="form-group">
								<label for="no_telp">No. HP</label>
								<input type="text" class="form-control" id="no_telp" name="no_telp" placeholder=""
									autocomplete="off">
							</div>
							<div class="form-group">
								<label for="logo">Logo</label>
								<input type="file" class="form-control" id="logo" name="logo">
							</div>
							<div class="form-group">
								<label for="latitude">Latitude</label>
								<input type="text" class="form-control" id="latitude" name="latitude" placeholder=""
									autocomplete="off">
							</div>
							<div class="form-group">
								<label for="longitude">Longitude</label>
								<input type="text" class="form-control" id="longitude" name="longitude" placeholder=""
									autocomplete="off">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
				</div>
			</div>
		</div>
