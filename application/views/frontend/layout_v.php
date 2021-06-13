<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>GM PETSHOP</title>
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
            rel="stylesheet">
            <!-- Icons -->
            <link href="<?=base_url()?>assets/frontend/css/nucleo-icons.css" rel="stylesheet">
            <link href="<?=base_url()?>assets/frontend/css/font-awesome.css" rel="stylesheet">
            <!-- Jquery UI -->
            <link type="text/css" href="<?=base_url()?>assets/frontend/css/jquery-ui.css" rel="stylesheet">
            <!-- Argon CSS -->
            <link type="text/css" href="<?=base_url()?>assets/frontend/css/argon-design-system.min.css" rel="stylesheet">
            <!-- Main CSS-->
            <link type="text/css" href="<?=base_url()?>assets/frontend/css/style.css" rel="stylesheet">
            <!-- Optional Plugins-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
            <!-- layout css -->
            <link type="text/css" href="<?=base_url()?>assets/frontend/css/layout.css" rel="stylesheet">
        </head>
        <body>
            <header class="header clearfix">
                <div class="top-bar d-none d-sm-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 text-left">
                                <ul class="top-links contact-info">
                                    <li><i class="fa fa-envelope-o" style="color: red"></i> <a href="#">contact@example.com</a></li>
                                    <li><i class="fa fa-phone" style="color: red"></i> 0851-0076-9282</li>
                                </ul>
                            </div>
                            <div class="col-6 text-right">
                                <ul class="top-links account-links">
                                    <?php
                                    if ($this->session->userdata('user_logged')) { ?>
                                    <li><i class="fa fa-user-circle-o" style="color:red;"></i> <a href="#"> <?=$this->session->userdata('user_logged')->full_name; ?></a></li>
                                    <li><i class="fa fa-power-off" style="color:red;"></i> <a href="<?=site_url('login/logout')?>">Logout</a></li>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($this->session->userdata('user_logged') == FALSE) { ?>
                                    <li><i class="fa fa-sign-in" style="color:red;"></i> <a href="<?=site_url('login')?>">Login</a></li>
                                    <?php
                                    }
                                    ?>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-main border-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-6">
                                <a class="navbar-brand mr-lg-5" href="<?=site_url('/');?>">
                                    <!-- <img src="<?=base_url()?>assets/frontend/img/logo.jpg" class="img-fluid" alt="Responsive image"> -->
                                    <span class="logo warna-logo">GM PETSHOP</span>
                                </a>
                            </div>
                            <div class="col-lg-7 col-12 col-sm-12">
                                <!--  <form action="#" class="search">
                                    <div class="input-group w-100">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form> -->
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="right-icons pull-right d-none d-sm-block">
                                    <!-- <div class="single-icon wishlist">
                                        <a href="#"><i class="fa fa-heart-o fa-2x warna-logo"></i></a>
                                        <span class="badge badge-default">5</span>
                                    </div> -->
                                    <div class="single-icon shopping-cart">
                                        <a href="#"><i class="fa fa-shopping-cart fa-2x warna-logo"></i></a>
                                        <span class="badge badge-default">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                        aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="main_nav">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="<?=site_url('/')?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=site_url('/layanan')?>">Layanan</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">Produk</a>
                                    <div class="dropdown-menu">
                                        <?php foreach ($this->parssingproduk->produks as $data): ?>
                                        <a class="dropdown-item" href="<?=site_url('frontend/produk/detail/'.$data->id_jenis_produk)?>"><?=$data->nama_jenis_produk?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tentang</a>
                                </li>
                            </ul>
                            </div> <!-- collapse .// -->
                            </div> <!-- container .// -->
                        </nav>
                    </header>
                    
                    <!-- CONTENT DISINI -->
                    <?php echo $contents ?>
                </section>
                <footer class="footer" style="background-color: #000000">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-12">
                                    <!-- Single Widget -->
                                    <div class="single-footer about">
                                        <div class="logo-footer">
                                            <span class="logo warna-logo">GM PETSHOP</span>
                                        </div>
                                        <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna
                                            eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                                        facilisis luctus, metus.</p>
                                        <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
                                        789</a></span></p>
                                    </div>
                                    <!-- End Single Widget -->
                                </div>
                                <div class="col-lg-2 col-md-6 col-12">
                                    <!-- Single Widget -->
                                    <div class="single-footer links">
                                        <h4>Information</h4>
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Faq</a></li>
                                            <li><a href="#">Terms &amp; Conditions</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Help</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Single Widget -->
                                </div>
                                <div class="col-lg-2 col-md-6 col-12">
                                    <!-- Single Widget -->
                                    <div class="single-footer links">
                                        <h4>Services</h4>
                                        <ul>
                                            <li><a href="#">Payment Methods</a></li>
                                            <li><a href="#">Money-back</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">Shipping</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Single Widget -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Single Widget -->
                                    <div class="single-footer social">
                                        <h4>Get In Touch</h4>
                                        <!-- Single Widget -->
                                        <div class="contact">
                                            <ul>
                                                <li>NO. 342 - London Oxford Street.</li>
                                                <li>012 United Kingdom.</li>
                                                <li>info@indomarket.com</li>
                                                <li>+032 3456 7890</li>
                                            </ul>
                                        </div>
                                        <!-- End Single Widget -->
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- End Single Widget -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="copyright-inner border-top">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="left">
                                            <p>Copyright © 2021 <a href="http://indokoding.net" target="_blank">GM PETSHOP</a> -
                                        All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="right pull-right">
                                        <ul class="payment-cards">
                                            <li><i class="fa fa-cc-paypal"></i></li>
                                            <li><i class="fa fa-cc-amex"></i></li>
                                            <li><i class="fa fa-cc-mastercard"></i></li>
                                            <li><i class="fa fa-cc-stripe"></i></li>
                                            <li><i class="fa fa-cc-visa"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Core -->
            <script src="<?=base_url()?>assets/frontend/js/core/jquery.min.js"></script>
            <script src="<?=base_url()?>assets/frontend/js/core/popper.min.js"></script>
            <script src="<?=base_url()?>assets/frontend/js/core/bootstrap.min.js"></script>
            <script src="<?=base_url()?>assets/frontend/js/core/jquery-ui.min.js"></script>
            <!-- Optional plugins -->
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            <!-- Argon JS -->
            <script src="<?=base_url()?>assets/frontend/js/argon-design-system.js"></script>
            <!-- Main JS-->
            <script src="<?=base_url()?>assets/frontend/js/main.js"></script>
        </body>
    </html>