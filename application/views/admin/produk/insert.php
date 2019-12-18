		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					ㅤㅤ
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url('admin/home') ?>"><i class="fa fa-dashboard"></i> Master Data</a></li>
					<li><a href="<?php echo base_url('admin/product') ?>">Product</a></li>
					<li class="active">Insert Product</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-lg-6">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Insert Product</h3>
							</div>
							<!-- /.box-header -->

							<!-- form start -->
							<?php echo form_open_multipart('admin/product/insert'); ?>
							<div class="box-body">
								<div class="form-group">
									<label for="nama_kategori">Nama Produk</label>
									<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kategori" value="<?php echo set_value('nama') ?>" autocomplete="off">
									<?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi Kategori" autocomplete="off"><?php echo set_value('nama') ?></textarea>
									<?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="kategori">Kategori</label>
									<select class="form-control" id="id_kategori" name="id_kategori">
										<option selected>Pilih Kategori</option>
										<?php foreach ($this->db->get('kategori')->result_array() as $num => $val) :  ?>
											<option value="<?php echo $val['id_kategori'] ?>"><?php echo $val['nama'] ?></option>
										<?php endforeach; ?>
										<?php echo form_error('id_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
									</select>
								</div>
								<div class="form-group">
									<label for="gambarb">File input</label>
									<input type="file" class="form-control" id="foto" name="foto">
								</div>
								<div class="form-group">
									<label for="harga">Harga</label>
									<input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo set_value('harga') ?>" autocomplete="off">
									<?php echo form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<!-- /.box-body -->

							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-right">Submit</button>
							</div>
							</form>
						</div>
						<!-- /.box -->
					</div>
					<!--/.col (left) -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->