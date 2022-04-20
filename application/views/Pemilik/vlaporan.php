<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Penjualan Dan Stock</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Laporan Penjualan Dan Stock</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Laporan Penjualan Dan Stock</h2>
            <p class="section-lead">Example of some Bootstrap table components.</p>
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Penjualan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                            echo form_open('Pemilik/c_laporanFpdf/hari') ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo form_close() ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Stock Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                            echo form_open('Pemilik/c_laporanFpdf/stock') ?>
                            <div class="row">
                                <!-- <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <select name="tanggal" class="form-control">
                                            <?php
                                            $mulai = 1;
                                            for ($i = $mulai; $i < $mulai + 31; $i++) {
                                                $sel = $i == date('Y') ? 'selected="selected"' : '';
                                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select name="bulan" class="form-control">
                                            <?php
                                            $mulai = 1;
                                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                                $sel = $i == date('Y') ? 'selected="selected"' : '';
                                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <?php
                                            $mulai = date('Y') - 1;
                                            for ($i = $mulai; $i < $mulai + 10; $i++) {
                                                $sel = $i == date('Y') ? 'selected="selected"' : '';
                                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo form_close() ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

<!-- end row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->