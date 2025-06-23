<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- ✅ Meta Basics -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Vantedge - Manage clients, tasks and campaigns seamlessly">
    <meta name="author" content="Team Vantedge">
    <base href="<?=base_url() ?>">

    <!-- ✅ Page Title -->
    <title><?= $title ?? 'EMS' ?></title>

    <!-- ✅ Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/images/brand/favicon.ico">

    <!-- ✅ Core CSS -->
    <link href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/dark-style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/transparent-style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/skin-modes.css" rel="stylesheet">

    <!-- ✅ Icons & Fonts -->
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet">

    <!-- ✅ Theme Colors -->
    <link id="theme" href="<?= base_url() ?>assets/colors/color1.css" rel="stylesheet" media="all">

    <!-- ✅ Scripts -->
    <script src="<?= base_url() ?>assets/script/global.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
</head>

<body class="app sidebar-mini ltr light-mode">
    <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="<?= base_url() ?>control/dashboard">
                            <img src="<?= base_url() ?>assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="<?= base_url() ?>assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2 justify-content-end">
                                        <div class="dropdown  d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="<?= base_url() ?>assets/images/users/21.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold"><?= $this->session->userdata('name') ?></h5>
                                                        <!-- <small class="text-muted">Senior Admin</small> -->
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="profile.html">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="<?= base_url('/api/v1/get/logout') ?>">
                                                    <i class="dropdown-icon fe fe-log-out"></i> Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->
            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="<?= base_url() ?>console-admin/dashboard">
                            <img src="<?= base_url() ?>assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="<?= base_url() ?>assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="<?= base_url() ?>assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="<?= base_url() ?>assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg>
                        </div>
                        <!-- Sidebar -->
