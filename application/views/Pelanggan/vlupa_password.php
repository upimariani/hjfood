<?php
$cart = $this->m_katalog->cart();
?>




<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Lupa Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-form">
                    <h2>Lupa Password? Verifikasi Email Anda</h2>
                    <br>
                    <?php
                    if ($this->session->userdata('pesan')) {
                        echo '<div class="alert alert-success">';
                        echo $this->session->userdata('pesan');
                        echo '</div>';
                    }
                    if ($this->session->userdata('gagal')) {
                        echo '<div class="alert alert-danger">';
                        echo $this->session->userdata('gagal');
                        echo '</div>';
                    }
                    ?>
                    <!-- Form -->
                    <form class="form" method="post" action="<?= base_url('pelanggan/c_login/verifikasi_akun') ?>">
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label" for="telephone">Email*</label>
                                <div class="col-lg-12">
                                    <input type="email" name="email" value="<?= set_value('email') ?>" id="telephone" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-offset-2 padding-left-0 padding-top-20">
                                <button class="btn" type="submit">Verifikasi Akun</button>
                            </div>
                        </div>
                        <?php echo form_close() ?>
                </div>
                </form>
                <!--/ End Form -->
            </div>
        </div>
    </div>
    </div>
</section>
<!--/ End Checkout -->