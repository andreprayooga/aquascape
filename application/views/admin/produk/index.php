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
								<a class="btn btn-sm btn-primary pull-right" href="<?php echo base_url('admin/product/insert') ?>">Tambah Data</a>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>No.</th>
											<th>Nama Kategori</th>
											<th>Deskripsi</th>
											<th>Nama Kategori</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach($product as $num => $val) : ?>
										<tr>
											<td><?php echo ++$num; ?></td>
											<td><?php echo $val->nama ?></td>
											<td><?php echo $val->deskripsi ?></td>
											<td>
												<a class="btn-sm btn-primary" href="#"><i class="fa fa-search"></i></a>
												<a class="btn-sm btn-warning"
													href="<?php echo site_url("admin/product/update/" .$val->id_produk) ?>"><i
														class="fa fa-edit"></i></a>
												<a class="btn-sm btn-danger"
													href="<?php echo site_url("admin/product/delete/" .$val->id_produk) ?>"><i
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
											<th>Nama Kategori</th>
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