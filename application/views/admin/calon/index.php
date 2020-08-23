<div class="sukses" data-sukses="<?= $this->session->flashdata('sukses') ?>"></div>
<div class="row clearfix">
    <?php foreach( $calon as $row ) : ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    	<div class="card">
    		<div class="header text-center">
    			<h2><?= $row->nama_calon ?></h2>
    		</div>
    		<div class="body img-responsive">
    			<img src="<?= base_url('uploads/'.$row->foto_calon) ?>" class="img img-thumbnail">
	    		<div class="row bs-mt-3">
					<div class="col-lg-12 col-md-12 col-xs-12 text-justify">
						<div class="col-xs-6 col-lg-6 col-md-6 bs-mt-3">
							<button type="button" class="bs-btn btn btn-success waves-effect btn-block" onclick="window.location = '<?= base_url('admin/calon/edit/'.$row->slug_calon) ?>'"><i class="fas fa-edit fw"></i> EDIT</button>
						</div>
						<div class="col-xs-6 col-lg-6 col-md-6 bs-mt-3">
							<a href="<?= base_url('admin/calon/hapus/'.$row->slug_calon) ?>" class="bs-btn bs-btn-hapus btn btn-danger waves-effect btn-block"><i class="fas fa-trash fw"></i> HAPUS</a>
						</div>
						<button type="button" class="bs-btn btn btn-info waves-effect btn-block" data-toggle="modal" data-target="#<?= $row->slug_calon ?>"><i class="fas fa-eye fw"></i> LIHAT VISI & MISI</button>
					</div>
				</div>
    		</div>
    	</div>
    </div>
    <?php endforeach ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    	<div class="card">
    		<div class="header text-center">
    			<h2>TAMBAH CALON KETUA & WAKIL KETUA OSIS</h2>
    		</div>
    		<div class="body img-responsive">
	    		<div class="row bs-mt-3">
					<button type="button" class="bs-btn btn btn-info waves-effect btn-block" onclick="window.location = '<?= site_url('admin/calon/tambah') ?>'"><i class="fas fa-plus fw"></i> TAMBAH</button>
				</div>
    		</div>
    	</div>
    </div>
</div>

<?php foreach( $cln as $row ) : ?>
<div class="modal fade" id="<?= $row->slug_calon ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="defaultModalLabel"><?= $row->nama_calon ?></h2>
            </div>
            <div class="modal-body">
            	<div class="row bs-mt-3">
					<div class="col-lg-12 col-md-12 col-xs-12">
		                <h3>VISI</h3>
						<?= $row->visi ?>
					</div>
				</div>
				<div class="row bs-mt-3">
					<div class="col-lg-12 col-md-12 col-xs-12">
						<h3>MISI</h3>
						<?= $row->misi ?>
					</div>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary waves-effect"><i class="fas fa-edit fw"></i> EDIT</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="fas fa-times fw"></i> CLOSE</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>