<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($this->session->userdata('user') != 'admin') {
    redirect(base_url());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Dashboard | El' Mio</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.ico">


    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/demo/chartist.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/demo/chartist-plugin-tooltip.css">

    <!-- Template -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/graindashboard.css">

</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
    <!-- Header -->
    <header class="header bg-body">
        <nav class="navbar flex-nowrap p-0">
            <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
                <!-- Logo For Mobile View -->
                <a class="navbar-brand navbar-brand-mobile" href="">
                    <img class="img-fluid w-100" src="<?php echo base_url()?>assets/img/logo-mini.png"
                        alt="Graindashboard">
                </a>
                <!-- End Logo For Mobile View -->

                <!-- Logo For Desktop View -->
                <a class="navbar-brand navbar-brand-desktop" href="">
                    <img class="side-nav-show-on-closed" src="<?php echo base_url()?>assets/img/logo-mini.png"
                        alt="Graindashboard" style="width: auto; height: 33px;">
                    <img class="side-nav-hide-on-closed" src="<?php echo base_url()?>assets/img/logo.png"
                        alt="Graindashboard" style="width: auto; height: 33px;">
                </a>
                <!-- End Logo For Desktop View -->
            </div>

            <div class="header-content col px-md-3">
                <div class="d-flex align-items-center">
                    <!-- Side Nav Toggle -->
                    <a class="js-side-nav header-invoker d-flex mr-md-2" href="#" data-close-invoker="#sidebarClose"
                        data-target="#sidebar" data-target-wrapper="body">
                        <i class="gd-align-left"></i>
                    </a>
                    <!-- End Side Nav Toggle -->

                    <!-- User Notifications -->
                    <div class="dropdown ml-auto">
                        <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications"
                            aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                            data-unfold-target="#notifications" data-unfold-type="css-animation"
                            data-unfold-duration="300" data-unfold-animation-in="fadeIn"
                            data-unfold-animation-out="fadeOut">
                            <span
                                class="indicator indicator-bordered indicator-top-right indicator-primary rounded-circle"></span>
                            <i class="gd-bell"></i>
                        </a>

                        <div id="notifications"
                            class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem unfold-css-animation unfold-hidden"
                            aria-labelledby="notificationsInvoker" style="animation-duration: 300ms;">
                            <div class="card">
                                <div class="card-header d-flex align-items-center border-bottom py-3">
                                    <h5 class="mb-0">Notifications</h5>
                                    <a class="link small ml-auto" href="#">Clear All</a>
                                </div>

                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center text-nowrap mb-2">
                                                <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                                <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                                <span class="list-group-item-date text-muted ml-auto">just now</span>
                                            </div>
                                            <p class="mb-0">
                                                Order <strong>#10000</strong> has been updated.
                                            </p>
                                            <a class="list-group-item-closer text-muted" href="#"><i
                                                    class="gd-close"></i></a>
                                        </div>
                                        <div class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center text-nowrap mb-2">
                                                <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                                <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                                <span class="list-group-item-date text-muted ml-auto">just now</span>
                                            </div>
                                            <p class="mb-0">
                                                Order <strong>#10001</strong> has been updated.
                                            </p>
                                            <a class="list-group-item-closer text-muted" href="#"><i
                                                    class="gd-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End User Notifications -->
                    <!-- User Avatar -->
                    <div class="dropdown mx-3 dropdown ml-2">
                        <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu"
                            aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                            data-unfold-target="#profileMenu" data-unfold-type="css-animation"
                            data-unfold-duration="300" data-unfold-animation-in="fadeIn"
                            data-unfold-animation-out="fadeOut">
                            <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                            <span class="d-none d-md-block">
                                <?= $this->session->userdata('id')?>
                            </span>
                            <i class="gd-angle-down d-none d-md-block ml-2"></i>
                        </a>

                        <ul id="profileMenu"
                            class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut"
                            aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                            <li class="unfold-item">
                                <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                                    <span class="unfold-item-icon mr-3">
                                        <i class="gd-user"></i>
                                    </span>
                                    My Profile
                                </a>
                            </li>
                            <li class="unfold-item unfold-item-has-divider">
                            <li class="unfold-item">
                                <a class="unfold-link d-flex align-items-center text-nowrap"
                                    href="<?php echo base_url() ?>Elmio/logout">
                                    <span class="unfold-item-icon mr-3">
                                        <i class="gd-power-off"></i>
                                    </span>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User Avatar -->
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <main class="main">
        <!-- Sidebar Nav -->
        <aside id="sidebar" class="js-custom-scroll side-nav">
            <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
                <!-- Title -->
                <li class="sidebar-heading h6">Dashboard</li>
                <!-- End Title -->

                <!-- Dashboard -->
                <li class="side-nav-menu-item active">
                    <a class="side-nav-menu-link media align-items-center" href="<?php echo base_url()?>Admin">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-dashboard"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                    </a>
                </li>
                <!-- End Dashboard -->

                <!-- Admins -->
                <li class="side-nav-menu-item side-nav-has-menu">
                    <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-user"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Admins</span>
                        <span class="side-nav-control-icon d-flex">
                            <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                        </span>
                        <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                    </a>

                    <!-- Users: subUsers -->
                    <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="<?php echo base_url()?>Admin/admins">All Admins</a>
                        </li>
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="<?php echo base_url()?>Admin/admin_input">Add new</a>
                        </li>
                    </ul>
                    <!-- End Users: subUsers -->
                </li>
                <!-- End Admins -->

                <!-- Users -->
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link media align-items-center" href="<?php echo base_url()?>Admin/users">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-user"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Pembeli</span>
                    </a>
                </li>
                <!-- End Users -->

                <!-- Menus -->
                <!-- Menus -->
                <li class="side-nav-menu-item side-nav-has-menu">
                    <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subOrders">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-receipt"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Menus</span>
                        <span class="side-nav-control-icon d-flex">
                            <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                        </span>
                        <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                    </a>

                    <!-- Users: subUsers -->
                    <ul id="subOrders" class="side-nav-menu side-nav-menu-second-level mb-0">
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="<?php echo base_url()?>Admin/menus">All Menus</a>
                        </li>
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="<?php echo base_url()?>Admin/menu_input">Add new</a>
                        </li>
                    </ul>
                    <!-- End Users: subUsers -->
                </li>
                <!-- End Menus -->
            </ul>
        </aside>
        <!-- End Sidebar Nav -->

        <div class="content">
            <div class="h3 mb-0 ml-4">Survey Data</div>
            <div class="row mt-5 py-2 px-3 px-md-4">
                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                            <i class="gd-bar-chart icon-text d-inline-block text-primary"></i>
                        </div>
                        <div>
                            <?php $query1 = $this->pesanan_model->tampilPesanan();
                                $jumlah1 = 0;
                                foreach ($query1 as $row1) {
                                    $jumlah1 += 1; }?>
                            <h4 class="lh-1 mb-1 ml-2"><?= $jumlah1; ?></h4>
                            <h6 class="mb-0 ml-2">Total Pesanan</h6>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>

                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-secondary rounded-circle mr-3">
                            <i class="gd-wallet icon-text d-inline-block text-secondary"></i>
                        </div>
                        <div>
                            <?php $query2 = $this->pesanan_model->tampilPesanan();
                                $jumlah2 = 0;
                                foreach ($query2 as $row2) {
                                    $jumlah2 += $row2->total; }?>
                            <h4 class="lh-1 mb-1 ml-2"><?= 'Rp '.$jumlah2; ?></h4>
                            <h6 class="mb-0 ml-2">Total Pendapatan</h6>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>

                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-warning rounded-circle mr-3">
                            <i class="gd-receipt icon-text d-inline-block text-warning"></i>
                        </div>
                        <div>
                            <?php $query3 = $this->menu_model->tampilMenu();
                                $jumlah3 = 0;
                                foreach ($query3 as $row3) {
                                    $jumlah3 += 1; }?>
                            <h4 class="lh-1 mb-1 ml-2"><?= $jumlah3; ?></h4>
                            <h6 class="mb-0 ml-2">Total Menu</h6>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>

            </div>
            <div class="px-3 px-md-4">
                <div class="mb-3 mb-md-4 d-flex justify-content-between">
                    <div class="h3 mb-0">Recent Orders</div>
                </div>
                <?php $queryOrder = $this->pesanan_model->tampilPesanan();
                                $deck = 1;
                                foreach ($queryOrder as $rowPesanan) {
                                    if($deck % 2 == 1) { ?>
                <div class="row"> <?php } ?>
                    <div class="col-md-6">
                        <!-- Card -->
                        <div class="card mb-3 mb-md-4">
                            <div class="card-header d-xl-flex">
                                <h5 class="font-weight-semi-bold mb-0"><?php echo $rowPesanan->id_pesanan; ?></h5>
                                <div class="nav-mobile-container ml-auto">
                                    <?php echo $rowPesanan->nama; ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-xl">
                                    <table class="table text-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Nama Menu</th>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Jumlah</th>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Harga</th>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $queryDetail = $this->pesanan_model->tampilDetailPesananPembeli($rowPesanan->id_pesanan);
                                                        foreach ($queryDetail as $rowDetail) { ?>
                                            <tr>
                                                <td class="py-3"><?php echo $rowDetail->nama; ?></td>
                                                <td class="py-3"><?php echo $rowDetail->jumlah; ?></td>
                                                <td class="py-3">Rp
                                                    <?php echo $rowDetail->jumlah * $rowDetail->harga; ?></td>
                                                <td class="py-3">
                                                    <div class="position-relative">
                                                        <a class="link-dark d-inline-block" href="#">
                                                            <i class="gd-pencil icon-text"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <?php $deck += 1;
                    if ($deck % 2 == 1) { ?>
                </div> <?php } } ?>
            </div>

            <!-- Footer -->
            <footer class="small p-3 px-md-4 mt-auto">
                <div class="row justify-content-between">
                    <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                        <ul class="list-dot list-inline mb-0">
                            <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark"
                                    href="#">FAQ</a></li>
                            <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Support</a>
                            </li>
                            <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Contact
                                    us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg text-center mb-3 mb-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i
                                        class="gd-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i
                                        class="gd-facebook"></i></a></li>
                            <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i
                                        class="gd-github"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-lg text-center text-lg-right">
                        &copy; 2019 Graindashboard. All Rights Reserved.
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </main>


    <script src="<?php echo base_url()?>assets/js/graindashboard.js"></script>
    <script src="<?php echo base_url()?>assets/js/graindashboard.vendor.js"></script>
</body>

</html>