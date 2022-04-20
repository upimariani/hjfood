<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Wilayah</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Wilayah</div>
            </div>
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
            <h2 class="section-title">Informasi Wilayah</h2>
            <p class="section-lead">Berikut adalah informasi terkait informasi wilayah</p>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#kecamatan">Tambah Kecamatan</button>
                            <div class="card-header-action">
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
                                            <th>Nama Kecamatan</th>
                                            <th>Ongkir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($kecamatan as $key => $value) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <?= $value->nama_kecamatan ?>
                                                </td>
                                                <td>Rp. <?= number_format($value->ongkir, 0) ?></td>
                                                <td> <button class="btn btn-icon btn-primary" data-toggle="modal" data-target="#edit_kecamatan<?= $value->id_kecamatan ?>"><i class="far fa-edit"></i></button>
                                                    <a href="<?= base_url('admin/c_kelola_data/hapus_kecamatan/' . $value->id_kecamatan . '/' . $value->id_kecamatan) ?>" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
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
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#desa">Tambah Desa</button>
                            <div class="card-header-action">
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
                                            <th>Kecamatan</th>
                                            <th>Nama Desa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($desa as $key => $value) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td><?= $value->nama_kecamatan ?></td>
                                                <td class="align-middle"><?= $value->nama_desa ?>
                                                </td>
                                                <td> <button class="btn btn-icon btn-primary" data-toggle="modal" data-target="#edit_desa<?= $value->id_desa ?>"><i class="far fa-edit"></i></button>
                                                    <a href="<?= base_url('admin/c_kelola_data/hapus_desa/' . $value->id_desa . '/' . $value->id_desa) ?>" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="kecamatan">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url('admin/c_kelola_data/simpan_kecamatan') ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Kabupaten/Kota</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kabupaten</label>
                            <select name="kabupaten" class="form-control">
                                <option value="">---Pilih Kabupaten/Kota---</option>
                                <option value="1">Kuningan</option>
                                <option value="2">Cirebon</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ongkos Kirim</label>
                            <input type="text" name="ongkir" class="form-control">
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
    <div class="modal fade" tabindex="-1" role="dialog" id="desa">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url('admin/c_kelola_data/simpan_desa') ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Desa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kabupaten/Kecamatan</label>
                            <select name="kabupaten" class="form-control" required>
                                <option value="">---Pilih Kabupaten/Kecamatan---</option>
                                <?php
                                foreach ($kecamatan as $key => $value) {
                                ?>
                                    <option value="<?= $value->id_kecamatan ?>"><?= $value->nama_kecamatan ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Desa</label>
                            <input type="text" name="desa" class="form-control" required>
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


    <!-- edit kecamatan -->
    <?php
    foreach ($kecamatan as $key => $value) {
    ?>

        <div class="modal fade" tabindex="-1" role="dialog" id="edit_kecamatan<?= $value->id_kecamatan ?>">
            <div class="modal-dialog" role="document">
                <form action="<?= base_url('admin/c_kelola_data/edit_kecamatan/' . $value->id_kecamatan) ?>" method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data Kabupaten/Kota</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Kabupaten</label>
                                <select name="kabupaten" class="form-control" required>
                                    <option value="">---Pilih Kabupaten/Kota---</option>
                                    <option value="1" <?php if ($value->kode_kec == '1') {
                                                            echo 'selected';
                                                        } ?>>Kuningan</option>
                                    <option value="2" <?php if ($value->kode_kec == '2') {
                                                            echo 'selected';
                                                        } ?>>Cirebon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Kecamatan</label>
                                <input type="text" value="<?= $value->nama_kecamatan ?>" name="kecamatan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ongkos Kirim</label>
                                <input type="text" name="ongkir" value="<?= $value->ongkir ?>" class="form-control">
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

    <!-- edit desa -->
    <?php
    foreach ($desa as $key => $value) {
    ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="edit_desa<?= $value->id_desa ?>">
            <div class="modal-dialog" role="document">
                <form action="<?= base_url('admin/c_kelola_data/edit_desa/' . $value->id_desa) ?>" method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data Desa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Kabupaten/Kecamatan</label>
                                <select name="kabupaten" class="form-control" required>
                                    <option value="">---Pilih Desa---</option>
                                    <?php
                                    foreach ($kecamatan as $key => $items) {
                                    ?>
                                        <option value="<?= $items->id_kecamatan ?>" <?php if ($value->kode == $items->id_kecamatan) {
                                                                                        echo 'selected';
                                                                                    } ?>><?= $items->nama_kecamatan ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Desa</label>
                                <input type="text" value="<?= $value->nama_desa ?>" name="desa" class="form-control" required>
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
</div>