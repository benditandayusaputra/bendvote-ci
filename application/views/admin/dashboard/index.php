<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <i class="fas fa-user-tie fw"></i>
            </div>
            <div class="content">
                <div class="text">CALON</div>
                <div class="number count-to" data-from="0" data-to="<?= $jumlah_calon->jumlah_calon ?>" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="content">
                <div class="text">PEMILIH</div>
                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="content">
                <div class="text">SUDAH PEMILIH</div>
                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="fas fa-sticky-note"></i>
            </div>
            <div class="content">
                <div class="text">ASPIRASI</div>
                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    	<div class="card">
    		<div class="header text-center">
    			<h2>NAMA CALON KETUA & WAKIL KETUA OSIS</h2>
    		</div>
    		<div class="body img-responsive">
    			<img src="<?= base_url('uploads/bend.jpg') ?>" class="img img-thumbnail">
	    		<div class="row bs-mt-3">
					<div class="col-lg-12 col-md-12 col-xs-12 text-justify">
						<div class="col-xs-6 col-lg-6 col-md-6 bs-mt-3">
							<button type="button" class="bs-btn btn btn-success waves-effect btn-block" data-toggle="modal" data-target="#defaultModal"><i class="fas fa-edit fw"></i> EDIT</button>
						</div>
						<div class="col-xs-6 col-lg-6 col-md-6 bs-mt-3">
							<button type="button" class="bs-btn btn btn-danger waves-effect btn-block" data-toggle="modal" data-target="#defaultModal"><i class="fas fa-trash fw"></i> HAPUS</button>
						</div>
						<button type="button" class="bs-btn btn btn-info waves-effect btn-block" data-toggle="modal" data-target="#defaultModal"><i class="fas fa-eye fw"></i> LIHAT VISI & MISI</button>
					</div>
				</div>
    		</div>
    	</div>
    </div>
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

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="defaultModalLabel">BENDI TANDAYU SAPUTRA</h2>
            </div>
            <div class="modal-body">
            	<div class="row bs-mt-3">
					<div class="col-lg-12 col-md-12 col-xs-12 text-justify">
		                <h3>VISI</h3>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="row bs-mt-3">
					<div class="col-lg-12 col-md-12 col-xs-12 text-justify">
						<h3>MISI</h3>
						<ol>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</li>
						</ol>
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