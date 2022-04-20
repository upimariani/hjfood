<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kurir</h1><br>
        </div>
        <?php
        if ($this->session->userdata('pesan')) {
            echo ' <div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title">Success</div>';
            echo $this->session->userdata('pesan');
            echo '</div></div>';
        }
        if ($this->session->userdata('eror')) {
            echo ' <div class="alert alert-danger alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title">Danger</div>';
            echo $this->session->userdata('eror');
            echo '</div></div>';
        }
        ?>
        <div class="section-body">
            <h2 class="section-title">Informasi Kurir</h2>
            <p class="section-lead">Berikut Merupakan Informasi terkait Kurir HJ FOOD</p>

            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Kurir</button>
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
                                            <th>Nama Kurir</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No Hp</th>
                                            <th>Username/Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($kurir as $key => $value) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td><?= $value->nama_user ?></td>
                                                <td><?= $value->alamat ?></td>
                                                <td><?= $value->jk ?></td>
                                                <td><?= $value->no_hp ?></td>
                                                <td><span class="badge badge-warning"><?= $value->username ?></span><span class="badge badge-danger"><?= $value->password ?></span></td>
                                                <td> <a href="<?= base_url('admin/c_kelola_data/hapus_kurir/' . $value->id_user . '/' . $value->id_user) ?>" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                                    <button data-toggle="modal" data-target="#edit<?= $value->id_user ?>" class="btn btn-icon btn-success"><i class="far fa-edit"></i></button>
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
                    <h5 class="modal-title">Tambah Data Kurir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/c_kelola_data/simpan_kurir') ?>" method="POST">
                        <div class="form-group">
                            <label>Nama Kurir</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control" required>
                                <option value="">---Pilih Jenis Kelamin---</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input class="form-control" name="no_hp" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="13" minlength="11" required />
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" required>
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

    <!-- edit kurir -->
    <?php
    foreach ($kurir as $key => $value) {
    ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="edit<?= $value->id_user ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Kurir</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/c_kelola_data/edit_kurir/' . $value->id_user) ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Kurir</label>
                                <input type="text" name="nama" value="<?= $value->nama_user ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control" required>
                                    <option value="">---Pilih Jenis Kelamin---</option>
                                    <option value="Perempuan" <?php if ($value->jk == 'Perempuan') {
                                                                    echo 'selected';
                                                                } ?>>Perempuan</option>
                                    <option value="Laki-Laki" <?php if ($value->jk == 'Laki-Laki') {
                                                                    echo 'selected';
                                                                } ?>>Laki-Laki</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Hp</label>
                                <input value="<?= $value->no_hp ?>" class="form-control" name="no_hp" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="13" minlength="11" required />
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?= $value->username ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?= $value->password ?>" class="form-control" required>
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