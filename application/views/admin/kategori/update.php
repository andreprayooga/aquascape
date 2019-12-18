		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		    <!-- Content Header (Page header) -->
		    <section class="content-header">
		        <h1>
		            ㅤㅤ
		        </h1>
		        <ol class="breadcrumb">
		            <li><a href="<?php echo base_url('admin/home') ?>"><i class="fa fa-dashboard"></i> Master Data</a></li>
		            <li><a href="<?php echo base_url('admin/categories') ?>">Categories</a></li>
		            <li class="active">Update Categories</li>
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
		                        <h3 class="box-title">Update Categories</h3>
		                    </div>
		                    <!-- /.box-header -->

		                    <!-- form start -->
		                    <?php echo form_open_multipart('admin/categories/update/' . $categories->id_kategori); ?>
		                    <div class="box-body">
		                        <div class="form-group">
		                            <label for="nama_kategori">Nama Kategori</label>
		                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori" value="<?php echo $categories->nama_kategori ?>" autocomplete="off">
		                            <?php echo form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
		                        </div>
		                        <div class="form-group">
		                            <div class="col-sm-3">
		                                <img src="<?php echo base_url('./assets/admin/uploads/kategori/') . $categories->gambar  ?>" alt="" class="img-thumbnail">
		                            </div>
		                            <label for="gambar">File input</label>
		                            <input type="file" class="form-control" id="gambar" name="gambar">
		                        </div>
		                        <div class="form-group">
		                            <label for="deskripsi">Deskripsi</label>
		                            <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi Kategori" autocomplete="off"><?php echo $categories->deskripsi ?></textarea>
		                            <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
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