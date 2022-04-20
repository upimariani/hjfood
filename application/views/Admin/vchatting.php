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
            <p class="section-lead">The chat component and is equipped with a JavaScript API, making it easy for you to integrate with Back-end.</p>

            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Who's Online?</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                <?php
                                foreach ($list_chat as $key => $value) {
                                ?>
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="mt-0 mb-1 font-weight-bold"><a href="<?= base_url('admin/c_chatting/chat/' . $value->id_pelanggan) ?>"><?= $value->nama_pelanggan ?> <?= $value->time ?></a></div>
                                            <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i>
                                                <?php
                                                if ($value->pelanggan_send != '0') {
                                                ?>
                                                    <?= $value->pelanggan_send ?>
                                                <?php
                                                } else {
                                                ?>
                                                    <?= $value->admin_send ?>
                                                <?php
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>