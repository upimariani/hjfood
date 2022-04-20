<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Review Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Blog Single -->
<section class="blog-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="blog-single-main">
                    <div class="row">
                        <div class="col-12">
                            <div class="comments">
                                <h3 class="comment-title">Review</h3>
                                <!-- Single Comment -->
                                <?php
                                foreach ($view as $key => $value) {
                                ?>
                                    <div class="single-comment right">
                                        <div class="content">
                                            <h4 class="text-danger"><?= $value->nama_pelanggan ?> <span><?= $value->nama ?></span></h4>
                                            <p><?= $value->review ?></p>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- End Single Comment -->
                                <!-- Single Comment -->

                                <!-- End Single Comment -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>