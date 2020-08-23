<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>DATA PENILAIAN</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach( $nilai as $row ) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->nama_user ?></td>
                                <td><?= $row->nilai ?></td>
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