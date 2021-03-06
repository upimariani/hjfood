<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/themify-icons.css">
    <!-- Nice Select CSS -->
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/reset.css">
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>style.css">
    <link rel="stylesheet" href="<?= base_url('asset/eshop/eshop/') ?>css/responsive.css">



</head>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Register</a></li>
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
            <div class="col-lg-12 col-12">
                <div class="checkout-form">
                    <h2>Register</h2>
                    <p>Please register in order to checkout more quickly</p>
                    <!-- Form -->
                    <form class="form" method="post" action="<?= base_url('pelanggan/c_login/register_pelanggan') ?>">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama<span>*</span></label>
                                    <input type="text" name="nama" value="<?= set_value('nama') ?>" placeholder="">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jenis Kelamin<span>*</span></label>
                                    <select name="jk" id="company" class="form-control" required>
                                        <option value=" ">---Pilih Jenis Kelamin---</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                    </select>
                                </div>
                                <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Kabupaten/Kota<span>*</span></label>
                                    <select name="kabupaten" name="kec" id="kab" class="form-control" required>
                                        <option value=" ">---Pilih Kecamatan---</option>
                                        <option value="1">Kuningan</option>
                                        <option value="2">Cirebon</option>
                                    </select>
                                </div>
                                <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Kecamatan<span>*</span></label>
                                    <select name="kecamatan" name="kec" id="kecamatan" class="form-control" required>
                                        <option value=" ">---Pilih Kecamatan---</option>
                                    </select>
                                </div>
                                <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Desa/Kelurahan<span>*</span></label>
                                    <select name="desa" name="desa" id="desa" class="form-control" required>
                                        <option value=" ">---Pilih Desa/Kelurahan---</option>
                                    </select>
                                </div>
                                <?= form_error('desa', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Alamat<span>*</span></label>
                                    <input type="text" name="alamat" value="<?= set_value('alamat') ?>" placeholder="">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email<span>*</span></label>
                                    <input type="email" name="email" value="<?= set_value('email') ?>" placeholder="">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Username<span>*</span></label>
                                    <input type="text" name="username" value="<?= set_value('username') ?>" placeholder="">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>No Hp<span>*</span></label>
                                    <input type="number" name="no_hp" value="<?= set_value('no_hp') ?>" placeholder="">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Password<span>*</span></label>
                                    <input type="text" name="password" value="<?= set_value('password') ?>" placeholder="">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Register</button>
                                <p>Apakah Anda Sudah Memiliki Akun?<a href="<?= base_url('pelanggan/c_login/login') ?>">LOGIN!</a></p>
                            </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services -->

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
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo2.png" alt="#"></a>
                        </div>
                        <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                        <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Customer Service</h4>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>NO. 342 - London Oxford Street.</li>
                                <li>012 United Kingdom.</li>
                                <li>info@eshop.com</li>
                                <li>+032 3456 7890</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright ?? 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="images/payments.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->
<script script src="<?= base_url() ?>asset/eshop/eshop/js/jquery.min.js">
</script>
<script src="<?= base_url() ?>asset/eshop/eshop/js/jquery-migrate-3.0.0.js"></script>
<script src="<?= base_url() ?>asset/eshop/eshop/js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/bootstrap.min.js"></script>
<!-- Color JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/colors.js"></script>
<!-- Slicknav JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/magnific-popup.js"></script>
<!-- Waypoints JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/finalcountdown.min.js"></script>
<!-- Flex Slider JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/easing.js"></script>
<!-- Active JS -->
<script src="<?= base_url() ?>asset/eshop/eshop/js/active.js"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/js/jquery-3.3.1.js' ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#kab').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('pelanggan/c_checkout/get_kec'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id_kecamatan + '>' + data[i].nama_kecamatan + '</option>';
                    }
                    $('#kecamatan').html(html);
                }
            });
            return false;
        });
        $('#kecamatan').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('pelanggan/c_checkout/get_desa'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option data-ongkir=' + data[i].ongkir + ' value=' + data[i].id_desa + '>' + data[i].nama_desa + '</option>';
                    }
                    $('#desa').html(html);
                }
            });
            return false;
        });

    });
</script>
<script>
    $("#desa").on('change', function() {
        $(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
        $(".ongkir").val($(this).find(':selected').attr('data-ongkir'));
    })
</script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000)
</script>
</body>

</html>