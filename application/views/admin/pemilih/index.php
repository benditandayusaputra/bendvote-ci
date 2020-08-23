<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>DATA PEMILIH</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Status Memilih</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach( $pemilih as $row ) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->nis ?></td>
                                <td><?= $row->nama_user ?></td>
                                <td><?= $row->nama_kelas ?></td>
                                <?php if( $row->jk == 0 ) : ?>
                                    <td>Perempuan</td>
                                <?php else : ?>
                                    <td>Laki-Laki</td>
                                <?php endif ?>
                                <?php if( $row->jenis_user == 0 ) : ?>
                                    <td>SISWA</td>
                                <?php else : ?>
                                    <td>GURU</td>
                                <?php endif ?>
                                <?php if( $row->status_pilih == 0 ) : ?>
                                    <td>Belum</td>
                                <?php else : ?>
                                    <td>Sudah</td>
                                <?php endif ?>
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