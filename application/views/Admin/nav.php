<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>

                </form>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">HJ FOOD</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">

                        <li class="menu-header">Kelola Data Master</li>
                        <li class="dropdown <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'c_kelola_data') {
                                                echo 'active';
                                            }  ?>">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url("admin/c_kelola_data/produk") ?>">Produk</a></li>
                                <li><a class="nav-link" href="<?= base_url("admin/c_kelola_data/uppselling") ?>">Produk Upselling</a></li>
                                <li><a class="nav-link" href="<?= base_url("admin/c_kelola_data/bundling") ?>">Produk Crosseling</a></li>
                                <li><a class="nav-link" href="<?= base_url("admin/c_kelola_data/admin") ?>">Admin</a></li>
                                <li><a class="nav-link" href="<?= base_url("admin/c_kelola_data/pemilik") ?>">Pemilik</a></li>
                                <li><a class="nav-link" href="<?= base_url("admin/c_kelola_data/kurir") ?>">Kurir</a></li>
                                <li><a class="nav-link" href="<?= base_url("admin/c_kelola_data/ongkir") ?>">Ongkir</a></li>
                                <li><a class="nav-link" href="<?= base_url("admin/c_kelola_data/promo") ?>">Promo</a></li>
                            </ul>
                        </li>

                        <li class="menu-header">Stisla</li>
                        <li class="dropdown <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'c_transaksi') {
                                                echo 'active';
                                            }  ?>"><a class="nav-link" href="<?= base_url('admin/c_transaksi') ?>"><i class="fas fa-pencil-ruler"></i> <span>Transaksi</span></a></li>
                        <li class="dropdown <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'c_reward') {
                                                echo 'active';
                                            }  ?>"><a class="nav-link" href="<?= base_url('admin/c_reward') ?>"><i class="far fa-file-alt"></i> <span>Reward</span></a></li>
                        <li class="dropdown <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'c_chatting') {
                                                echo 'active';
                                            }  ?>"><a class="nav-link" href="<?= base_url('admin/c_chatting') ?>"><i class="far fa-user"></i> <span>Chatting</span></a></li>


                        <li><a class="nav-link" href="<?= base_url("admin/c_login/logout_admin") ?>"> <i class="fas fa-sign-out-alt"></i> <span>LogOut</span></a></li>
                    </ul>
                </aside>
            </div>