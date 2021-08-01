<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($this->session->userdata('user') != 'user') {
    redirect(base_url());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Welcome | El' Mio</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.ico">

    <!-- Template -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/graindashboard.css">
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <!-- Logo For Mobile View -->
            <a class="navbar-brand navbar-brand-mobile" href="">
                <img class="img-fluid w-100" src="<?php echo base_url() ?>assets/img/logo-mini.png" alt="Graindashboard">
            </a>
            <!-- End Logo For Mobile View -->

            <!-- Logo For Desktop View -->
            <a class="navbar-brand navbar-brand-desktop" href="">
                <img class="side-nav-show-on-closed" src="<?php echo base_url() ?>assets/img/logo-mini.png" alt="Graindashboard" style="width: auto; height: 33px;">
                <img class="side-nav-hide-on-closed" src="<?php echo base_url() ?>assets/img/logo.png" alt="Graindashboard" style="width: auto; height: 33px;">
            </a>
            <!-- End Logo For Desktop View -->
        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <!-- Side Nav Toggle -->
                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
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
                                <a class="unfold-link d-flex align-items-center text-nowrap" href="<?php echo base_url() ?>Elmio/logout">
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
            <li class="sidebar-heading h6">Navigasi Pembeli</li>
            <!-- End Title -->

            <!-- Getting Started -->
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="<?php echo base_url()?>User">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-home"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Home Restaurant</span>
                </a>
            </li>
            <!-- End Getting Started -->
            <!-- My Order -->
            <li class="side-nav-menu-item side-nav-has-menu">
                    <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subOrder">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-user"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">My Order</span>
                        <span class="side-nav-control-icon d-flex">
                            <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                        </span>
                        <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                    </a>

                    <!-- Users: subUsers -->
                    <ul id="subOrder" class="side-nav-menu side-nav-menu-second-level mb-0">
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="<?php echo base_url()?>User/order_input">Add Some Order</a>
                        </li>
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="<?php echo base_url()?>Admin/lihat_order">See my Order</a>
                        </li>
                    </ul>
                    <!-- End Users: subUsers -->
                </li>
                <!-- End My Order -->
        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Recent Orders</div>
            </div>
                <div class="card mb-3">
                    <div class="card-body pt-0">
                        <div class="table-responsive-xl">
                            <table class="table text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-4">ID Pesanan</th>
                                        <th class="font-weight-semi-bold border-top-0 py-4">Total</th>
                                        <th class="font-weight-semi-bold border-top-0 py-4">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $queryOrder = $this->pesanan_model->tampilPesananPembeli($this->session->userdata('id'));
                                                foreach ($queryOrder as $rowPesanan) {
                                            ?>
                                            <tr>
                                                <td class="py-3"><?php echo $rowPesanan->id_pesanan; ?></td>
                                                <td class="py-3">Rp <?php echo $rowPesanan->total; ?></td>
                                                <td class="py-3">
                                                    <div class="position-relative">
                                                        <a id="dropDown16Invoker" class="link-dark d-flex" href="#" aria-controls="dropDown16" aria-haspopup="true" aria-expanded="false" data-unfold-target="#dropDown16" data-unfold-event="click" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                                            <i class="gd-more-alt icon-text"></i>
                                                        </a>

                                                        <ul id="dropDown16" class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="dropDown16Invoker" style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                                            <li class="unfold-item">
                                                                <a class="unfold-link media align-items-center text-nowrap" href="#">
                                                                    <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                                    <span class="media-body">Edit</span>
                                                                </a>
                                                            </li>
                                                            <li class="unfold-item">
                                                                <a class="unfold-link media align-items-center text-nowrap" href="#">
                                                                    <i class="gd-close unfold-item-icon mr-3"></i>
                                                                    <span class="media-body">Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Footer -->
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                    <ul class="list-dot list-inline mb-0">
                        <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark" href="https://graindashboard.com/documentation/" target="_blank">Online Documentation</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="mailto:support@graindashboard.com">Support</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="changelog.php">Changelog</a></li>
                    </ul>
                </div>


                <div class="col-lg text-center text-lg-right">
                    &copy; 2019 <a href="https://graindashboard.com" target="_blank">Graindashboard</a>. All Rights Reserved.
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>


<script src="<?php echo base_url() ?>assets/js/graindashboard.js"></script>
<script src="<?php echo base_url() ?>assets/js/graindashboard.vendor.js"></script>

</body>
</html>
