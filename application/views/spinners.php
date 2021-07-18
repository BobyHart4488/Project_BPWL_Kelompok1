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
                    <li class="side-nav-menu-item">
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
                    <li class="side-nav-menu-item active">
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
                <div class="h3 mb-0">Spinners</div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="border-bottom pb-3 mb-6">
                                <p class="lead">Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.</p>
                            </div>

                            <div id="about" class="mb-9">
                                <h2 class="h4">About <a class="anchorjs-link" href="#about" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Bootstrap “spinners” can be used to show the loading state in your projects. They’re built only with HTML and CSS, meaning you don’t need any JavaScript to create them. You will, however, need some custom JavaScript to toggle their visibility. Their appearance, alignment, and sizing can be easily customized with our amazing utility classes.</p>
                                <p>For accessibility purposes, each loader here includes <code>role="status"</code> and a nested <code>&lt;span class="sr-only"&gt;Loading...&lt;/span&gt;</code>.</p>
                            </div>

                            <div id="border-spinner" class="mb-9">
                                <h2 class="h4">Border spinner <a class="anchorjs-link" href="#border-spinner" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Use the border spinners for a lightweight loading indicator.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-1" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-1" data-toggle="pill" href="#spinners-result-1" role="tab" aria-controls="spinners-result-1" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-1" data-toggle="pill" href="#spinners-html-1" role="tab" aria-controls="spinners-html-1" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-1">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-1" role="tabpanel" aria-labelledby="spinners-result-tab-1">
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-1" role="tabpanel" aria-labelledby="spinners-html-tab-1">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="spinner-border" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="spinner-colors" class="mb-9">
                                <h2 class="h4">Colors <a class="anchorjs-link" href="#spinner-colors" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can customize the color with <a href="../utilities/colors.php">text color utilities</a>. You can use any of our text color utilities on the standard spinner.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-2" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-2" data-toggle="pill" href="#spinners-result-2" role="tab" aria-controls="spinners-result-2" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-2" data-toggle="pill" href="#spinners-html-2" role="tab" aria-controls="spinners-html-2" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-2">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-2" role="tabpanel" aria-labelledby="spinners-result-tab-2">
                                            <div class="spinner-border text-primary mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-secondary mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-success mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-danger mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-warning mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-info mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-light mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-border text-dark mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-2" role="tabpanel" aria-labelledby="spinners-html-tab-2">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="spinner-border text-primary" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-border text-secondary" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-border text-success" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-border text-danger" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-border text-warning" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-border text-info" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-border text-light" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-border text-dark" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>

                                <div class="alert alert-danger mb-5" role="alert">
                                    <h3 class="h5 font-weight-bold">Why not use border-color utilities?</h3>
                                    <p class="alert-text mb-0">Each border spinner specifies a <code>transparent</code> border for at least one side, so <code>.border-{color}</code> utilities would override that.</p>
                                </div>
                            </div>

                            <div id="growing-spinner" class="mb-9">
                                <h2 class="h4">Growing spinner <a class="anchorjs-link" href="#growing-spinner" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-3" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-3" data-toggle="pill" href="#spinners-result-3" role="tab" aria-controls="spinners-result-3" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-3" data-toggle="pill" href="#spinners-html-3" role="tab" aria-controls="spinners-html-3" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-3">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-3" role="tabpanel" aria-labelledby="spinners-result-tab-3">
                                            <div class="spinner-grow" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-3" role="tabpanel" aria-labelledby="spinners-html-tab-3">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="spinner-grow" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>

                                <p>Once again, this spinner is built with <code>currentColor</code>, so you can easily change its appearance with <a href="../utilities/colors.php">text color utilities</a>. Here it is in blue, along with the supported variants.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-4" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-4" data-toggle="pill" href="#spinners-result-4" role="tab" aria-controls="spinners-result-4" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-4" data-toggle="pill" href="#spinners-html-4" role="tab" aria-controls="spinners-html-4" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-4">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-4" role="tabpanel" aria-labelledby="spinners-result-tab-4">
                                            <div class="spinner-grow text-primary mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-secondary mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-success mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-danger mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-warning mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-info mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-light mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow text-dark mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-4" role="tabpanel" aria-labelledby="spinners-html-tab-4">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="spinner-grow text-primary" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow text-secondary" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow text-success" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow text-danger" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow text-warning" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow text-info" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow text-light" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow text-dark" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="alignment" class="mb-9">
                                <h2 class="h4">Alignment <a class="anchorjs-link" href="#alignment" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Spinners in Bootstrap are built with <code>rem</code>s, <code>currentColor</code>, and <code>display: inline-flex</code>. This means they can easily be resized, recolored, and quickly aligned.</p>
                            </div>

                            <div id="margin" class="mb-9">
                                <h2 class="h4">Margin <a class="anchorjs-link" href="#margin" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Use margin utilities like <code>.m-5</code> for easy spacing.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-5" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-5" data-toggle="pill" href="#spinners-result-5" role="tab" aria-controls="spinners-result-5" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-5" data-toggle="pill" href="#spinners-html-5" role="tab" aria-controls="spinners-html-5" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-5">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-5" role="tabpanel" aria-labelledby="spinners-result-tab-5">
                                            <div class="spinner-border m-5" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-5" role="tabpanel" aria-labelledby="spinners-html-tab-5">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="spinner-border m-5" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="placement" class="mb-9">
                                <h2 class="h4">Placement <a class="anchorjs-link" href="#placement" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where you need them in any situation.</p>
                            </div>

                            <div id="flex" class="mb-9">
                                <h2 class="h4">Flex <a class="anchorjs-link" href="#flex" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-6" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-6" data-toggle="pill" href="#spinners-result-6" role="tab" aria-controls="spinners-result-6" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-6" data-toggle="pill" href="#spinners-html-6" role="tab" aria-controls="spinners-html-6" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-6">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-6" role="tabpanel" aria-labelledby="spinners-result-tab-6">
                                            <div class="d-flex justify-content-center">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-6" role="tabpanel" aria-labelledby="spinners-html-tab-6">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="d-flex justify-content-center"&gt;
    &lt;div class="spinner-border" role="status"&gt;
      &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-7" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-7" data-toggle="pill" href="#spinners-result-7" role="tab" aria-controls="spinners-result-7" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-7" data-toggle="pill" href="#spinners-html-7" role="tab" aria-controls="spinners-html-7" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-7">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-7" role="tabpanel" aria-labelledby="spinners-result-tab-7">
                                            <div class="d-flex align-items-center">
                                                <strong>Loading...</strong>
                                                <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-7" role="tabpanel" aria-labelledby="spinners-html-tab-7">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="d-flex align-items-center"&gt;
    &lt;strong&gt;Loading...&lt;/strong&gt;
    &lt;div class="spinner-border ml-auto" role="status" aria-hidden="true"&gt;&lt;/div&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="floats" class="mb-9">
                                <h2 class="h4">Floats <a class="anchorjs-link" href="#floats" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-8" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-8" data-toggle="pill" href="#spinners-result-8" role="tab" aria-controls="spinners-result-8" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-8" data-toggle="pill" href="#spinners-html-8" role="tab" aria-controls="spinners-html-8" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-8">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-8" role="tabpanel" aria-labelledby="spinners-result-tab-8">
                                            <div class="clearfix">
                                                <div class="spinner-border float-right" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-8" role="tabpanel" aria-labelledby="spinners-html-tab-8">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="clearfix"&gt;
    &lt;div class="spinner-border float-right" role="status"&gt;
      &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="text-align" class="mb-9">
                                <h2 class="h4">Text align <a class="anchorjs-link" href="#text-align" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-9" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-9" data-toggle="pill" href="#spinners-result-9" role="tab" aria-controls="spinners-result-9" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-9" data-toggle="pill" href="#spinners-html-9" role="tab" aria-controls="spinners-html-9" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-9">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-9" role="tabpanel" aria-labelledby="spinners-result-tab-9">
                                            <div class="text-center">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-9" role="tabpanel" aria-labelledby="spinners-html-tab-9">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="text-center"&gt;
    &lt;div class="spinner-border" role="status"&gt;
      &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="size" class="mb-9">
                                <h2 class="h4">Size <a class="anchorjs-link" href="#size" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-10" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-10" data-toggle="pill" href="#spinners-result-10" role="tab" aria-controls="spinners-result-10" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-10" data-toggle="pill" href="#spinners-html-10" role="tab" aria-controls="spinners-html-10" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-10">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-10" role="tabpanel" aria-labelledby="spinners-result-tab-10">
                                            <div class="spinner-border spinner-border-sm mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow spinner-grow-sm mr-2" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-10" role="tabpanel" aria-labelledby="spinners-html-tab-10">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="spinner-border spinner-border-sm" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow spinner-grow-sm" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>

                                <p>Or, use custom CSS or inline styles to change the dimensions as needed.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-11" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-11" data-toggle="pill" href="#spinners-result-11" role="tab" aria-controls="spinners-result-11" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-11" data-toggle="pill" href="#spinners-html-11" role="tab" aria-controls="spinners-html-11" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-11">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-11" role="tabpanel" aria-labelledby="spinners-result-tab-11">
                                            <div class="spinner-border mr-2" style="width: 3rem; height: 3rem;" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="spinner-grow mr-2" style="width: 3rem; height: 3rem;" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-11" role="tabpanel" aria-labelledby="spinners-html-tab-11">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="buttons" class="mb-9">
                                <h2 class="h4">Buttons <a class="anchorjs-link" href="#buttons" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-12" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-12" data-toggle="pill" href="#spinners-result-12" role="tab" aria-controls="spinners-result-12" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-12" data-toggle="pill" href="#spinners-html-12" role="tab" aria-controls="spinners-html-12" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-12">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-12" role="tabpanel" aria-labelledby="spinners-result-tab-12">
                                            <button class="btn btn-primary mr-2" type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                <span class="sr-only">Loading...</span>
                                            </button>
                                            <button class="btn btn-primary mr-2" type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-12" role="tabpanel" aria-labelledby="spinners-html-tab-12">
<pre>
<code class="language-markup" data-lang="html">
  &lt;button class="btn btn-primary" type="button" disabled&gt;
    &lt;span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class="btn btn-primary" type="button" disabled&gt;
    &lt;span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
    Loading...
  &lt;/button&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="spinners-tab-13" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="spinners-result-tab-13" data-toggle="pill" href="#spinners-result-13" role="tab" aria-controls="spinners-result-13" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="spinners-html-tab-13" data-toggle="pill" href="#spinners-html-13" role="tab" aria-controls="spinners-html-13" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="spinners-tabContent-13">
                                        <div class="tab-pane fade p-4 show active" id="spinners-result-13" role="tabpanel" aria-labelledby="spinners-result-tab-13">
                                            <button class="btn btn-primary mr-2" type="button" disabled>
                                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                <span class="sr-only">Loading...</span>
                                            </button>
                                            <button class="btn btn-primary mr-2" type="button" disabled>
                                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                        </div>
                                        <div class="tab-pane fade" id="spinners-html-13" role="tabpanel" aria-labelledby="spinners-html-tab-13">
<pre>
<code class="language-markup" data-lang="html">
  &lt;button class="btn btn-primary" type="button" disabled&gt;
    &lt;span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class="btn btn-primary" type="button" disabled&gt;
    &lt;span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
    Loading...
  &lt;/button&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
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