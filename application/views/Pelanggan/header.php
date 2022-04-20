<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <?php
    $cart = $this->m_katalog->cart();
    ?>

    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> +6282117231113</li>
                                <li><i class="ti-email"></i> ayampotonghjfood@gmail.com</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> Kuningan Jawabarat</li>
                                <li><i class="ti-alarm-clock"></i> <a href="#">Senin-Minggu</a></li>
                                <li><i class="ti-user"></i> <a href="#"><?= $this->session->userdata('nama'); ?></a></li>
                                <li><i class="ti-power-off"></i>
                                    <?php if ($this->session->userdata('id_pelanggan') == '') {
                                    ?>
                                        <a href="<?= base_url('Pelanggan/c_login/login') ?>">Login</a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="<?= base_url('Pelanggan/c_login/logout') ?>">LogOut</a>
                                    <?php
                                    }
                                    ?>

                                </li>
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="<?= base_url('asset/gambar/logo.png') ?>" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">Promo</option>
                                    <option>Discount</option>
                                    <option>Upselling</option>
                                    <option>Crosselling</option>
                                </select>
                                <form>
                                    <input name="search" placeholder="Search Products Here....." type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->

                            <?php
                            if ($this->session->userdata('id_pelanggan') != '') {
                            ?>
                                <div class="sinlge-bar shopping">
                                    <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">
                                            <?php
                                            foreach ($cart['jml'] as $key => $value) {
                                                echo $value->jumlah;
                                            }
                                            ?>
                                        </span></a>
                                    <!-- Shopping Item -->
                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <?php
                                            foreach ($cart['jml'] as $key => $value) {
                                            ?>
                                                <span><?= $value->jumlah ?> Items</span>
                                            <?php
                                            }
                                            ?>

                                            <a href="<?= base_url('pelanggan/c_cart') ?>">View Cart</a>
                                        </div>
                                        <ul class="shopping-list">
                                            <?php
                                            foreach ($cart['cart'] as $key => $value) {
                                            ?>
                                                <li>
                                                    <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                    <a class="cart-img" href="#"><img src="<?= base_url('asset/produk/' . $value->gambar) ?>" alt="#"></a>
                                                    <h4><a href="#"><?= $value->nama ?></a></h4>
                                                    <p class="quantity"><?= $value->tot ?>x - <span class="amount">Rp. <?= number_format($value->harga - ($value->potongan / 100 * $value->harga), 0) ?></span></p>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span>Total</span>
                                                <span class="total-amount">
                                                    <?php
                                                    foreach ($cart['total'] as $key => $value) {
                                                    ?>
                                                        Rp. <?= number_format($value->total, 0) ?>
                                                    <?php
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <a href="<?= base_url('pelanggan/c_checkout') ?>" class="btn animate">Checkout</a>
                                        </div>
                                    </div>
                                    <!--/ End Shopping Item -->
                                </div>
                            <?php
                            }
                            ?>




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="<?= base_url('pelanggan/c_halaman_utama') ?>">Home</a></li>
                                                <li><a href="<?= base_url('pelanggan/c_cart') ?>">CART</a></li>
                                                <li><a href="<?= base_url('pelanggan/c_checkout') ?>">CHECKOUT</a></li>
                                                <li><a href="<?= base_url('pelanggan/c_pesanan_saya') ?>">PESANAN SAYA</a></li>

                                                <li><a href="<?= base_url('pelanggan/c_profil') ?>">PROFIL SAYA
                                                        <!-- <?php foreach ($reward as $key => $value) {
                                                                ?>
                                                            <span class="badge badge-success">1</span>
                                                        <?php
                                                                }
                                                        ?> -->
                                                    </a></li>
                                                <li><a href="<?= base_url('pelanggan/c_chatting') ?>">CHAT</a></li>


                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->