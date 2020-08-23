<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Edit Kelas</h2>
            </div>
            <div class="body">
                <?= form_open() ?>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_kelas" value="<?= $kelas->nama_kelas ?>">
                            <label class="form-label">Nama Kelas</label>
                        </div>
                    </div>
                    <button type="submit" class="bs-btn btn btn-primary waves-effect"><i class="fas fa-save fw"></i> SIMPAN</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>