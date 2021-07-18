<?php 
include '../models/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Dashboard | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico">


    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="../assets/demo/chartist.css">
    <link rel="stylesheet" href="../assets/demo/chartist-plugin-tooltip.css">

    <!-- Template -->
    <link rel="stylesheet" href="../assets/css/graindashboard.css">

</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
    <!-- Header -->
    <header class="header bg-body">
        <nav class="navbar flex-nowrap p-0">
            <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
                <!-- Logo For Mobile View -->
                <a class="navbar-brand navbar-brand-mobile" href="
                <?php if(isset($_SESSION['name'])){
                    echo 'main.php';
                } else {
                    echo '../controllers/proses.php?aksi=logout';
                }?>">
                    <img class="img-fluid w-100" src="../assets/img/logo-mini.png" alt="Graindashboard">
                </a>
                <!-- End Logo For Mobile View -->

                <!-- Logo For Desktop View -->
                <a class="navbar-brand navbar-brand-desktop" href="
                <?php if(isset($_SESSION['name'])){
                    echo 'main.php';
                } else {
                    echo '../controllers/proses.php?aksi=logout';
                }?>">
                    <img class="side-nav-show-on-closed" src="../assets/img/logo-mini.png" alt="Graindashboard"
                        style="width: auto; height: 33px;">
                    <img class="side-nav-hide-on-closed" src="../assets/img/logo.png" alt="Graindashboard"
                        style="width: auto; height: 33px;">
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
                                <?php if(isset($_SESSION['name'])){
                                    echo $_SESSION['name'];
                                } else {
                                    echo ' ';
                                }?>
                            </span>
                            <i class="gd-angle-down d-none d-md-block ml-2"></i>
                        </a>

                        <ul id="profileMenu"
                            class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut"
                            aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                            <?php if(isset($_SESSION['name'])){
                            echo '<li class="unfold-item">
                                <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                                    <span class="unfold-item-icon mr-3">
                                        <i class="gd-user"></i>
                                    </span>
                                    My Profile
                                </a>
                            </li>
                            <li class="unfold-item unfold-item-has-divider">';
                            } else {
                            echo '<li class="unfold-item">';
                            } ?>
                                <a class="unfold-link d-flex align-items-center text-nowrap" href="
                                    <?php if(isset($_SESSION['name'])){
                                        echo '../controllers/proses.php?aksi=logout';
                                    } else {
                                        echo '../views';
                                    } ?>">
                                    <span class="unfold-item-icon mr-3">
                                        <i class="gd-power-off"></i>
                                    </span>
                                    <?php if(isset($_SESSION['name'])){
                                        echo 'Sign Out';
                                    } else {
                                        echo 'Sign In';
                                    } ?>
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
                    <a class="side-nav-menu-link media align-items-center" href="main.php">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-dashboard"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                    </a>
                </li>
                <!-- End Dashboard -->

                <!-- Add Order -->
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link media align-items-center" href="order_input.php">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-shopping-cart"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Add Order</span>
                    </a>
                </li>
                <!-- End Order -->

                <!-- Documentation --
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link media align-items-center" href="documentation/" target="_blank">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-file"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Documentation</span>
                    </a>
                </li>
                <-- End Documentation -->

                <!-- Title --
                    <li class="sidebar-heading h6">Examples</li>
                <-- End Title -->

                <!-- Users -->
                <li class="side-nav-menu-item side-nav-has-menu">
                    <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-user"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Users</span>
                        <span class="side-nav-control-icon d-flex">
                            <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                        </span>
                        <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                    </a>

                    <!-- Users: subUsers -->
                    <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="users.php">All Users</a>
                        </li>
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="users_input.php">Add new</a>
                        </li>
                    </ul>
                    <!-- End Users: subUsers -->
                </li>
                <!-- End Users -->

                <!-- Authentication --
                <li class="side-nav-menu-item side-nav-has-menu">
                    <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subPages">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-lock"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Authentication</span>
                        <span class="side-nav-control-icon d-flex">
                            <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                        </span>
                        <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                    </a>

                    <-- Pages: subPages --
                    <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="index.php">Login</a>
                        </li>
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="register.php">Register</a>
                        </li>
                    </ul>
                    <-- End Pages: subPages --
                </li>
                <-- End Authentication -->

                <!-- Settings -->
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link media align-items-center" href="settings.php">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-settings"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Settings</span>
                    </a>
                </li>
                <!-- End Settings -->

                <!-- Static -->
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link media align-items-center" href="static-non-auth.php">
                        <span class="side-nav-menu-icon d-flex mr-3">
                            <i class="gd-file"></i>
                        </span>
                        <span class="side-nav-fadeout-on-closed media-body">Static page</span>
                    </a>
                </li>
                <!-- End Static -->

            </ul>
        </aside>
        <!-- End Sidebar Nav -->

        <div class="content">
            <div class="py-4 px-3 px-md-4">

                <div class="mb-3 mb-md-4 d-flex justify-content-between">
                    <div class="h3 mb-0">Dashboard</div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <div class="card-header d-flex">
                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Inventory Stock</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="media align-items-center px-3 px-md-4 mb-3 mb-md-4">
                                    <div class="media-body">
                                        <h4 class="h3 lh-1 mb-2">$25,312.24</h4>
                                        <p class="small text-muted mb-0">
                                            +$5,213.38 <span class="text-success mx-1">+10.23%</span> This Month
                                        </p>
                                    </div>
                                </div>

                                <div class="js-area-chart chart--points-invisible chart--labels-hidden position-relative"
                                    data-series='[
                             [
                               {"meta":"Items","value":"700"},
                               {"meta":"Items","value":"520"},
                               {"meta":"Items","value":"470"},
                               {"meta":"Items","value":"580"},
                               {"meta":"Items","value":"380"},
                               {"meta":"Items","value":"600"},
                               {"meta":"Items","value":"707"},
                               {"meta":"Items","value":"400"},
                               {"meta":"Items","value":"301"},
                               {"meta":"Items","value":"530"},
                               {"meta":"Items","value":"600"},
                               {"meta":"Items","value":"403"},
                               {"meta":"Items","value":"550"},
                               {"meta":"Items","value":"400"},
                               {"meta":"Items","value":"300"},
                               {"meta":"Items","value":"700"},
                               {"meta":"Items","value":"630"}
                             ]
                           ]' data-height="115" data-high="1000" data-chart-padding='{"top": 5}'
                                    data-is-hide-area="true" data-line-colors='["#8069f2"]' data-line-dasharrays='[0,0]'
                                    data-line-width='["2px","2px"]' data-is-line-smooth='[false]' data-fill-opacity="1"
                                    data-fill-colors='["#8069f2"]' data-stroke-dash-array-axis-y="4"
                                    data-is-show-tooltips="true"
                                    data-tooltip-custom-class="chart-tooltip chart-tooltip--sections-blocked chart-tooltip__meta--text-muted small text-white text-nowrap p-2"
                                    data-tooltip-currency="In Stock " data-is-show-points="true"
                                    data-point-custom-class='chart__point--donut chart__point--border-xs border-primary rounded-circle'
                                    data-point-dimensions='{"width":15,"height":15}'></div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <div class="card-header d-flex">
                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Orders History</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="media align-items-center px-3 px-md-4 mb-3 mb-md-4">
                                    <div class="media-body">
                                        <h4 class="h3 lh-1 mb-2">$6,926.32</h4>
                                        <p class="small text-muted mb-0">
                                            +$570.5 <span class="text-success mx-1">+2.31%</span> This Month
                                        </p>
                                    </div>
                                </div>

                                <div class="js-area-chart chart chart--axis-x chart--points-invisible position-relative chart--labels-hidden"
                                    data-series='[
                             [
                               {"meta":"Orders","value":"40"},
                               {"meta":"Orders","value":"42"},
                               {"meta":"Orders","value":"45"},
                               {"meta":"Orders","value":"80"},
                               {"meta":"Orders","value":"70"},
                               {"meta":"Orders","value":"70"},
                               {"meta":"Orders","value":"40"},
                               {"meta":"Orders","value":"20"},
                               {"meta":"Orders","value":"20"},
                               {"meta":"Orders","value":"35"},
                               {"meta":"Orders","value":"35"},
                               {"meta":"Orders","value":"32"},
                               {"meta":"Orders","value":"32"},
                               {"meta":"Orders","value":"35"},
                               {"meta":"Orders","value":"40"},
                               {"meta":"Orders","value":"50"},
                               {"meta":"Orders","value":"50"},
                               {"meta":"Orders","value":"80"},
                               {"meta":"Orders","value":"80"},
                               {"meta":"Orders","value":"90"},
                               {"meta":"Orders","value":"90"},
                               {"meta":"Orders","value":"100"},
                               {"meta":"Orders","value":"100"},
                               {"meta":"Orders","value":"80"},
                               {"meta":"Orders","value":"80"}
                             ]
                           ]' data-height="115" data-high="115" data-is-line-smooth='[false]' data-line-width='["1px"]'
                                    data-line-colors='["#8069f2"]' data-fill-opacity=".3"
                                    data-is-fill-colors-gradient="true" data-fill-colors='[
                             ["rgba(128,105,242,.7)","rgba(255,255,255,.6)"]
                           ]' data-is-show-tooltips="true" data-is-tooltips-append-to-body="true"
                                    data-tooltip-custom-class="chart-tooltip chart-tooltip--sections-blocked chart-tooltip__meta--text-muted small text-white p-2"
                                    data-tooltip-currency="Qty " data-is-show-points="true"
                                    data-point-custom-class='chart__point--donut chart__point--border-xxs border-primary rounded-circle'
                                    data-point-dimensions='{"width":8,"height":8}'></div>

                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <div class="card-header d-flex">
                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Marketing</h5>
                            </div>
                            <div class="card-body pt-0">
                                <h4 class="h2 lh-1 mb-2">+15,870.98 USD</h4>

                                <p class="mb-3 mb-md-4">Total Income</p>

                                <div class="d-flex align-items-center">
                                    <div>
                                        <strong class="d-block mb-3">Conversion Rate</strong>

                                        <div class="d-flex align-items-center text-muted mb-2">
                                            <span
                                                class="indicator indicator-lg indicator-danger rounded-circle mr-2"></span>
                                            <small>Google</small>
                                        </div>

                                        <div class="d-flex align-items-center text-muted">
                                            <span
                                                class="indicator indicator-lg indicator-primary rounded-circle mr-2"></span>
                                            <small>Facebook</small>
                                        </div>
                                    </div>

                                    <div class="js-donut-chart position-relative d-flex ml-auto"
                                        style="width: 120px; height: 120px;" data-series='[
                               {"meta":"Google - ","value":78},
                               {"meta":"Facebook - ","value":22}
                             ]' data-border-width="8" data-start-angle="0" data-fill-colors='["#EA4335","#377dff"]'
                                        data-is-show-tooltips="true" data-tooltip-currency="%"
                                        data-is-tooltip-currency-reverse="true"
                                        data-tooltip-custom-class="chart-tooltip chart-tooltip--none-triangle chart-tooltip--centered chart-tooltip--black small text-white text-nowrap px-2 py-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3 mb-md-4">
                            <div class="card-header">
                                <h5 class="font-weight-semi-bold mb-0">Recent Orders</h5>
                                <a href="../customerorder_pdf_data.php" type="button" class="mx-3 my-3 btn btn-outline-dark">PDF</a>
                                <a href="../customerorder_xls_data.php" type="button" class="mx-3 my-3 btn btn-outline-success">XLS</a>
                            </div>

                            <div class="card-body pt-0">
                                <div class="table-responsive-xl">
                                    <table class="table text-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Customer</th>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Phone</th>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Amount</th>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                                                <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($db->tampil_data_order() as $customerorder) { ?>
                                            <tr>
                                                <td class="py-3"><?php echo $customerorder['idOrder']; ?></td>
                                                <td class="py-3">
                                                    <div><?php echo $customerorder['customer_name']; ?></div>
                                                </td>
                                                <td class="py-3"><?php echo $customerorder['phone_number']; ?></td>
                                                <td class="py-3">$ <?php echo $customerorder['amount']; ?></td>
                                                <td class="py-3">
                                                        <?php if($customerorder['status'] == 'Pending') {
                                                                echo '<span class="badge badge-pill badge-warning">'.$customerorder['status'].'</span>';
                                                            }
                                                            elseif($customerorder['status'] == 'Cancelled') {
                                                                echo '<span class="badge badge-pill badge-danger">'.$customerorder['status'].'</span>';
                                                            }
                                                            elseif($customerorder['status'] == 'Fulfilled') {
                                                                echo '<span class="badge badge-pill badge-success">'.$customerorder['status'].'</span>';
                                                            }
                                                        ?>
                                                </td>
                                                <td class="py-3">
                                                    <div class="position-relative">
                                                        <a class="link-dark d-inline-block"
                                                            href="order_edit.php?id=<?php echo $customerorder['idOrder']; ?>&aksi=edit_order">
                                                            <i class="gd-pencil icon-text"></i>
                                                        </a>
                                                        <a class="link-dark d-inline-block"
                                                            href="../controllers/proses.php?id=<?php echo $customerorder['idOrder']; ?>&aksi=delete_order">
                                                            <i class="gd-trash icon-text"></i>
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
                    </div>
                </div>

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


    <script src="../assets/js/graindashboard.js"></script>
    <script src="../assets/js/graindashboard.vendor.js"></script>

    <!-- DEMO CHARTS -->
    <script src="../assets/demo/resizeSensor.js"></script>
    <script src="../assets/demo/chartist.js"></script>
    <script src="../assets/demo/chartist-plugin-tooltip.js"></script>
    <script src="../assets/demo/gd.chartist-area.js"></script>
    <script src="../assets/demo/gd.chartist-bar.js"></script>
    <script src="../assets/demo/gd.chartist-donut.js"></script>
    <script>
        $.GDCore.components.GDChartistArea.init('.js-area-chart');
        $.GDCore.components.GDChartistBar.init('.js-bar-chart');
        $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
    </script>
</body>

</html>