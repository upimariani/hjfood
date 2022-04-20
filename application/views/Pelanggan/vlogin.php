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
                        <li class="active"><a href="blog-single.html">Login</a></li>
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
                    <h2>Login</h2>

                    <p>Please login in order to checkout more quickly</p>
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
                    <form class="form" method="post" action="<?= base_url('pelanggan/c_login/login') ?>">
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label" for="telephone">Username</label>
                                <div class="col-lg-12">
                                    <input type="text" name="username" value="<?= set_value('username') ?>" id="telephone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="fax">Password</label>
                                <div class="col-lg-12">
                                    <input type="password" id="fax" name="password" value="<?= set_value('password') ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">
                                <button class="btn" type="submit">Login</button>
                                <span>Apakah anda lupa akun? <a class="badge badge-warning" href="<?= base_url('pelanggan/c_login/lupa_password') ?>">Klik Lupa Akun!!</a></span>
                                <br>
                                <br>


                                Apakah Anda Sudah Memiliki Akun? Jika belum silahkan lakukan Registasi ! <a href="<?= base_url('pelanggan/c_login/register_pelanggan') ?>" class="btn-danger">Registrasi</a>
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