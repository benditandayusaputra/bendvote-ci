<div class="container">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12" style="margin-top: 50px;">
            <div class="card profile-card">
                <div class="profile-header bg-blue">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img src="<?= base_url('assets/img/1.png') ?>" alt="Gambar" width="200px" style="border: 2px solid #2196f3;" />
                    </div>
                    <div class="content-area">
                        <h3><?= $user->nama_user ?></h3>
                        <p style="color: black;">SISWA</p>
                    </div>
                </div>
                <div class="profile-footer">
                    <div class="container">
                        <table class="table table-light">
                            <tbody>
                                <tr>
                                    <th width="50px">NIS</th>
                                    <th>: 15532</th>
                                </tr>
                                <tr>
                                    <th width="50px">KELAS</th>
                                    <th>: 15532</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row clearfix">
                        <div class="col-xs-6">
                            <button class="bs-btn btn btn-danger btn-lg waves-effect btn-block">
                                <i class="fas fa-backward fa-lg fa-fw"></i> KEMBALI
                            </button>
                        </div>
                        <div class="col-xs-6">
                            <button class="bs-btn btn btn-success btn-lg waves-effect btn-block" onclick="window.location = '<?= site_url('pemilihan') ?>'">
                                LANJUTKAN <i class="fas fa-forward fa-lg fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>