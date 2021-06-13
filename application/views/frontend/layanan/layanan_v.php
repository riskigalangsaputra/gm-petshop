<section class="products-grids trending pb-4" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>LAYANAN GM PETSHOP</h2>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <?php foreach ($datas as $data): ?>
            <div class="col-xl-3 col-lg-4 col-md-4 col-12" style="margin-top: 20px;">
                <div class="single-product">
                    <div class="product-img"    >
                        <a href="<?=site_url('/layanan/detail/'.$data->id_layanan)?>">
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
                            <span><a href="<?=site_url('/booking/form/'.$data->id_layanan)?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-plus"></i> Booking</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>