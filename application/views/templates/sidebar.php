<?php
$roles = $this->session->userdata('roles');
$active_role = $this->session->userdata('active_role');
?>

<?php if (in_array('admin', $roles) && $active_role === 'admin'): ?>
    <a href="<?= base_url('auth/switch_role') ?>">Switch to Employee View</a>
<?php endif; ?>


<ul class="side-menu">
    <li class="sub-category">
        <h3>Main</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/dashboard">
            <i class="side-menu__icon fe fe-home"></i>
            <span class="side-menu__label">Dashboard</span>
        </a>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/files">
            <i class="side-menu__icon fe fe-home"></i>
            <span class="side-menu__label">Files</span>
        </a>
    </li>
    <li class="sub-category">
        <h3>Filter</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/sector">
            <i class="side-menu__icon fe fe-briefcase"></i>
            <span class="side-menu__label">Sectors</span>
        </a>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/spotlight">
            <i class="side-menu__icon fe fe-pocket"></i>
            <span class="side-menu__label">Spotlight</span>
        </a>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/geography">
            <i class="side-menu__icon fe fe-pocket"></i>
            <span class="side-menu__label">Geography</span>
        </a>
    </li>
    <li class="sub-category">
        <h3>Perspectives</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/perspectives">
            <i class="side-menu__icon fe fe-briefcase"></i>
            <span class="side-menu__label">Perspectives</span>
        </a>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/perspectives/add">
            <i class="side-menu__icon fe fe-pocket"></i>
            <span class="side-menu__label">Add Perspectives</span>
        </a>
    </li>
    <li class="sub-category">
        <h3>Podcast</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/podcast/">
            <i class="side-menu__icon fe fe-map"></i>
            <span class="side-menu__label">Podcast</span>
        </a>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/podcast/add">
            <i class="side-menu__icon fe fe-pie-chart"></i>
            <span class="side-menu__label">Add Podcast</span>
        </a>
    </li>
    <li class="sub-category">
        <h3>Webinar</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/webinar/">
            <i class="side-menu__icon fe fe-map"></i>
            <span class="side-menu__label">Webinar</span>
        </a>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/webinar/add">
            <i class="side-menu__icon fe fe-pie-chart"></i>
            <span class="side-menu__label">Add Webinar</span>
        </a>
    </li>
    <li class="sub-category">
        <h3>Users Managment</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/user">
            <i class="side-menu__icon fe fe-user"></i>
            <span class="side-menu__label">Users</span>
        </a>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/create-user">
            <i class="side-menu__icon fe fe-user-plus"></i>
            <span class="side-menu__label">Add User</span>
        </a>
    </li>
    <li class="sub-category">
        <h3>System Setting</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" data-bs-toggle="slide" href="<?= base_url() ?>vant-panel/setting">
            <i class="side-menu__icon fe fe-settings"></i>
            <span class="side-menu__label">Setting</span>
        </a>
    </li>
    <li class="slide">
        <a class="side-menu__item py-1" href="<?php base_url() ?>api/v1/get/logout">
            <i class="side-menu__icon fe fe-log-out"></i>
            <span class="side-menu__label">Logout</span>
        </a>
    </li>
</ul>
<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
    </svg>
</div>
</div>
</div>
<!--/APP-SIDEBAR-->
</div>
<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->