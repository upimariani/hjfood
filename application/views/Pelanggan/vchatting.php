<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Chatting</a></li>
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
                                <h3 class="comment-title">Chatting</h3>
                                <!-- Single Comment -->
                                <?php
                                foreach ($chat as $key => $value) {

                                    if ($value->pelanggan_send != '0') {
                                ?>
                                        <div class="direct-chat-messages">
                                            <div class="single-comment">
                                                <div class="content">
                                                    <h4>Anda <span><?= $value->time ?></span></h4>
                                                    <p><?= $value->pelanggan_send ?></p>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    } else if ($value->admin_send != '0') {
                                    ?>

                                        <div class="single-comment left">
                                            <div class="content">
                                                <h4 class="text-danger">Admin <span><?= $value->time ?></span></h4>
                                                <p><?= $value->admin_send ?></p>

                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                <?php
                                }
                                ?>

                                <!-- End Single Comment -->
                                <!-- Single Comment -->

                                <!-- End Single Comment -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="reply">
                                <div class="reply-head">
                                    <h2 class="reply-title">Balas</h2>
                                    <!-- Comment Form -->
                                    <form class="form" action="<?= base_url('pelanggan/c_chatting/send') ?>" method="POST">
                                        <?php
                                        $id = $this->session->userdata('id_pelanggan');

                                        ?>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" name="message" id="text_message_chat" placeholder="Type Message ..." class="form-control">
                                                    <input type="hidden" id="text_id_pelanggan" name="id_pelanggan" value="<?= $id ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn">Kirim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Comment Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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