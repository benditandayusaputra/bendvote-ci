<style>
    .bv-container {
        margin-bottom: 10px;
    }

    .container-star {
        padding: 7px;
        font-size: 20px;
        display: inline-block;
    }

    .fa-star:hover {
        cursor: pointer;
    }

    .yellow {
        color: yellow;
    }
</style>
<div class="container" style="padding: 30px 15px;">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header text-center bg-blue">
                    <h2 style="font-size: 26px;"><?= $osis->nama_calon ?></h2>
                </div>
                <div class="body img-responsive text-center">
                    <img src="<?= base_url('uploads/'.$osis->foto_calon) ?>" class="img img-thumbnail">
                    <div class="row bs-mt-3">
                        <?= form_open(base_url('penilaian/nilai')) ?>
                        <input type="hidden" name="id_calon" id="id_calon" value="<?= $osis->id_calon ?>">
                        <input type="hidden" name="nilai" id="nilai" value="0">
                        <div class="col-lg-12 col-md-12 col-xs-12 text-center">
                            <div class="col-xs-12 col-lg-12 col-md-12 bv-container">
                                <div class="container-star">
                                    <i class="fas fa-star fa-lg fa-fw" id="nilai1"></i>
                                </div>
                                <div class="container-star">
                                    <i class="fas fa-star fa-lg fa-fw" id="nilai2"></i>
                                </div>
                                <div class="container-star">
                                    <i class="fas fa-star fa-lg fa-fw" id="nilai3"></i>
                                </div>
                                <div class="container-star">
                                    <i class="fas fa-star fa-lg fa-fw" id="nilai4"></i>
                                </div>
                                <div class="container-star">
                                    <i class="fas fa-star fa-lg fa-fw" id="nilai5"></i>
                                </div>
                                <h3 id="text"></h3>
                            </div>
                            <div class="col-xs-12 col-lg-12 col-md-12 bs-mt-3">
                            <button type="submit" class="bs-btn btn btn-primary waves-effect btn-block">Nilai</button>
                            </div>
                        </div>
                        <?= form_open() ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3"></div>
    </div>
</div>