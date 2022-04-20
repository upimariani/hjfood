<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Invoice</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Invoice</div>
            </div>
        </div>

        <div class="section-body">
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2>Invoice</h2>
                                <div class="invoice-number">Order #<?= $detail['transaksi']->id_transaksi ?></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        <?= $detail['transaksi']->nama_pelanggan ?><br>
                                        <?= $detail['transaksi']->nama_kecamatan ?>
                                        <?= $detail['transaksi']->nama_desa ?>
                                        <?= $detail['transaksi']->alamat ?><br>
                                        <?= $detail['transaksi']->no_hp ?>
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Tanggal Pesan: </strong><br>
                                        <?= $detail['transaksi']->tgl_transaksi ?>
                                    </address>
                                    <?php
                                    if ($detail['transaksi']->bukti != '0') {
                                    ?>
                                        <img style="width: 250px; height: 200px;" src="<?= base_url('asset/bukti/' . $detail['transaksi']->bukti) ?>">
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="section-title">Order Summary</div>
                            <p class="section-lead">All items here cannot be deleted.</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="40">#</th>
                                        <th>Item</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Totals</th>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    $total = 0;
                                    foreach ($detail['detail'] as $key => $value) {
                                        $total = $total + (($value->harga - ($value->potongan / 100 * $value->harga)) * $value->qty);
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama ?></td>
                                            <td class="text-center">Rp. <?= number_format($value->harga - ($value->potongan / 100 * $value->harga)) ?></td>
                                            <td class="text-center"><?= $value->qty ?></td>
                                            <td class="text-right">Rp. <?= number_format(($value->harga - ($value->potongan / 100 * $value->harga)) * $value->qty, 0)  ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-8">
                                </div>
                                <div class="col-lg-4 text-right">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Subtotal</div>
                                        <div class="invoice-detail-value">Rp. <?= number_format($total, 0) ?></div>
                                    </div>
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Shipping</div>
                                        <div class="invoice-detail-value">Rp. <?= $value->ongkir ?></div>
                                    </div>
                                    <hr class="mt-2 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">Rp. <?= number_format($detail['transaksi']->total_belanja + $value->ongkir, 0) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-md-right">
                    <div class="float-lg-left mb-lg-0 mb-3">
                        <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                        <a href="<?= base_url('admin/c_transaksi') ?>" class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</a>
                    </div>
                    <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                </div>
            </div>
        </div>
    </section>
</div>