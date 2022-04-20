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
                        <a href="index.html">Stisla</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">


                        <li class="menu-header">Stisla</li>
                        <li class="dropdown"><a class="nav-link" href="<?= base_url('pemilik/c_laporan') ?>"><i class="fas fa-pencil-ruler"></i> <span>Laporan Penjualan</span></a></li>
                        <li><a class="nav-link" href="<?= base_url("admin/c_login/logout_admin") ?>"> <i class="fas fa-sign-out-alt"></i> <span>LogOut</span></a></li>
                    </ul>
                </aside>
            </div>
            <!--             
            <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'c_transaksi') {
                echo 'active';
            }  ?> -->