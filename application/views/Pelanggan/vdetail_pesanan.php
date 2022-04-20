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
                            <h3>Detail Pemesanan</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <tr>

                                    <h6>Silahkan Lakukan Pembayaran Melalui TF Bank BCA</h6>

                                </tr>

                                <tr>
                                    <h6>No rek. 2990873723</h6>
                                    <h6>A.N Hesty Prahastini</h6>
                                </tr>
                                <br>
                                <h6>Batas Maksimal Pembayaran 1x24 Jam, Jika Tidak Melakukan Pembayaran Pada Batas yang Ditentukan Pesanan Otomatis Akan Dibatalkan</h6>
                                <br>
                                <table>
                                    <tr>
                                        <td>Id Transaksi</td>
                                        <td><strong><?= $detail['transaksi']->id_transaksi ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Atas Nama</td>
                                        <td><?= $detail['transaksi']->nama_pelanggan ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Telepon</td>
                                        <td><?= $detail['transaksi']->no_hp ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Pengiriman</td>
                                        <td><?= $detail['transaksi']->nama_desa ?>, Kec <?= $detail['transaksi']->nama_kecamatan ?> <br> <?= $detail['transaksi']->alamat_pengiriman ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total Belanja</td>
                                        <td>: Rp. <?= number_format($detail['transaksi']->total_belanja, 0)  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total Ongkir</td>
                                        <td>: Rp. <?= number_format($detail['transaksi']->ongkir, 0)  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total Pembayaran</td>
                                        <td>
                                            <h5>Rp. <?= number_format($detail['transaksi']->ongkir + $detail['transaksi']->total_belanja) ?></h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <p>Tanggal Pesan</p>
                                <p><?= $detail['transaksi']->tgl_transaksi ?></p>
                                <p>Status Pembayaran:
                                    <?php
                                    if ($detail['transaksi']->bukti_bayar == '0') {
                                    ?>
                                        <span class="badge badge-danger">Belum Melakukan Pembayaran</span>
                                    <?php
                                    } else {
                                    ?>
                                        <span class="badge badge-success">Sudah Bayar</span>
                                    <?php
                                    }
                                    ?>

                                </p>
                                <p>Status Pengemasan:
                                    <?php if ($detail['transaksi']->status_pengemasan == 'Belum') {
                                    ?>
                                        <span class="badge badge-danger">Belum Dikemas</span>
                                    <?php
                                    } else {
                                    ?>
                                        <span class="badge badge-success">Sudah Dikemas</span>
                                    <?php
                                    } ?>

                                </p>
                                <p>Status Pengiriman: <?php if ($detail['transaksi']->status_pengiriman == 'Belum Dikirim') {
                                                        ?>
                                        <span class="badge badge-danger">Belum Dikirim</span>
                                    <?php
                                                        } else {
                                    ?>
                                        <span class="badge badge-success">Sudah Dikirim</span>
                                    <?php
                                                        } ?>
                                </p>
                                <br>
                                <?php
                                if ($detail['transaksi']->bukti_bayar == '0') {
                                    echo form_open_multipart('pelanggan/c_pesanan_saya/bayar/' . $detail['transaksi']->id_transaksi) ?>
                                    <label>Masukkan Bukti Pembayaran</label>
                                    <input class="form-control" type="file" name="bayar">
                                    <button type="submit" class="btn">UPLOAD</button>
                                <?php
                                    echo form_close();
                                } else if ($detail['transaksi']->status_pengiriman == 'Valid') {
                                ?>
                                    <h5>Bukti Penerimaan Pengiriman</h5>
                                    <img style="width: 250px;" src="<?= base_url('asset/bukti/' . $detail['transaksi']->bukti) ?>">
                                    <br>
                                <?php
                                }
                                ?>
                                <br>

                            </div>

                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Qty</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Discount</th>
                                    <th>Harga Discount</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($detail['detail'] as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?= $value->qty ?></td>
                                        <td><?= $value->nama ?></td>
                                        <td>Rp. <?= number_format($value->harga, 0) ?></td>
                                        <td><?= $value->potongan ?> % </td>
                                        <td>Rp. <?= number_format($value->harga - ($value->potongan / 100 * $value->harga), 0) ?></td>
                                        <td>Rp. <?= number_format(($value->harga - ($value->potongan / 100 * $value->harga)) * $value->qty, 0)  ?></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                        <br>
                        <div class="row">
                            <div class="col-lg-7">
                                <a class="btn" href="<?= base_url('pelanggan/c_pesanan_saya') ?>">Kembali</a>

                            </div>
                            <div class="col-lg-5">

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

<!-- Map Section -->
<div class="map-section">
    <div id="myMap"></div>
</div>
<!--/ End Map Section -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->