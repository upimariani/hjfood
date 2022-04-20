<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Contact</a></li>
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
                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="title">
                            <h4>Get in touch</h4>
                            <h3>Profil Saya</h3>
                        </div>
                        <form class="form" method="post" action="<?= base_url('pelanggan/c_profil/update_profil/' . $pelanggan->id_pelanggan) ?>">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Nama<span>*</span></label>
                                        <input name="nama" value="<?= $pelanggan->nama_pelanggan ?>" type="text" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>No Hp<span>*</span></label>
                                        <input name="no_hp" value="<?= $pelanggan->no_hp ?>" type="number" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Alamat<span>*</span></label>
                                        <input name="alamat" value="<?= $pelanggan->alamat ?>" type="text" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Jenis Kelamin<span>*</span></label><br>
                                        <select name="jk" class="form-control" required1>
                                            <option value="Perempuan" <?php if ($pelanggan->jenis_kelamin == 'Perempuan') {
                                                                            echo 'selected';
                                                                        } ?>>Perempuan</option>
                                            <option value="Laki-Laki" <?php if ($pelanggan->jenis_kelamin == 'Laki-Laki') {
                                                                            echo 'selected';
                                                                        } ?>>Laki-Laki</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Email<span>*</span></label>
                                        <input name="email" value="<?= $pelanggan->email ?>" type="email" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Username<span>*</span></label>
                                        <input name="username" value="<?= $pelanggan->username ?>" type="text" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Password<span>*</span></label>
                                        <input name="password" value="<?= $pelanggan->password ?>" type="text" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn ">UPDATE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        <!-- <div class="single-info">
                            <i class="fa fa-envelope-open"></i>
                            <h4 class="title">Pesan:</h4>
                            <ul>
                                <li><a href="#"><?php foreach ($reward as $key => $value) {
                                                ?>
                                            <?= $value->isi ?>
                                        <?php
                                                } ?></a></li>
                            </ul>

                        </div> -->
                        <div class="single-info">
                            <i class="fa fa-location-arrow"></i>
                            <h4 class="title">Total Transaksi:</h4>
                            <ul>
                                <li><a href="#"><?= $pelanggan->reward ?> kg</a></li>
                            </ul>

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