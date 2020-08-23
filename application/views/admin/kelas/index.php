<div class="sukses" data-sukses="<?= $this->session->flashdata('sukses') ?>"></div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>DATA KELAS</h2>
                <button class="bs-btn btn btn-primary waves-effect bs-mt-3" data-toggle="modal" data-target="#defaultModal"><i class="fas fa-plus"></i> TAMBAH KELAS</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA KELAS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach( $kelas as $kls ) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $kls->nama_kelas ?></td>
                                <td>
                                    <button class="bs-btn btn btn-success waves-effect" onclick="window.location = '<?= base_url('admin/kelas/edit/'.$kls->id_kelas) ?>'"><i class="fas fa-edit"></i> EDIT</button>
                                    <a href="<?= site_url('admin/kelas/hapus/'.$kls->id_kelas) ?>" class="bs-btn bs-btn-hapus btn btn-danger waves-effect"><i class="fas fa-trash"></i> HAPUS</a>
                                </td>
                            </tr>
                            <?php $no++ ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <?= form_open() ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="defaultModalLabel">Tambah Kelas</h2>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_kelas" value="<?= set_value('nama_kelas') ?>">
                            <label class="form-label">Nama Kelas</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect"><i class="fas fa-save fw"></i> SIMPAN</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="fas fa-times fw"></i> CLOSE</button>
            </div>
        </div>
    </div>
        <?= form_close() ?>
</div>