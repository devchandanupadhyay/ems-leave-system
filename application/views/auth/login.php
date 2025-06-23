<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Login to EMS">
    <meta name="author" content="Chandan Upadhyay">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/brand/favicon.ico" />
    <title><?= (!isset($meta['title']) ? 'Mailing Server' : $meta['title']) ?></title>
    <link id="style" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" />
</head>

<body class="">
    <div class="login-img w-100 overflow-hidden" style="background: #3da9cf;">
        <div class="row">
            <div class="col-lg-5">
                <div class="page d-none d-sm-none d-md-flex d-lg-flex d-xl-flex ">
                    <div>
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/images/brand/logo.png" class="header-brand-img mb-4" alt="logo">
                            <h1 class="text-white">Login to EMS</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="page bg-white">
                    <div>
                        <!-- CONTAINER OPEN -->
                        <div class="container-login100">
                            <div class="p-6">
                                <form class="login100-form validate-form authentication-form" method="post" action="<?= base_url('auth/login') ?>">
                                    <div class="panel panel-primary">
                                        <div class="panel-body tabs-menu-body p-0 pt-5">
                                            <div class="tab-content">
                                                <?php if ($this->session->flashdata('error')): ?>
                                                    <p class="text-center text-danger"><?= $this->session->flashdata('error') ?></p>
                                                <?php endif; ?>
                                                <form method="post" action="<?= base_url('auth/login') ?>">
                                                    <div class="tab-pane active" id="tab5">
                                                        <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                            </a>
                                                            <input class="input100 border-start-0 form-control ms-0" type="email" name="email" id="email" placeholder="Email">
                                                        </div>
                                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                            </a>
                                                            <input class="input100 border-start-0 form-control ms-0" type="password" id="password" name="password" placeholder="Password">
                                                        </div>
                                                        <div class="wrap-input100 validate-input input-group">
                                                            <select class="input100 form-control ms-0" name="login_as" id="login_as">
                                                                <option value="employee">Employee</option>
                                                                <option value="admin">Admin</option>
                                                                <option value="hr">HR</option>
                                                            </select>
                                                            <label for="login_as" class="input-group-text bg-white text-muted">
                                                                <i class="zmdi zmdi-caret-down text-muted"></i>
                                                            </label>
                                                        </div>
                                                        <div class="container-login100-form-btn">
                                                            <input type="submit" value="Login" class="login100-form-btn btn-primary">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/show-password.min.js"></script>
</body>

</html>