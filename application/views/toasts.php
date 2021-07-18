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
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="spinners.php">Spinners</a>
                    </li>
                    <li class="side-nav-menu-item active">
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
                <div class="h3 mb-0">Toasts</div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="border-bottom pb-3 mb-6">
                                <p class="lead">Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.</p>
                                <p>Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position.</p>
                            </div>

                            <div id="overview" class="mb-9">
                                <h2 class="h4">Overview <a class="anchorjs-link" href="#overview" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Things to know when using the toast plugin:</p>
                                <ul>
                                    <li>If you’re building our JavaScript from source, it <a href="https://getbootstrap.com/docs/4.3/getting-started/javascript/#util" target="_blank" rel="nofollow">requires util.js</a>.</li>
                                    <li>Toasts are opt-in for performance reasons, so <strong>you must initialize them yourself</strong>.</li>
                                    <li><strong>Please note that you are responsible for positioning toasts.</strong></li>
                                    <li>Toasts will automatically hide if you do not specify <code>autohide: false</code>.</li>
                                </ul>
                            </div>

                            <div id="examples" class="mb-4">
                                <h2 class="h4">Examples <a class="anchorjs-link" href="#examples" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                            </div>

                            <div id="basic" class="mb-9">
                                <h2 class="h4">Basic <a class="anchorjs-link" href="#basic" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use <code>display: flex</code>, allowing easy alignment of content thanks to our margin and flexbox utilities.</p>

                                <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="toast-tab-1" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="toast-result-tab-1" data-toggle="pill" href="#toast-result-1" role="tab" aria-controls="toast-result-1" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="toast-html-tab-1" data-toggle="pill" href="#toast-html-1" role="tab" aria-controls="toast-html-1" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="toast-tabContent-1">
                                        <div class="tab-pane fade p-4 show active" id="toast-result-1" role="tabpanel" aria-labelledby="toast-result-tab-1">
                                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description">
                                                    <h6 class="font-weight-semi-bold mb-0">John Doe</h6>
                                                    <small class="text-muted ml-auto">11 mins ago</small>
                                                    <button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close">
                                                        <i class="gd-close small" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="toast-html-1" role="tabpanel" aria-labelledby="toast-html-tab-1">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header"&gt;
      &lt;img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description"&gt;
      &lt;h6 class="font-weight-semi-bold mb-0"&gt;John Doe&lt;/h6&gt;
      &lt;small class="text-muted ml-auto"&gt;11 mins ago&lt;/small&gt;
      &lt;button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close"&gt;
        &lt;i class="gd-close small" aria-hidden="true"&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
      Hello, world! This is a toast message.
    &lt;/div&gt;
  &lt;/div&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="stacking" class="mb-9">
                                <h2 class="h4">Stacking <a class="anchorjs-link" href="#stacking" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>When you have multiple toasts, we default to vertically stacking them in a readable manner.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="toast-tab-2" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="toast-result-tab-2" data-toggle="pill" href="#toast-result-2" role="tab" aria-controls="toast-result-2" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="toast-html-tab-2" data-toggle="pill" href="#toast-html-2" role="tab" aria-controls="toast-html-2" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="toast-tabContent-2">
                                        <div class="tab-pane fade p-4 show active" id="toast-result-2" role="tabpanel" aria-labelledby="toast-result-tab-2">
                                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description">
                                                    <h6 class="font-weight-semi-bold mb-0">John Doe</h6>
                                                    <small class="text-muted ml-auto">just now</small>
                                                    <button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close">
                                                        <i class="gd-close small" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    See? Just like this.
                                                </div>
                                            </div>

                                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description">
                                                    <h6 class="font-weight-semi-bold mb-0">John Doe</h6>
                                                    <small class="text-muted ml-auto">2 seconds ago</small>
                                                    <button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close">
                                                        <i class="gd-close small" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    Heads up, toasts will stack automatically
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="toast-html-2" role="tabpanel" aria-labelledby="toast-html-tab-2">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header"&gt;
      &lt;img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description"&gt;
      &lt;h6 class="font-weight-semi-bold mb-0"&gt;John Doe&lt;/h6&gt;
      &lt;small class="text-muted ml-auto"&gt;just now&lt;/small&gt;
      &lt;button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close"&gt;
        &lt;i class="gd-close small" aria-hidden="true"&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
      See? Just like this.
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header"&gt;
      &lt;img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description"&gt;
      &lt;h6 class="font-weight-semi-bold mb-0"&gt;John Doe&lt;/h6&gt;
      &lt;small class="text-muted ml-auto"&gt;2 seconds ago&lt;/small&gt;
      &lt;button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close"&gt;
        &lt;i class="gd-close small" aria-hidden="true"&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
      Heads up, toasts will stack automatically
    &lt;/div&gt;
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
                                <p>Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles right on the <code>.toast</code>.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="toast-tab-3" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="toast-result-tab-3" data-toggle="pill" href="#toast-result-3" role="tab" aria-controls="toast-result-3" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="toast-html-tab-3" data-toggle="pill" href="#toast-html-3" role="tab" aria-controls="toast-html-3" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="toast-tabContent-3">
                                        <div class="tab-pane fade p-4 show active" id="toast-result-3" role="tabpanel" aria-labelledby="toast-result-tab-3">
                                            <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                                                <div class="toast" style="position: absolute; top: 0; right: 0;">
                                                    <div class="toast-header">
                                                        <img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description">
                                                        <h6 class="font-weight-semi-bold mb-0">John Doe</h6>
                                                        <small class="text-muted ml-auto">13 mins ago</small>
                                                        <button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close">
                                                            <i class="gd-close small" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Heads up, toasts will stack automatically
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="toast-html-3" role="tabpanel" aria-labelledby="toast-html-tab-3">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;"&gt;
    &lt;div class="toast" style="position: absolute; top: 0; right: 0;"&gt;
      &lt;div class="toast-header"&gt;
        &lt;img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description"&gt;
        &lt;h6 class="font-weight-semi-bold mb-0"&gt;John Doe&lt;/h6&gt;
        &lt;small class="text-muted ml-auto"&gt;13 mins ago&lt;/small&gt;
        &lt;button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close"&gt;
          &lt;i class="gd-close small" aria-hidden="true"&gt;&lt;/i&gt;
        &lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="toast-body"&gt;
        Heads up, toasts will stack automatically
      &lt;/div&gt;
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
                                <p>Toasts are intended to be small interruptions to your visitors or users, so to help those with screen readers and similar assistive technologies, you should wrap your toasts in an <a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/ARIA_Live_Regions" target="_blank" rel="nofollow">aria-live region</a>. Changes to live regions (such as injecting/updating a toast component) are automatically announced by screen readers without needing to move the user’s focus or otherwise interrupt the user. Additionally, include <code>aria-atomic="true"</code> to ensure that the entire toast is always announced as a single (atomic) unit, rather than announcing what was changed (which could lead to problems if you only update part of the toast’s content, or if displaying the same toast content at a later point in time). If the information needed is important for the process, e.g. for a list of errors in a form, then use the <a href="https://getbootstrap.com/docs/4.3/components/alerts/" target="_blank" rel="nofollow">alert component</a> instead of toast.</p>

                                <p>Note that the live region needs to be present in the markup before the toast is generated or updated. If you dynamically generate both at the same time and inject them into the page, they will generally not be announced by assistive technologies.</p>

                                <p>You also need to adapt the <code>role</code> and aria-live level depending on the content. If it’s an important message like an error, use <code>role="alert" aria-live="assertive"</code>, otherwise use <code>role="status" aria-live="polite"</code> attributes.</p>

                                <p>As the content you’re displaying changes, be sure to update the <a href="https://getbootstrap.com/docs/4.3/components/toasts/#options" target="_blank" rel="nofollow">delay timeout</a> to ensure people have enough time to read the toast.</p>

<pre>
<code class="language-markup" data-lang="html">
&lt;div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="10000"&gt;
    &lt;div role="alert" aria-live="assertive" aria-atomic="true"&gt;...&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>

                                <p>When using <code>autohide: false</code>, you must add a close button to allow users to dismiss the toast.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="toast-tab-4" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="toast-result-tab-4" data-toggle="pill" href="#toast-result-4" role="tab" aria-controls="toast-result-4" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="toast-html-tab-4" data-toggle="pill" href="#toast-html-4" role="tab" aria-controls="toast-html-4" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="toast-tabContent-4">
                                        <div class="tab-pane fade p-4 show active" id="toast-result-4" role="tabpanel" aria-labelledby="toast-result-tab-4">
                                            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
                                                <div class="toast-header">
                                                    <img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description">
                                                    <h6 class="font-weight-semi-bold mb-0">John Doe</h6>
                                                    <small class="text-muted ml-auto">11 mins ago</small>
                                                    <button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close">
                                                        <i class="gd-close small" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="toast-html-4" role="tabpanel" aria-labelledby="toast-html-tab-4">
<pre>
<code class="language-markup" data-lang="html">
  &lt;div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false"&gt;
    &lt;div class="toast-header"&gt;
      &lt;img src="img/avatar-1.jpg" class="avatar rounded-circle mr-md-2" alt="Image description"&gt;
      &lt;h6 class="font-weight-semi-bold mb-0"&gt;John Doe&lt;/h6&gt;
      &lt;small class="text-muted ml-auto"&gt;11 mins ago&lt;/small&gt;
      &lt;button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close"&gt;
        &lt;i class="gd-close small" aria-hidden="true"&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
      Hello, world! This is a toast message.
    &lt;/div&gt;
  &lt;/div&gt;
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

<script>
    $(window).on('load', function () {
        // initialization of custom scroll
        $(".toast").toast({autohide:false}).toast("show");
    });
</script>

</body>
</html>