<section id="navsidebar">
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info" style="background: url('<?= base_url() ?>vendor/images/user-img-background.jpg') no-repeat no-repeat;">
            <div class="image">
                <img src="" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
                    Bendi Tandayu Saputra
                </div>
                <div class="btn-group user-helper-dropdown">
                    <i class="fas fa-angle-down fa-lg fa-fw" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="<?= base_url() ?>"><i class="fas fa-user fa-lg fa-fw"></i> Profil</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>"><i class="fas fa-user-edit fa-lg fa-fw"></i> Edit Profil</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?= base_url('admin/login/logout') ?>">
                            <i class="fas fa-sign-out-alt fa-lg fa-fw"></i> Log Out
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <i class="fas fa-home fa-lg fa-fw bs-mt-3"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/pemilih') ?>">
                        <i class="fas fa-users fa-lg fa-fw bs-mt-3"></i>
                        <span>Pemilih</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/calon') ?>">
                        <i class="fas fa-user-tie fa-lg fa-fw bs-mt-3"></i>
                        <span>Calon</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/pemilihan') ?>">
                        <i class="fas fa-pen fa-lg fa-fw bs-mt-3"></i>
                        <span>Pemilihan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/penilaian') ?>">
                        <i class="fas fa-sticky-note fa-lg fa-fw bs-mt-3"></i>
                        <span>Penilaian</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/aspirasi') ?>">
                        <i class="fas fa-sticky-note fa-lg fa-fw bs-mt-3"></i>
                        <span>Aspirasi</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/kelas') ?>">
                        <i class="fas fa-home fa-lg fa-fw bs-mt-3"></i>
                        <span>Kelas</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2020 <a href="<?= site_url('about') ?>">bendVote</a>.
            </div>
            <div class="version">
                <b>Version : </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>
