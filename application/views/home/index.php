<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        <?php foreach ($categories as $key => $value): ?>
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="<?php echo base_url() .'assets/uploads/categories/'. $value->gambar  ?>" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4 style="color:white"><?php echo $value->nama_kategori ?></h4>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Product Catagories Area End -->
