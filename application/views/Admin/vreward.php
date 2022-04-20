<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Reward</h1><br>

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
        ?>
        <div class="section-body">
            <h2 class="section-title">Informasi Reward</h2>
            <p class="section-lead">Berikut Merupakan Informasi terkait Reward HJ FOOD</p>
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
                                            <th>Nama Pelanggan</th>
                                            <th>Isi</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($reward as $key => $value) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td><?= $value->nama_pelanggan ?></td>

                                                <td><?= $value->isi ?></td>


                                                <td><?= $value->nama_desa ?> <?= $value->nama_kecamatan ?> <?= $value->alamat ?></td>
                                                <td><?= $value->no_hp ?></td>
                                                <td><?= $value->email ?></td>
                                                <td>
                                                    <?= $value->time ?>
                                                </td>
                                                <td><?php if ($value->validasi == '1') {
                                                    ?>
                                                        <span class="badge badge-danger">Belum Valid</span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="badge badge-success">Sudah Valid</span>
                                                    <?php
                                                    } ?>
                                                </td>
                                                <td> <a href="<?= base_url('admin/c_reward/validasi/' . $value->id_reward) ?>" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>

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