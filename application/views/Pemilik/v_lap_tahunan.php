<!-- ============================================================== -->
<!-- Page wrapper  -->
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-book"></i> <?= $title ?>
                                <small class="float-right">Tahun: <?= $tahun ?></small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>No Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Harga</th>
                                        <th>Kerusakan</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    $jumlah_bayar = 0;
                                    foreach ($laporan as $key => $value) {
                                        // $tot_harga = $value->qty * $value->harga;
                                        $jumlah_bayar = $jumlah_bayar + $value->jumlah_bayar;
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_barang ?></td>
                                            <td><?= $value->no_boking ?></td>
                                            <td><?= $value->tgl_boking ?></td>
                                            <td><?= $value->harga_bayar ?></td>
                                            <td><?= $value->catatan ?></td>
                                            <td>Rp.<?= number_format($value->jumlah_bayar, 0) ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <h3>Grand Total : Rp. <?= number_format($jumlah_bayar, 0) ?> </h3>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                            <button class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
                        </div>
                    </div>
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div>
    </div>
</div>