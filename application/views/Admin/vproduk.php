<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Produk</h1><br>

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
            <h2 class="section-title">Informasi Produk</h2>
            <p class="section-lead">Berikut Merupakan Informasi terkait Produk HJ FOOD</p>

            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Produk</button>
            <div class="row">
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
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($produk as $key => $value) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td><img style="width: 100px;" src="<?= base_url('asset/produk/' . $value->gambar) ?>"></td>
                                                <td><?= $value->nama ?></td>

                                                <td>
                                                    <?= $value->deskripsi ?></td>
                                                <td>Rp. <?= number_format($value->harga, 0) ?></td>
                                                <td>
                                                    <?= $value->stok ?>
                                                </td>
                                                <td> <a href="<?= base_url('admin/c_kelola_data/hapus_produk/' . $value->id_produk . '/' . $value->id_promo) ?>" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                                    <button data-toggle="modal" data-target="#edit<?= $value->id_produk ?>" class="btn btn-icon btn-success"><i class="far fa-edit"></i></button>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php

                    echo form_open_multipart('admin/c_kelola_data/simpan_produk');
                    $id_promo = strtoupper(random_string('alnum', 5));

                    ?>
                    <input type="hidden" name="id_promo" value="<?= $id_promo ?>">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" min="1" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" min="0" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- edit produk -->
    <?php
    foreach ($produk as $key => $value) {
    ?>

        <div class="modal fade" tabindex="-1" role="dialog" id="edit<?= $value->id_produk ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        echo form_open_multipart('admin/c_kelola_data/edit_produk/' . $value->id_produk);
                        ?>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" value="<?= $value->nama ?>" name="nama" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" value="<?= $value->deskripsi ?>" name="deskripsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" min="1" name="harga" value="<?= $value->harga ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" min="0" value="<?= $value->stok ?>" name="stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label><br>
                            <img style="width: 100px;" src="<?= base_url('asset/produk/' . $value->gambar) ?>">
                            <input type="file" name="gambar" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>