<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Detail Pesanan Saya</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="form-main">
                        <div class="title">
                            <h4>Get in touch</h4>
                            <h3>Pemesanan</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <th class="text-center">Id Transaksi</th>
                                <th class="text-center">Atas Nama</th>
                                <th class="text-center">Total Bayar</th>
                                <th class="text-center">Detail</th>
                                <th class="text-center">Review</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($pesanan as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?= $value->id_transaksi ?></td>
                                        <td><?= $value->nama_pelanggan ?></td>
                                        <td>Rp. <?= number_format($value->total_belanja + $value->ongkir, 0)  ?></td>
                                        <td class="text-center">
                                            <a class="badge badge-info" href="<?= base_url('pelanggan/c_pesanan_saya/detail_pesanan/' . $value->id_transaksi) ?>"> DETAIL </a>

                                        </td>
                                        <td class="text-center"> <?php if ($value->status_pengiriman == 'Valid') {
                                                                    ?>
                                                <a class="badge badge-warning" href="<?= base_url('pelanggan/c_review/pesanan/' . $value->id_transaksi) ?>">REVIEW</a>
                                            <?php
                                                                    } ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->


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