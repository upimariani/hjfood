<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Transaksi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Transaksi</a></div>
                <div class="breadcrumb-item">Informasi Transaksi</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Pesanan</h2>
            <p class="section-lead">
                Berikut Merupakan Pesanan Pelanggan
            </p>

            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <div id="accordion">
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                                        <h4>Menunggu Konfirmasi</h4>
                                    </div>
                                    <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>#</th>
                                                <th>Id Transaksi</th>
                                                <th>Bukti Bayar</th>
                                                <th>Nama</th>
                                                <th>Tgl Pesan</th>
                                                <th>Total Belanja</th>
                                                <th>Detail</th>
                                                <th>Konfirmasi</th>
                                            </tr>
                                            <?php
                                            $no = 1;
                                            foreach ($status['menunggu_konfirmasi'] as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value->id_transaksi ?></td>
                                                    <td><img style="width: 200px;" src="<?= base_url('asset/bayar/' . $value->bukti_bayar) ?>"></td>
                                                    <td><?= $value->nama_pelanggan ?></td>
                                                    <td><?= $value->tgl_transaksi ?></td>
                                                    <td>Rp. <?= number_format($value->total_belanja + $value->ongkir, 0)  ?></td>
                                                    <td><a href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>" class="btn btn-secondary">Detail</a></td>
                                                    <td><a href="<?= base_url('admin/c_transaksi/konfirmasi/' . $value->id_transaksi) ?>" class="btn btn-success">Konfirmasi Pembayaran</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>


                                        </table>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                                        <h4>Pesanan Dikemas</h4>
                                    </div>
                                    <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>#</th>
                                                <th>Id Transaksi</th>
                                                <th>Nama</th>
                                                <th>Tgl Pesan</th>
                                                <th>Total Belanja</th>
                                                <th>Detail</th>
                                                <th>Kirim</th>
                                            </tr>
                                            <?php
                                            $no = 1;
                                            foreach ($status['dikemas'] as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value->id_transaksi ?></td>
                                                    <td><?= $value->nama_pelanggan ?></td>
                                                    <td><?= $value->tgl_transaksi ?></td>
                                                    <td>Rp. <?= number_format($value->total_belanja + $value->ongkir, 0)  ?></td>
                                                    <td><a href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>" class="btn btn-secondary">Detail</a></td>
                                                    <td> <button class="btn btn-primary" data-toggle="modal" data-target="#kurir<?= $value->id_transaksi ?>">Kirim</button>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                                        <h4>Pesanan Dikirim</h4>
                                    </div>
                                    <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>#</th>
                                                <th>Id Transaksi</th>
                                                <th>Nama</th>
                                                <th>Tgl Pesan</th>
                                                <th>Total Belanja</th>
                                                <th>Kurir</th>
                                                <th>Detail</th>
                                                <th>Kirim</th>
                                            </tr>
                                            <?php
                                            $no = 1;
                                            foreach ($status['dikirim'] as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value->id_transaksi ?></td>
                                                    <td><?= $value->nama_pelanggan ?></td>
                                                    <td><?= $value->tgl_transaksi ?></td>
                                                    <td>Rp. <?= number_format($value->total_belanja + $value->ongkir, 0)  ?></td>
                                                    <td><?= $value->nama_user ?></td>
                                                    <td><a href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>" class="btn btn-secondary">Detail</a></td>
                                                    <td><a href="<?= base_url('admin/c_transaksi/selesai/' . $value->id_transaksi) ?>" class="btn btn-success">Proses Selesai</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>


                                        </table>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-4">
                                        <h4>Pesanan Selesai</h4>
                                    </div>
                                    <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>#</th>
                                                <th>Id Transaksi</th>
                                                <th>Nama</th>
                                                <th>Tgl Pesan</th>
                                                <th>Total Belanja</th>
                                                <th>Detail</th>
                                            </tr>
                                            <?php
                                            $no = 1;
                                            $total = 0;
                                            foreach ($status['selesai'] as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value->id_transaksi ?></td>
                                                    <td><?= $value->nama_pelanggan ?></td>
                                                    <td><?= $value->tgl_transaksi ?></td>
                                                    <td>Rp. <?= number_format($value->total_belanja + $value->ongkir, 0)  ?></td>
                                                    <td><a href="<?= base_url('admin/c_transaksi/detail_pemesanan/' . $value->id_transaksi) ?>" class="btn btn-secondary">Detail</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
$no = 1;
foreach ($status['dikemas'] as $key => $value) {
?>
    <div class="modal fade" tabindex="-1" role="dialog" id="kurir<?= $value->id_transaksi ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Kurir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/c_transaksi/kirim/' . $value->id_transaksi) ?>" method="POST">
                        <div class="form-group">
                            <label>Kurir</label>
                            <select name="kurir" class="form-control">
                                <?php
                                foreach ($kurir as $key => $kurir) {
                                ?>
                                    <option value="<?= $kurir->id_user ?>"><?= $kurir->nama_user ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </form>
        </div>
    </div>
<?php
}
?>