<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Aquascape - Natural Beauty In The Aquarium</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url('assets/img/core-img/logo2.png') ?>">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/core-style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="<?php echo base_url('assets/img/core-img/search.png') ?>" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?php echo base_url('assets/img/core-img/logo.png') ?>" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="<?php echo base_url('assets/img/core-img/logo.png') ?>" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="<?php if ($page == 'home'): ?>active<?php endif; ?>"><a href="<?php echo base_url('home')?>">Home</a></li>
                    <li class="<?php if ($page == 'shop'): ?>active<?php endif; ?>"><a href="<?php echo base_url('shop')?>">Shop</a></li>
                    <li class="<?php if ($page == 'product'): ?>active<?php endif; ?>"><a href="<?php echo base_url('product')?>">Product</a></li>
                    <li class="<?php if ($page == 'cart'): ?>active<?php endif; ?>"><a href="<?php echo base_url('cart')?>">Cart</a></li>
                    <li class="<?php if ($page == 'checkout'): ?>active<?php endif; ?>"><a href="<?php echo base_url('checkout')?>">Checkout</a></li>
                    <li class="<?php if ($page == 'checkout'): ?>active<?php endif; ?>"><a href="<?php echo base_url('checkout')?>">Service</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">SERVICE</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="#" class="search-nav"><img src="<?php echo base_url('assets/img/core-img/search.png') ?>" alt=""> Search</a>
                <a href="cart.html" class="cart-nav"><img src="<?php echo base_url('assets/img/core-img/cart.png') ?>" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="<?php echo base_url('assets/img/core-img/favorites.png') ?>" alt=""> Sign In</a>
                <a href="#" class="fav-nav"><img src="<?php echo base_url('assets/img/core-img/favorites.png') ?>" alt=""> About</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->
