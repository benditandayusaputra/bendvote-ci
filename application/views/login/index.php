<div class="sukses" data-sukses="<?= $this->session->flashdata('sukses') ?>"></div>
<div class="error" data-error="<?= $this->session->flashdata('error') ?>"></div>
<div class="container" style="padding-top: 40px;">
    <div class="row clearfix">
        <div class="col-xs-6 img-responsive">
            <img src="<?= base_url('uploads/b-logo.png') ?>" alt="Logo" class="img img-fluid" height="100px;" style="margin-bottom: 30px;">
        </div>
        <div class="col-xs-6">
        </div>
        <div class="col-xs-12">
            <div class="card" style="height: 70vh;">
                <div class="body">
                    <div class="error" data-error="<?= $this->session->flashdata('error') ?>"></div>
                    <?= form_open(base_url('login')) ?>
                        <h2 class="text-center" style="margin-bottom: 20px;">Login</h2>
                        <div class="form-group">
                            <label for="nis">NIS/NIP</label>
                            <div class="form-line">
                                <input type="text" class="form-control <?php if ( form_error('nis') ) { echo 'is-invalid'; } ?>" name="nis" id="nis" placeholder="NIS/NIP" value="<?= set_value('nis') ?>" />
                            </div>
                            <?= form_error('nis', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="token">TOKEN</label>
                            <div class="form-line">
                                <input type="text" class="form-control <?php if ( form_error('token') ) { echo 'is-invalid'; } ?>" name="token" id="token" placeholder="TOKEN" value="<?= set_value('token') ?>" />
                            </div>
                            <?= form_error('token', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="row">
                            <div class="col-xs-8"></div>
                            <div class="col-xs-4">
                                <button class="bs-btn btn btn-block bg-blue bs-mt-3 waves-effect" type="submit">LOGIN</button>
                            </div>
                        </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>