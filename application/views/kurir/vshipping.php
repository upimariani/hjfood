<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pengiriman Barang</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Pengiriman Barang</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Pengiriman Barang</h2>
            <p class="section-lead">Example of some Bootstrap table components.</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sortable Table</h4>
                            <div class="card-header-action">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped" id="sortable-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <i class="fas fa-th"></i>
                                            </th>
                                            <th>Id Transaksi</th>
                                            <th>Atas Nama</th>
                                            <th>No Telepon</th>
                                            <th>Alamat</th>
                                            <th>Upload Bukti Pengiriman</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($kurir as $key => $value) {
                                        ?>
                                            <?php
                                            echo form_open_multipart('kurir/c_transaksi/upload/' . $value->id_transaksi);
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td><?= $value->id_transaksi ?></td>
                                                <td><?= $value->nama_pelanggan ?></td>
                                                <td><?= $value->no_hp ?></td>
                                                <td><?= $value->nama_desa ?>, Kec <?= $value->nama_kecamatan ?>, <?= $value->alamat ?></td>
                                                <td><input type="file" name="bukti" class="form-control">
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Upload</button>
                                                </td>
                                            </tr>
                                            <?php echo form_close();
                                            ?>
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