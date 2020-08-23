<div class="container" style="margin-top: 50px;">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-2 col-xs-1"></div>
        <div class="col-lg-6 col-md-8 col-xs-10 aspirasi">
            <div class="card">
                <div class="header text-center">
                    <h2>Aspirasi Kalian Untuk Osis Yang Sekarang</h2>
                </div>
                <div class="body">
                <?= form_open(base_url('aspirasi')) ?>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea id="aspirasi" class="form-control" name="aspirasi" rows="5" placeholder="Tulis Di Sini"></textarea>
                        </div>
                        <?= form_error('aspirasi', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <button class="bs-btn btn btn-primary btn-block waves-effect">SELESAI</button>
                <?= form_close() ?>
                </div>
            </div>
            <?php foreach( $aspirasi as $row ) : ?>
                <h4 class="text-center"><?= $row->aspirasi ?></h4>
            <?php endforeach ?>
        </div>
        <div class="col-lg-3 col-md-2 col-xs-1"></div>
    </div>
</div>