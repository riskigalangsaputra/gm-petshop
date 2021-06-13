<section class="slider-section pt-4 pb-4">
    <div class="container">
        <div class="slider-inner">
            <div class="row">
                <div class="col-md-3">
                    <nav class="nav-category">
                        <h2>Produk</h2>
                        <ul class="menu-category">
                            <?php foreach ($this->parssingproduk->produks as $data): ?>
                                <li><a href="<?=site_url('frontend/produk/detail/'.$data->id_jenis_produk)?>"><?=$data->nama_jenis_produk?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner shadow-sm rounded">
                            <div class="carousel-item active">
                                <img class="d-block w-100 foto-slide" src="<?=base_url()?>assets/frontend/img/slides/slide7.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="warna-logo">GM PETSHOP</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 foto-slide" src="<?=base_url()?>assets/frontend/img/slides/slide5.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="warna-logo">GM PETSHOP</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 foto-slide" src="<?=base_url()?>assets/frontend/img/slides/slide6.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="warna-logo">GM PETSHOP</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Slider -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services -->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="iconbox iconmedium rounded-circle text-info mr-4">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="media-body">
                        <h5>BERKUALITAS</h5>
                        <p class="text-muted">
                            Terbesar, Terlengkap, dan Terpercaya
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="iconbox iconmedium rounded-circle text-purple mr-4">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="media-body">
                        <h5>NYAMAN</h5>
                        <p class="text-muted">
                            Belanja Online Tanpa Ribet
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="iconbox iconmedium rounded-circle text-warning mr-4">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 ORDERS</h5>
                        <p class="text-muted">
                            One Stop GM PET SHOP Solution
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->
<section class="products-grids trending pb-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>LAYANAN KAMI</h2>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <?php foreach ($datas as $data): ?>
            <div class="col-xl-3 col-lg-4 col-md-4 col-12" style="margin-top: 20px;">
                <div class="single-product">
                    <div class="product-img"    >
                        <a href="product-detail.html">
                            <?php if ($data->gambar == 'default.png') {?>
                                 <img src="<?=base_url()?>assets/backend/img/default.png" 
                            <?php } else { ?>
                                <img src="<?= base_url('assets/backend/upload/'.$data->gambar) ?>" 
                            <?php } ?>
                            class="img-fluid" />
                        </a>
                    </div>
                    <div class="product-content">
                        <h3><a href="<?=site_url('layanan/detail')?>"><?= substr($data->nama_layanan, 0, 29) . '...';?></a></h3>
                        <div class="product-price">
                            <span><a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-plus"></i> Booking</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!--                 <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                <div class="single-product">
                    <div class="product-img">
                        <a href="product-detail.html">
                            <img src="<?=base_url()?>assets/frontend/img/products/p2.jpg" class="img-fluid" />
                        </a>
                    </div>
                    <div class="product-content">
                        <h3><a href="product-detail.html">Mandi Sehat / Grooming</a></h3>
                        <div class="product-price">
                            <span>$57.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                <div class="single-product">
                    <div class="product-img">
                        <a href="product-detail.html">
                            <img src="<?=base_url()?>assets/frontend/img/products/p3.jpg" class="img-fluid" />
                        </a>
                    </div>
                    <div class="product-content">
                        <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                        <div class="product-price">
                            <span>$57.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                <div class="single-product">
                    <div class="product-img">
                        <a href="product-detail.html">
                            <img src="<?=base_url()?>assets/frontend/img/products/p4.jpg" class="img-fluid" />
                        </a>
                    </div>
                    <div class="product-content">
                        <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                        <div class="product-price">
                            <span>$57.00</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>