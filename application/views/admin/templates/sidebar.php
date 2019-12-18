  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="<?php echo base_url('assets/admin/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>Alexander Pierce</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                  </span>
              </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>

              <li class="<?php echo $url == 'Dashboard' ? "active" : '' ?>">
                  <a href="<?php echo base_url('administrator/dashboard') ?>">
                      <i class="fa fa-home"></i> <span>Dashboard</span>
                  </a>
              </li>

              <li class="<?php echo $url == 'Categories' ? "active" : '' ?>">
                  <a href="<?php echo base_url('admin/categories') ?>">
                      <i class="fa fa-circle-o"></i>Category
                  </a>
              </li>

              <li class="<?php echo $url == 'Product' ? "active" : '' ?>">
                  <a href="<?php echo base_url('admin/product') ?>">
                      <i class="fa fa-circle-o"></i>Product
                  </a>
              </li>

              <li class="<?php echo $url == 'Vendor' ? "active" : '' ?>">
                  <a href="<?php echo base_url('admin/vendor') ?>">
                      <i class="fa fa-circle-o"></i>Vendor
                  </a>
              </li>

          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>
