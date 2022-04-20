<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Chat</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Chat Box</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Chat</h2>
            <p class="section-lead">Informasi Chatting Dari Pelanggan</p>

            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card chat-box card-success" id="mychatbox2">
                        <div class="card-header">
                            <h4><i class="fas fa-circle text-success mr-2" title="Online" data-toggle="tooltip"></i> Chat</h4>
                        </div>
                        <?php
                        foreach ($chat as $key => $value) {
                            $id = $value->id_pelanggan;
                            if ($value->pelanggan_send != '0') {
                        ?>
                                <div class="card-body text-right">
                                    <div class="badge badge-primary">
                                        <?= $value->nama_pelanggan ?> <?= $value->time ?>
                                    </div>
                                    <p><?= $value->pelanggan_send ?></p>
                                </div>

                            <?php
                            } else if ($value->admin_send != '0') {
                            ?>
                                <div class="card-body text-left">
                                    <div class="badge badge-success">
                                        Admin <?= $value->time ?>
                                    </div>
                                    <p><?= $value->admin_send ?></p>
                                </div>
                            <?php
                            }
                            ?>
                        <?php
                        }
                        ?>
                        <div class="card-footer chat-form">
                            <form id="chat-form2" action="<?= base_url('admin/c_chatting/send/' . $id) ?>" method="POST">
                                <input type="text" class="form-control" name="msg" placeholder="Type a message">
                                <button type="submit" class="btn btn-primary">
                                    <i class="far fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('admin/c_chatting') ?>" class="btn btn-warning">Kembali</a>
        </div>
    </section>
</div>