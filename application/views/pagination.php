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
                    <li class="side-nav-menu-item active">
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
                <div class="h3 mb-0">Pagination</div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="border-bottom pb-3 mb-6">
                                <p class="lead">Documentation and examples explaining how to use pagination component.</p>
                            </div>

                            <div id="overview" class="mb-9">
                                <h2 class="h4">Overview <a class="anchorjs-link" href="#overview" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Use a wrapping <code>&lt;nav&gt;</code> element to identify it as a navigation section to screen readers and other assistive technologies.</p>

                                <p>In addition, as pages likely have more than one such navigation section, it's advisable to provide a descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <code>aria-label="Search results pages"</code>.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-1" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-1" data-toggle="pill" href="#pills-result-1" role="tab" aria-controls="pills-result-1" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-1" data-toggle="pill" href="#pills-html-1" role="tab" aria-controls="pills-html-1" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-1">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-1" role="tabpanel" aria-labelledby="pills-result-tab-1">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination font-weight-semi-bold">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-1" role="tabpanel" aria-labelledby="pills-html-tab-1">
<pre>
<code class="language-markup" data-lang="html">
  &lt;nav aria-label="Page navigation example"&gt;
    &lt;ul class="pagination font-weight-semi-bold"&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;Previous&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="working-with-icons" class="mb-9">
                                <h2 class="h4">Working with icons <a class="anchorjs-link" href="#working-with-icons" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Are you looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with <code>aria</code> attributes and the <code>.sr-only</code> utility.</p>

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
                                        <div class="tab-pane fade p-4 show active" id="pills-result-2" role="tabpanel" aria-labelledby="pills-result-tab-2">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination font-weight-semi-bold">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <i class="gd-angle-left icon-text icon-text-xs d-inline-block" aria-hidden="true"></i>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="gd-angle-right icon-text icon-text-xs d-inline-block" aria-hidden="true"></i>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-2" role="tabpanel" aria-labelledby="pills-html-tab-2">
<pre>
<code class="language-markup" data-lang="html">
  &lt;nav aria-label="Page navigation example"&gt;
    &lt;ul class="pagination font-weight-semi-bold"&gt;
      &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#" aria-label="Previous"&gt;
          &lt;i class="gd-angle-left icon-text icon-text-xs d-inline-block" aria-hidden="true"&gt;&lt;/i&gt;
          &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#" aria-label="Next"&gt;
          &lt;i class="gd-angle-right icon-text icon-text-xs d-inline-block" aria-hidden="true"&gt;&lt;/i&gt;
          &lt;span class="sr-only"&gt;Next&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="disabled-and-active-states" class="mb-9">
                                <h2 class="h4">Disabled and active states <a class="anchorjs-link" href="#disabled-and-active-states" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Pagination links are customizable for different circumstances. Use <code>.disabled</code> for links that appear un-clickable and <code>.active</code> to indicate the current page.</p>

                                <p>While the <code>.disabled</code> class uses <code>pointer-events: none</code> to <em>try</em> to disable the link functionality of <code>&lt;a&gt;</code>s, that CSS property is not yet standardized and doesn't account for keyboard navigation. As such, you should always add <code>tabindex="-1"</code> on disabled links and use custom JavaScript to fully disable their functionality.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-10" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-10" data-toggle="pill" href="#pills-result-10" role="tab" aria-controls="pills-result-10" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-10" data-toggle="pill" href="#pills-html-10" role="tab" aria-controls="pills-html-10" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-10">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-10" role="tabpanel" aria-labelledby="pills-result-tab-10">
                                            <nav aria-label="...">
                                                <ul class="pagination font-weight-semi-bold">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-10" role="tabpanel" aria-labelledby="pills-html-tab-10">
<pre>
<code class="language-markup" data-lang="html">
  &lt;nav aria-label="..."&gt;
    &lt;ul class="pagination font-weight-semi-bold"&gt;
      &lt;li class="page-item disabled"&gt;
        &lt;a class="page-link" href="#" tabindex="-1"&gt;Previous&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item active"&gt;
        &lt;a class="page-link" href="#"&gt;2 &lt;span class="sr-only"&gt;(current)&lt;/span&gt;&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="alignment" class="mb-9">
                                <h2 class="h4">Alignment <a class="anchorjs-link" href="#alignment" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Change the alignment of pagination components with <a href="http://getbootstrap.com/docs/4.3/utilities/flex/">flexbox utilities</a>.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-6" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-6" data-toggle="pill" href="#pills-result-6" role="tab" aria-controls="pills-result-6" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-6" data-toggle="pill" href="#pills-html-6" role="tab" aria-controls="pills-html-6" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-6">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-6" role="tabpanel" aria-labelledby="pills-result-tab-6">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center font-weight-semi-bold">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-6" role="tabpanel" aria-labelledby="pills-html-tab-6">
<pre>
<code class="language-markup" data-lang="html">
  &lt;nav aria-label="Page navigation example"&gt;
    &lt;ul class="pagination justify-content-center font-weight-semi-bold"&gt;
      &lt;li class="page-item disabled"&gt;
        &lt;a class="page-link" href="#" tabindex="-1"&gt;Previous&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-7" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-7" data-toggle="pill" href="#pills-result-7" role="tab" aria-controls="pills-result-7" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-7" data-toggle="pill" href="#pills-html-7" role="tab" aria-controls="pills-html-7" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-7">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-7" role="tabpanel" aria-labelledby="pills-result-tab-7">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-end font-weight-semi-bold">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-7" role="tabpanel" aria-labelledby="pills-html-tab-7">
<pre>
<code class="language-markup" data-lang="html">
  &lt;nav aria-label="Page navigation example"&gt;
    &lt;ul class="pagination justify-content-end font-weight-semi-bold"&gt;
      &lt;li class="page-item disabled"&gt;
        &lt;a class="page-link" href="#" tabindex="-1"&gt;Previous&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="with-pager" class="mb-9">
                                <h2 class="h4">With pager <a class="anchorjs-link" href="#with-pager" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-8" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-8" data-toggle="pill" href="#pills-result-8" role="tab" aria-controls="pills-result-8" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-8" data-toggle="pill" href="#pills-html-8" role="tab" aria-controls="pills-html-8" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-8">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-8" role="tabpanel" aria-labelledby="pills-result-tab-8">
                                            <nav class="d-flex justify-content-between align-items-center" aria-label="Page navigation example">
                                                <small class="text-muted">Showing 3 of 8</small>
                                                <ul class="pagination font-weight-semi-bold">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <i class="gd-angle-left icon-text icon-text-xs d-inline-block" aria-hidden="true"></i>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="gd-angle-right icon-text icon-text-xs d-inline-block" aria-hidden="true"></i>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-8" role="tabpanel" aria-labelledby="pills-html-tab-8">
<pre>
<code class="language-markup" data-lang="html">
  &lt;nav class="d-flex justify-content-between align-items-center" aria-label="Page navigation example"&gt;
    &lt;small class="text-muted"&gt;Showing 3 of 8&lt;/small&gt;
    &lt;ul class="pagination font-weight-semi-bold"&gt;
      &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#" aria-label="Previous"&gt;
          &lt;i class="gd-angle-left icon-text icon-text-xs d-inline-block" aria-hidden="true"&gt;&lt;/i&gt;
          &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item disabled"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;8&lt;/a&gt;&lt;/li&gt;
      &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#" aria-label="Next"&gt;
          &lt;i class="gd-angle-right icon-text icon-text-xs d-inline-block" aria-hidden="true"&gt;&lt;/i&gt;
          &lt;span class="sr-only"&gt;Next&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
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