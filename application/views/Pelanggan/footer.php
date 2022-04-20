<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">

                        <p class="text">Perusahaan Ayam Potong HJFood menyediakan produk - produk daging ayam fresh dengan harga terjangkau. Tersedia juga paket - paket promo yang menarik.</p>
                        <br>
                        <p class="text">Silahkan DAFTAR silahkan daftar Menjadi Pelanggan Untuk Mendapatkan Penawaran Spesial </p>
                        <p class="call">Ada Pertanyaan? Silahkan Hubungi Kami <span><a href="tel:123456789">+6282117231113</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Informasi</h4>
                        <ul>
                            <li><a href="tel:123456789"> Ayam PotongHJFood</>
                            </li>
                            <li><a href="">Senin-Minggu</a></li>
                            <li><a href="">Pengiriman Setiap hari</a></li>
                            <li><a href="">BNI 0606365</a></li>
                            <li><a href="">a.n Muammar Aris</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Alamat</h4>
                        <ul>
                            <li><a href="">Indonesia</li>
                            <li><a href="">Kuningan. Jawabarat</li>
                            <li><a href="">Cijoho Lingk.Manis </li>
                            <li><a href="">Jln. Pejuang</li>
                            <li><a href="">Rt.021 Rw.002</li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Media Sosial</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>AyamPotongHJFood</li>
                                <li>ayampotongHJFood </li>
                                <li>ayampotonghjfood@gmail.com</li>
                                <li>+6282117231113</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-email"></i></a></li>

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
                            <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery-migrate-3.0.0.js"></script>
<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/bootstrap.min.js"></script>
<!-- Color JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/colors.js"></script>
<!-- Slicknav JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/magnific-popup.js"></script>
<!-- Waypoints JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/finalcountdown.min.js"></script>
<!-- Nice Select JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/nicesellect.js"></script>
<!-- Flex Slider JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/easing.js"></script>
<!-- Active JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/active.js"></script>
<script>
    $("#desa").on('change', function() {
        $(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
        $(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

        $(".total").html($(this).find(':selected').attr('data-total'));
        $(".total").val($(this).find(':selected').attr('data-total'));
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