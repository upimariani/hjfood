<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Promo</h1><br>

        </div>
        <?php
        if ($this->session->userdata('pesan')) {
            echo '<div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title">Success</div>';
            echo $this->session->userdata('pesan');
            echo ' </div>
            </div>';
        }
        if ($this->session->userdata('eror')) {
            echo '<div class="alert alert-danger alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title">danger</div>';
            echo $this->session->userdata('eror');
            echo ' </div>
            </div>';
        }
        ?>
        <div class="section-body">
            <h2 class="section-title">Informasi Promo</h2>
            <p class="section-lead">Berikut Merupakan Informasi terkait Promo HJ FOOD</p>

            <div class="row">
                <div class="col-12">
                    <form action="<?= base_url('admin/c_kelola_data/simpan_promo') ?>" method="POST">
                        <div class="form-group">
                            <label>Jenis Produk</label>
                            <select name="jns_produk" id="jns_produk" class="form-control">
                                <option value="">---Pilih Produk---</option>
                                <option value="1">Produk Satuan</option>
                                <option value="2">Produk Cross Selling</option>
                                <option value="3">Produk Up Selling</option>
                            </select>
                            <!-- <select name="id_promo" class="form-control" required>
                                <option value="">---Pilih Produk Promo---</option>
                                <?php
                                foreach ($produk as $key => $value) {
                                ?>
                                    <option value="<?= $value->id_promo ?>"><?= $value->nama ?></option>
                                <?php
                                }
                                ?>
                            </select> -->
                        </div>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <select name="id_promo" id="produk" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Potongan</label>
                            <input type="number" min="0" name="potongan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Sampai Dengan</label>
                            <input type="text" name="tgl_selesai" class="form-control datepicker">
                        </div>
                        <button type="submit" class="btn btn-warning">SIMPAN</button>
                    </form>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped" id="sortable-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <i class="fas fa-th"></i>
                                            </th>
                                            <th>Nama</th>
                                            <th>Potongan</th>
                                            <th>Harga Porduk</th>
                                            <th>Potongan</th>
                                            <th>Harga Discont</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($promo as $key => $value) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td><?= $value->nama ?></td>

                                                <td>
                                                    <?= $value->potongan ?></td>
                                                <td>Rp. <?= number_format($value->harga, 0) ?></td>
                                                <td>
                                                    <?= $value->potongan ?></td>
                                                <td>Rp. <?= number_format($value->harga - ($value->harga * $value->potongan / 100), 0) ?></td>
                                                <td>
                                                    <?= $value->mulai ?>
                                                </td>
                                                <td>
                                                    <?= $value->selesai ?>
                                                </td>
                                                <td> <a href="<?= base_url('admin/c_kelola_data/hapus_promo/' . $value->id_promo) ?>" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>