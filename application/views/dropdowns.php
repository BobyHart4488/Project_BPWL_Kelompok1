<?php 
include '../models/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Documentation | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico">

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
                    echo 'home.php';
                } else {
                    echo '../controllers/proses.php?aksi=logout';
                }?>">
                <img class="img-fluid w-100" src="../assets/img/logo-mini.png" alt="Graindashboard">
            </a>
            <!-- End Logo For Mobile View -->

            <!-- Logo For Desktop View -->
            <a class="navbar-brand navbar-brand-desktop" href="
                <?php if(isset($_SESSION['name'])){
                    echo 'home.php';
                } else {
                    echo '../controllers/proses.php?aksi=logout';
                }?>">
                <img class="side-nav-show-on-closed" src="../assets/img/logo-mini.png" alt="Graindashboard" style="width: auto; height: 33px;">
                <img class="side-nav-hide-on-closed" src="../assets/img/logo.png" alt="Graindashboard" style="width: auto; height: 33px;">
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
            <li class="sidebar-heading h6">Documentation</li>
            <!-- End Title -->

            <!-- Getting Started -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="home.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-home"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Getting Started</span>
                </a>
            </li>
            <!-- End Getting Started -->

            <!-- UI Components -->
            <li class="side-nav-menu-item side-nav-has-menu active">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subComponents">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-panel"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">UI Components</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- UI Components: subComponents -->
                <ul id="subComponents" class="side-nav-menu side-nav-menu-second-level mb-0" style="display:block;">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="avatars.php">Avatars</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="alerts.php">Alerts</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="buttons.php">Buttons</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="breadcrumbs.php">Breadcrumbs</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="badges.php">Badges</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="cards.php">Cards</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="collapse.php">Collapse</a>
                    </li>
                    <li class="side-nav-menu-item active">
                        <a class="side-nav-menu-link" href="dropdowns.php">Dropdowns</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="forms.php">Forms</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="icons.php">Icons</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="modals.php">Modals</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="navs.php">Navs</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="progress.php">Progress</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="pagination.php">Pagination</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="spinners.php">Spinners</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="toasts.php">Toasts</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="tables.php">Tables</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="typography.php">Typography</a>
                    </li>
                </ul>
                <!-- End UI Components: subComponents -->
            </li>
            <!-- End UI Components -->

            <!-- Utils -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subUtils">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-desktop"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Utils</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Utils: subUtils -->
                <ul id="subUtils" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="background.php">Background</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="borders.php">Borders</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="colors.php">Colors</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="links.php">Links</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="positions.php">Positions</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="spacing.php">Spacing</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="transitions.php">Transitions</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="other.php">Other</a>
                    </li>
                </ul>
                <!-- End Utils: subUtils -->
            </li>
            <!-- End Utils -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Dropdowns</div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="border-bottom pb-3 mb-6">
                                <p class="lead">Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.</p>
                            </div>

                            <div id="overview" class="mb-9">
                                <h2 class="h4">Overview <a class="anchorjs-link" href="#overview" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made interactive with the included Bootstrap dropdown JavaScript plugin. They’re toggled by clicking, not by hovering; this is <a href="http://markdotto.com/2012/02/27/bootstrap-explained-dropdowns/">an intentional design decision</a>.</p>

                                <p>Dropdowns are built on a third party library, <a href="https://popper.js.org/">Popper.js</a>, which provides dynamic positioning and viewport detection. Be sure to include <a href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">popper.min.js</a> before Bootstrap’s JavaScript or use <code>bootstrap.bundle.min.js</code> / <code>bootstrap.bundle.js</code> which contains Popper.js. Popper.js isn’t used to position dropdowns in navbars though as dynamic positioning isn’t required.</p>

                                <p>If you’re building our JavaScript from source, it <a href="https://getbootstrap.com/docs/4.3/getting-started/javascript/#util">requires util.js</a>.</p>
                            </div>

                            <div id="examples" class="mb-9">
                                <h2 class="h4">Examples <a class="anchorjs-link" href="#examples" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Wrap the dropdown’s toggle (your button or link) and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Dropdowns can be triggered from <code>&lt;a&gt;</code> or <code>&lt;button&gt;&lt;/button&gt;</code> elements to better fit your potential needs.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-2" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-2" data-toggle="pill" href="#pills-result-2" role="tab" aria-controls="pills-result-2" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-2" data-toggle="pill" href="#pills-html-2" role="tab" aria-controls="pills-html-2" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-2">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-2" role="tabpanel" aria-labelledby="pills-result-tab-2" style="height: 350px;">
                                            <div class="dropdown" style="max-width: 300px;">
                                                <a id="dropdownPosition" class="btn btn-primary dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false"
                                                   data-toggle="dropdown">
                                                    <span class="align-middle">Dropdown Variation</span>
                                                    <i class="gd-angle-down icon-text icon-text-xs align-middle ml-3"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownPosition">
                                                    <a class="dropdown-item" href="#">Training taxes</a>
                                                    <a class="dropdown-item" href="#">Shipping</a>
                                                    <a class="dropdown-item" href="#">Outsourcing</a>
                                                    <a class="dropdown-item disabled" href="#">Consulting</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Office supplies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-2" role="tabpanel" aria-labelledby="pills-html-tab-2">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="dropdown"&gt;
    &lt;a id="dropdownPosition" class="btn btn-primary dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false"
       data-toggle="dropdown"&gt;
      &lt;span class="align-middle"&gt;Dropdown Variation&lt;/span&gt;
      &lt;i class="gd-angle-down icon-text icon-text-xs align-middle ml-3"&gt;&lt;/i&gt;
    &lt;/a&gt;

    &lt;div class="dropdown-menu" aria-labelledby="dropdownPosition"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Training taxes&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Shipping&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Outsourcing&lt;/a&gt;
      &lt;a class="dropdown-item disabled" href="#"&gt;Consulting&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Office supplies&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="sizes" class="mb-9">
                                <h2 class="h4">Sizes <a class="anchorjs-link" href="#sizes" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-3" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-3" data-toggle="pill" href="#pills-result-3" role="tab" aria-controls="pills-result-3" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-3" data-toggle="pill" href="#pills-html-3" role="tab" aria-controls="pills-html-3" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-3">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-3" role="tabpanel" aria-labelledby="pills-result-tab-3" style="height: 350px;">
                                            <div class="d-flex align-items-end flex-wrap">
                                                <div class="dropdown">
                                                    <a id="dropdownPosition2" class="btn btn-primary btn-lg dropdown-toggle mb-3 mb-md-0 mr-4" href="#" aria-haspopup="true" aria-expanded="false"
                                                       data-toggle="dropdown">
                                                        <span class="align-middle">Large button</span>
                                                        <i class="gd-angle-down icon-text icon-text-xs align-middle ml-3"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownPosition2">
                                                        <a class="dropdown-item" href="#">Training taxes</a>
                                                        <a class="dropdown-item" href="#">Shipping</a>
                                                        <a class="dropdown-item" href="#">Outsourcing</a>
                                                        <a class="dropdown-item disabled" href="#">Consulting</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Office supplies</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a id="dropdownSizeMd" class="btn btn-primary dropdown-toggle mb-3 mb-md-0 mr-4" href="#" aria-haspopup="true" aria-expanded="false"
                                                       data-toggle="dropdown">
                                                        <span class="align-middle">Medium button</span>
                                                        <i class="gd-angle-down icon-text icon-text-xs align-middle ml-3"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownSizeMd">
                                                        <a class="dropdown-item" href="#">Training taxes</a>
                                                        <a class="dropdown-item" href="#">Shipping</a>
                                                        <a class="dropdown-item" href="#">Outsourcing</a>
                                                        <a class="dropdown-item disabled" href="#">Consulting</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Office supplies</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a id="dropdownSizeSm" class="btn btn-primary btn-sm dropdown-toggle mb-3 mb-md-0" href="#" aria-haspopup="true" aria-expanded="false"
                                                       data-toggle="dropdown">
                                                        <span class="align-middle">Small button</span>
                                                        <i class="gd-angle-down icon-text icon-text-xs align-middle ml-3"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownSizeSm">
                                                        <a class="dropdown-item" href="#">Training taxes</a>
                                                        <a class="dropdown-item" href="#">Shipping</a>
                                                        <a class="dropdown-item" href="#">Outsourcing</a>
                                                        <a class="dropdown-item disabled" href="#">Consulting</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Office supplies</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-3" role="tabpanel" aria-labelledby="pills-html-tab-3">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="dropdown"&gt;
    &lt;a id="dropdownPosition2" class="btn btn-primary btn-lg dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false"
       data-toggle="dropdown"&gt;
      &lt;span class="align-middle"&gt;Large button&lt;/span&gt;
      &lt;i class="gd-angle-down icon-text icon-text-xs align-middle ml-3"&gt;&lt;/i&gt;
    &lt;/a&gt;

    &lt;div class="dropdown-menu" aria-labelledby="dropdownPosition2"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Training taxes&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Shipping&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Outsourcing&lt;/a&gt;
      &lt;a class="dropdown-item disabled" href="#"&gt;Consulting&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Office supplies&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="dropdown"&gt;
    &lt;a id="dropdownSizeMd" class="btn btn-primary dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false"
       data-toggle="dropdown"&gt;
      &lt;span class="align-middle"&gt;Medium button&lt;/span&gt;
      &lt;i class="gd-angle-down icon-text icon-text-xs align-middle ml-3"&gt;&lt;/i&gt;
    &lt;/a&gt;

    &lt;div class="dropdown-menu" aria-labelledby="dropdownSizeMd"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Training taxes&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Shipping&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Outsourcing&lt;/a&gt;
      &lt;a class="dropdown-item disabled" href="#"&gt;Consulting&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Office supplies&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="dropdown"&gt;
    &lt;a id="dropdownSizeSm" class="btn btn-primary btn-sm dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false"
       data-toggle="dropdown"&gt;
      &lt;span class="align-middle"&gt;Small button&lt;/span&gt;
      &lt;i class="gd-angle-down icon-text icon-text-xs align-middle ml-3"&gt;&lt;/i&gt;
    &lt;/a&gt;

    &lt;div class="dropdown-menu" aria-labelledby="dropdownSizeSm"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Training taxes&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Shipping&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Outsourcing&lt;/a&gt;
      &lt;a class="dropdown-item disabled" href="#"&gt;Consulting&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Office supplies&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="accessibility" class="mb-9">
                                <h2 class="h4">Accessibility <a class="anchorjs-link" href="#accessibility" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Dropdowns are designed to be generic and applicable to a variety of situations and markup structures. For instance, it is possible to create dropdowns that contain additional inputs and form controls, such as search fields or login forms. For this reason, Bootstrap does not expect (nor automatically add) any of the <code>role</code> and <code>aria-</code> attributes required for true ARIA menus. Authors will have to include these more specific attributes themselves.</p>

                                <p>However, Bootstrap does add built-in support for most standard keyboard menu interactions, such as the ability to move through individual <code>.dropdown-item</code> elements using the cursor keys and close the menu with the <kbd>ESC</kbd> key.</p>
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


<script src="../assets/js/graindashboard.js"></script>
<script src="../assets/js/graindashboard.vendor.js"></script>

</body>
</html>