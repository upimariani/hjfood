<!-- Slider Area -->
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <img style="opacity: 0.7;" src="<?= base_url('asset/gambar/hj_food.png') ?>" ;>

    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="small-banner section">
    <div class="container-fluid">
        <div class="row">
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner">
                    <img src="<?= base_url('asset/gambar/1.jpg') ?>" alt="#">
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner">
                    <img src="<?= base_url('asset/gambar/1.jpg') ?>" alt="#">
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-12">
                <div class="single-banner tab-height">
                    <img src="<?= base_url('asset/gambar/1.jpg') ?>" alt="#">

                </div>
            </div>
            <!-- /End Single Banner  -->
        </div>
    </div>
</section>
<!-- End Small Banner -->

<!-- Start Product Area -->
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Katalog Produk</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <?php
                                    foreach ($produk as $key => $value) {
                                    ?>

                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <form action="<?= base_url('pelanggan/c_halaman_utama/keranjang') ?>" method="POST">
                                                <input type="hidden" name="id" value="<?= $value->id_produk ?>">
                                                <input type="hidden" name="qty" value="1">
                                                <input type="hidden" name="id_pelanggan" value="<?= $this->session->userdata('id_pelanggan') ?>">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="product-details.html">
                                                            <img style="width: 550px; height: 350px;" class="default-img" src="<?= base_url('asset/produk/' . $value->gambar) ?>" alt="#">
                                                            <img style="width: 550px; height: 350px;" class="hover-img" src="<?= base_url('asset/produk/' . $value->gambar) ?>" alt="#">
                                                        </a>
                                                        <div class="button-head">
                                                            <div class="product-action">
                                                                <a title="Wishlist" href="<?= base_url('pelanggan/c_review/view/' . $value->id_produk) ?>"><i class=" ti-heart "></i><span>View Review</span></a>
                                                            </div>
                                                            <div class="product-action-2">
                                                                <button type="submit" class="btn" title="Add to cart" <?php if ($value->stok < 1) {
                                                                                                                            echo 'disabled';
                                                                                                                        } ?>>Add to cart</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html"><?= $value->nama ?></a></h3>
                                                        <p><?= $value->deskripsi ?></p>
                                                        <p>Qty: <span class="badge badge-success"><?= $value->stok ?> kg</span></p>
                                                        <div class="product-price">
                                                            <span>Rp. <?= number_format($value->harga - ($value->potongan / 100 * $value->harga), 0) ?></span>
                                                            <?php
                                                            if ($value->potongan != '0') {
                                                            ?>
                                                                <del>Rp. <?= number_format($value->harga, 0)  ?></del>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->



<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Produk Upselling</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <?php
                    foreach ($upselling as $key => $value) {
                    ?>
                        <form action="<?= base_url("pelanggan/c_halaman_utama/keranjang") ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $value->id_produk ?>">
                            <input type="hidden" name="qty" value="1">
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img style="width: 550px; height: 350px;" class="default-img" src="<?= base_url('asset/produk/' . $value->gambar) ?>" alt="#">
                                        <img style="width: 550px; height: 350px;" class="hover-img" src="<?= base_url('asset/produk/' . $value->gambar) ?>" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a title="Wishlist" href="<?= base_url('pelanggan/c_review/view/' . $value->id_produk) ?>"><i class=" ti-heart "></i><span>View Review</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <button type="submit" class="btn" title="Add to cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html"><?= $value->nama ?></a></h3>
                                    <p><?= $value->deskripsi ?></p>
                                    <p>Qty: <span class="badge badge-success"><?= $value->stok ?> kg</span></p>
                                    <div class="product-price">
                                        <span>Rp. <?= number_format($value->harga - ($value->potongan / 100 * $value->harga), 0) ?></span>
                                        <?php
                                        if ($value->potongan != '0') {
                                        ?>
                                            <del>Rp. <?= number_format($value->harga, 0)  ?></del>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                    <!-- End Single Product -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->



<!-- Start Shop Blog  -->
<section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Produk Cross Selling</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($bundling as $key => $value) {
            ?>

                <div class="col-lg-4 col-md-6 col-12">
                    <form action="<?= base_url("pelanggan/c_halaman_utama/keranjang") ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $value->id_produk ?>">
                        <input type="hidden" name="qty" value="1">
                        <!-- Start Single Blog  -->
                        <div class="shop-single-blog">
                            <img style="width: 370px; height: 300px;" src="<?= base_url('asset/produk/' . $value->gambar) ?>" alt="#">
                            <div class="content">
                                <p class="date">Qty: <?= $value->stok ?></p>
                                <a href="#" class="title"><?= $value->nama ?></a>
                                <a href="#" class="more-btn"><?= $value->deskripsi ?></a>
                                <div class="product-price">
                                    <span>Rp. <?= number_format($value->harga - ($value->potongan / 100 * $value->harga), 0) ?></span>
                                    <?php
                                    if ($value->potongan != '0') {
                                    ?>
                                        <del>Rp. <?= number_format($value->harga, 0)  ?></del>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="product-action">
                                <a title="Wishlist" href="<?= base_url('pelanggan/c_review/view/' . $value->id_produk) ?>"><i class=" ti-heart "></i><span> View Review</span></a>
                            </div>

                            <button type="submit" class="btn" title="Add to cart">Add to cart</button>
                        </div>

                        <br>
                        <br>
                        <!-- End Single Blog  -->
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Pengiriman</h4>
                    <p>Payment sebelum pukul 10:00 wib dikirim dihari yang sama</p>
                    <p>Payment Setelah pukul 10:00 wib dikirim dihari berikutnya</p>
                </div>
                <!-- End Single Service -->
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Pembayaran</h4>
                    <p>Pembayaran dapat dikirim ke rekening berikut</p>
                    <p> Bank BNI, BCA, BRI</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Harga Terbaik</h4>
                    <p>Banyak Promo Harga Pada Hari - Hari Besar Nasional</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                        <div class="product-gallery">
                            <div class="quickview-slider-active">
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                            </div>
                        </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2>Flared Shift Dress</h2>
                            <div class="quickview-ratting-review">
                                <div class="quickview-ratting-wrap">
                                    <div class="quickview-ratting">
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="#"> (1 customer review)</a>
                                </div>
                                <div class="quickview-stock">
                                    <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                </div>
                            </div>
                            <h3>$29.00</h3>
                            <div class="quickview-peragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                            </div>
                            <div class="size">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Size</h5>
                                        <select>
                                            <option selected="selected">s</option>
                                            <option>m</option>
                                            <option>l</option>
                                            <option>xl</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Color</h5>
                                        <select>
                                            <option selected="selected">orange</option>
                                            <option>purple</option>
                                            <option>black</option>
                                            <option>pink</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity">
                                <!-- Input Order -->
                                <div class="input-group">
                                    <div class="button minus">
                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <i class="ti-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
                                    <div class="button plus">
                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="ti-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!--/ End Input Order -->
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn">Add to cart</a>
                                <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                            </div>
                            <div class="default-social">
                                <h4 class="share-now">Share:</h4>
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->