
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $title ?></title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fontawesome/css/all.min.css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('vendor/') ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url('vendor/') ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url('vendor/') ?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url('vendor/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/mystyle.css" rel="stylesheet" />
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Bend<b>vote</b></a>
            <small>SMK N 1 Bondolharjo</small>
        </div>
        <div class="card">
            <div class="body">
                <?= form_open(base_url('admin/login')) ?>
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fas fa-user fa-lg fa-fw"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                        </div>
                        <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fas fa-lock fa-lg fa-fw"></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                        </div>
                        <div class="col-xs-4">
                            <button class="bs-btn btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('vendor/') ?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('vendor/') ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('vendor/') ?>plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= base_url('vendor/') ?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('vendor/') ?>js/admin.js"></script>
    <script src="<?= base_url('vendor/') ?>js/pages/examples/sign-in.js"></script>
    <script src="<?= base_url() ?>assets/js/myscript.js"></script>
</body>

</html>