
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/select2/select2-bootstrap.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/dropzonejs/min/dropzone.min.css">

        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/codebase/assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                            <!-- Close Side Overlay -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Side Overlay -->

                            <!-- User Info -->
                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                            </div>
                            <!-- END User Info -->
                        </div>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="content-side">
                        <!-- Search -->
                        <div class="block pull-t pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <form action="be_pages_generic_search.html" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary px-10">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Search -->

                        <!-- Mini Stats -->
                        <div class="block pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                                        <div class="font-size-h4">460</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                        <div class="font-size-h4">728</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                        <div class="font-size-h4">$7,860</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Mini Stats -->

                        <!-- Friends -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-users push">
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Sara Fields
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> David Fuller
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar7.jpg" alt="">
                                            <i class="fa fa-circle text-warning"></i> Amanda Powell
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
                                            <i class="fa fa-circle text-danger"></i> Albert Ray
                                            <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Friends -->

                        <!-- Activity -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="list list-activity">
                                    <li>
                                        <i class="si si-wallet text-success"></i>
                                        <div class="font-w600">+$29 New sale</div>
                                        <div>
                                            <a href="javascript:void(0)">Admin Template</a>
                                        </div>
                                        <div class="font-size-xs text-muted">5 min ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-close text-danger"></i>
                                        <div class="font-w600">Project removed</div>
                                        <div>
                                            <a href="javascript:void(0)">Best Icon Set</a>
                                        </div>
                                        <div class="font-size-xs text-muted">26 min ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-pencil text-info"></i>
                                        <div class="font-w600">You edited the file</div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-file-text-o"></i> Docs.doc
                                            </a>
                                        </div>
                                        <div class="font-size-xs text-muted">3 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-plus text-success"></i>
                                        <div class="font-w600">New user</div>
                                        <div>
                                            <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                        </div>
                                        <div class="font-size-xs text-muted">5 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-wrench text-warning"></i>
                                        <div class="font-w600">App v5.5 is available</div>
                                        <div>
                                            <a href="javascript:void(0)">Update now</a>
                                        </div>
                                        <div class="font-size-xs text-muted">8 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-user-follow text-pulse"></i>
                                        <div class="font-w600">+1 Friend Request</div>
                                        <div>
                                            <a href="javascript:void(0)">Accept</a>
                                        </div>
                                        <div class="font-size-xs text-muted">1 day ago</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Activity -->

                        <!-- Profile -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-name">Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-email">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password">New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                <i class="fa fa-refresh mr-5"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Profile -->

                        <!-- Settings -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                            <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                            <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                            <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                            <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                            <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                            <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Settings -->
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">J. Smith</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                            <i class="si si-drop"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                                            <i class="si si-logout"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li>
                                    <a href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Page Kits</span></a>
                                    <ul>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Dashboards</span></a>
                                            <ul>
                                                <li>
                                                    <a href="be_pages_dashboard2.html"><span class="sidebar-mini-hide">Dashboard 2</span></a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_dashboard3.html"><span class="sidebar-mini-hide">Dashboard 3</span></a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Crypto</span></a>
                                            <ul>
                                                <li>
                                                    <a href="be_pages_crypto_dashboard.html">Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_crypto_buy_sell.html">Buy/Sell</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_crypto_wallets.html">Wallets</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_crypto_settings.html">Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Commerce</span></a>
                                            <ul>
                                                <li>
                                                    <a href="be_pages_ecom_dashboard.html">Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_ecom_orders.html">Orders</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_ecom_order.html">Order</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_ecom_products.html">Products</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_ecom_product_edit.html">Product Edit</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_ecom_customer.html">Customer</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Learning</span></a>
                                            <ul>
                                                <li>
                                                    <a href="be_pages_elearning_courses.html">Courses</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_elearning_course.html">Course</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_elearning_lesson.html">Lesson</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Forum</span></a>
                                            <ul>
                                                <li>
                                                    <a href="be_pages_forum_categories.html">Categories</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_forum_topics.html">Topics</a>
                                                </li>
                                                <li>
                                                    <a href="be_pages_forum_discussion.html">Discussion</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Boxed Backend</span></a>
                                            <ul>
                                                <li>
                                                    <a href="bd_dashboard.html">Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="bd_search.html">Search</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                                </li>
                                                <li>
                                                    <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Blocks</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_blocks.html">Styles</a>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Widgets</a>
                                            <ul>
                                                <li>
                                                    <a href="be_blocks_widgets_users.html">Users</a>
                                                </li>
                                                <li>
                                                    <a href="be_blocks_widgets_stats.html">Stats</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="be_blocks_tiles.html">Tiles</a>
                                        </li>
                                        <li>
                                            <a href="be_blocks_draggable.html">Draggable</a>
                                        </li>
                                        <li>
                                            <a href="be_blocks_api.html">API</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Elements</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_ui_grid.html">Grid</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_icons.html">Icons</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_activity.html">Activity</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_buttons.html">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_navigation.html">Navigation</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_tabs.html">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_modals_tooltips.html">Modals &amp; Tooltips</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_images.html">Images</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_animations.html">Animations</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_ribbons.html">Ribbons</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="be_ui_color_themes.html">Color Themes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Tables</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_tables_styles.html">Styles</a>
                                        </li>
                                        <li>
                                            <a href="be_tables_responsive.html">Responsive</a>
                                        </li>
                                        <li>
                                            <a href="be_tables_helpers.html">Helpers</a>
                                        </li>
                                        <li>
                                            <a href="be_tables_pricing.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="be_tables_datatables.html">DataTables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="open">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_forms_elements_bootstrap.html">Bootstrap Elements</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_elements_material.html">Material Elements</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_css_inputs.html">CSS Inputs</a>
                                        </li>
                                        <li>
                                            <a class="active" href="be_forms_plugins.html">Plugins</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_editors.html">Editors</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_validation.html">Validation</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_wizard.html">Wizard</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_premade.html">Pre-made</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span></li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                                    <ul>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_default.html">Default</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_flipped.html">Flipped</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                            <ul>
                                                <li>
                                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                                    <ul>
                                                        <li>
                                                            <a href="be_layout_header_modern.html">Modern</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_classic.html">Classic</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_glass.html">Glass</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                                    <ul>
                                                        <li>
                                                            <a href="be_layout_header_fixed_modern.html">Modern</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_fixed_classic.html">Classic</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_fixed_glass.html">Glass</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_sidebar_inverse.html">Inverse</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_sidebar_hidden.html">Hidden</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_sidebar_mini.html">Mini</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_side_overlay_visible.html">Visible</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_content_boxed.html">Boxed</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_content_narrow.html">Narrow</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_content_full_width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_hero_color.html">Color</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_hero_image.html">Image</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_hero_video.html">Video</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="be_layout_api.html">API</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Components</span></a>
                                    <ul>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Main Menu</span></a>
                                            <ul>
                                                <li>
                                                    <a href="#">Link 1-1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Link 1-2</a>
                                                </li>
                                                <li>
                                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Link 2-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Link 2-2</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#">Link 3-1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Link 3-2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
                                            <ul>
                                                <li>
                                                    <a href="be_comp_chat_multiple.html">Multiple</a>
                                                </li>
                                                <li>
                                                    <a href="be_comp_chat_single.html">Single</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="be_comp_charts.html">Charts</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_sliders.html">Sliders</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_scrolling.html">Scrolling</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_rating.html">Rating</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_filtering.html">Filtering</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_appear.html">Appear</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_countto.html">CountTo</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_image_cropper.html">Image Cropper</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_maps_google.html">Google Maps</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_maps_vector.html">Vector Maps</a>
                                        </li>
                                        <li>
                                            <a href="be_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Generic</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_generic_blank.html">Blank</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_blank_block.html">Blank (Block)</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_blank_breadcrumb.html">Blank (Breadcrumb)</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_scrumboard.html">Scrum Board</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_search.html">Search</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_profile.html">Profile</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_inbox.html">Inbox</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_blog.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_story.html">Story</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_project_list.html">Project List</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_project.html">Project</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_upgrade_plan.html">Upgrade Plan</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_team.html">Team</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_contact.html">Contact</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_generic_todo.html">Todo</a>
                                        </li>
                                        <li>
                                            <a href="op_coming_soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="op_maintenance.html">Maintenance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Authentication</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_auth_all.html">All</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_signin.html">Sign In</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_signin2.html">Sign In 2</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_signin3.html">Sign In 3</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_signup.html">Sign Up</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_signup2.html">Sign Up 2</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_signup3.html">Sign Up 3</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_lock.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_lock2.html">Lock Screen 2</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_lock3.html">Lock Screen 3</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_reminder.html">Pass Reminder</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_reminder2.html">Pass Reminder 2</a>
                                        </li>
                                        <li>
                                            <a href="op_auth_reminder3.html">Pass Reminder 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-flag"></i><span class="sidebar-mini-hide">Error</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_error_all.html">All</a>
                                        </li>
                                        <li>
                                            <a href="op_error_400.html">400</a>
                                        </li>
                                        <li>
                                            <a href="op_error_401.html">401</a>
                                        </li>
                                        <li>
                                            <a href="op_error_403.html">403</a>
                                        </li>
                                        <li>
                                            <a href="op_error_404.html">404</a>
                                        </li>
                                        <li>
                                            <a href="op_error_500.html">500</a>
                                        </li>
                                        <li>
                                            <a href="op_error_503.html">503</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Layout Options (used just for demonstration) -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="page-header-options-dropdown">
                                <h6 class="dropdown-header">Header</h6>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                <div class="d-none d-xl-block">
                                    <h6 class="dropdown-header">Main Content</h6>
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="be_layout_api.html">
                                    <i class="si si-chemistry"></i> All Options (API)
                                </a>
                            </div>
                        </div>
                        <!-- END Layout Options -->

                        <!-- Color Themes (used just for demonstration) -->
                        <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-paint-brush"></i>
                            </button>
                            <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                                <h6 class="dropdown-header text-center">Color Themes</h6>
                                <div class="row no-gutters text-center mb-5">
                                    <div class="col-4 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_toggle">Sidebar Style</button>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="be_ui_color_themes.html">
                                    <i class="fa fa-paint-brush"></i> All Color Themes
                                </a>
                            </div>
                        </div>
                        <!-- END Color Themes -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                J. Smith<i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                    <i class="si si-note mr-5"></i> Invoices
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-tasks"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Datepicker (.js-datepicker and .input-daterange class is initialized in Codebase() -> uiHelperDatepicker()) -->
                    <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
                    <h2 class="content-heading">Bootstrap Datepicker</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Datepicker (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-datepicker1">Datepicker</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker2" name="example-datepicker2" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="example-datepicker3" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-daterange1">Date Range</label>
                                            <div class="col-lg-8">
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                    <input type="text" class="form-control" id="example-daterange1" name="example-daterange1" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                    <div class="input-group-prepend input-group-append">
                                                        <span class="input-group-text font-w600">to</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-daterange2" name="example-daterange2" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Inline Datepicker</label>
                                            <div class="col-12">
                                                <div class="js-datepicker" data-week-start="1" data-today-highlight="true"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Datepicker (Bootstrap forms) -->

                                <!-- Datepicker (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">Choose a date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker5" name="example-datepicker5" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="example-datepicker5">Choose a date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker6" name="example-datepicker6" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                    <label for="example-datepicker6">Choose a date</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Datepicker (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Bootstrap Datepicker -->

                    <!-- Bootstrap Colorpicker (.js-colorpicker class is initialized in Codebase() -> uiHelperColorpicker()) -->
                    <!-- For more info and examples you can check out https://github.com/itsjavi/bootstrap-colorpicker/ -->
                    <h2 class="content-heading">Bootstrap Colorpicker</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Colorpicker (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-colorpicker1">Normal</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-colorpicker form-control" id="example-colorpicker1" name="example-colorpicker1" value="#42a5f5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-colorpicker2">As Component</label>
                                            <div class="col-lg-8">
                                                <div class="js-colorpicker input-group">
                                                    <input type="text" class="form-control" id="example-colorpicker2" name="example-colorpicker2" value="#42a5f5">
                                                    <div class="input-group-append input-group-addon">
                                                        <div class="input-group-text">
                                                            <i></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-colorpicker3">RGBa</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-colorpicker form-control" data-colorpicker-mode="rgba" id="example-colorpicker3" name="example-colorpicker3" value="#42a5f5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-colorpicker4">RGBa (component)</label>
                                            <div class="col-lg-8">
                                                <div class="js-colorpicker input-group" data-colorpicker-mode="rgba">
                                                    <input type="text" class="form-control" id="example-colorpicker4" name="example-colorpicker4" value="#42a5f5">
                                                    <div class="input-group-append input-group-addon">
                                                        <div class="input-group-text">
                                                            <i></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Inline</label>
                                            <div class="col-12">
                                                <div class="js-colorpicker" id="color-container" data-container="#color-container" data-inline="true" data-color="#42a5f5"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Inline (component)</label>
                                            <div class="col-12">
                                                <div class="js-colorpicker" id="color-container2" data-container="#color-container2" data-mode="rgba" data-inline="true" data-color="#42a5f5"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Colorpicker (Bootstrap forms) -->

                                <!-- Colorpicker (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-colorpicker form-control" id="example-colorpicker5" name="example-colorpicker5" value="#42a5f5">
                                                    <label for="example-colorpicker5">Choose a color</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-colorpicker form-control" data-colorpicker-mode="rgba" id="example-colorpicker6" name="example-colorpicker6" value="#42a5f5">
                                                    <label for="example-colorpicker6">Choose a color (RGBa)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Colorpicker (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Bootstrap Colorpicker -->

                    <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Codebase() -> uiHelperMaxlength()) -->
                    <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                    <h2 class="content-heading">Bootstrap Maxlength</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Bootstrap Maxlength (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength1">Normal</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength1" name="example-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength2">Threshold</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength2" name="example-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength3">Always Show</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength3" name="example-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength4">Custom Text</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength4" name="example-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength5">Themed Label</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength5" name="example-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength6">Position (top)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength6" name="example-maxlength6" maxlength="20" placeholder="Top.." data-always-show="true" data-placement="top">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength7">Position (top-right)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength7" name="example-maxlength7" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength8">Position (right)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength8" name="example-maxlength8" maxlength="20" placeholder="Right.." data-always-show="true" data-placement="right">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength9">Position (bottom-right)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength9" name="example-maxlength9" maxlength="20" placeholder="Bottom Right.." data-always-show="true" data-placement="bottom-right">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength10">Textarea</label>
                                            <div class="col-lg-8">
                                                <textarea class="js-maxlength form-control" id="example-maxlength10" name="example-maxlength10" rows="3" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Bootstrap Maxlength (Bootstrap forms) -->

                                <!-- Bootstrap Maxlength (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength1" name="example-material-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
                                                    <label for="example-material-maxlength1">Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength2" name="example-material-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
                                                    <label for="example-material-maxlength2">Threshold</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength3" name="example-material-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
                                                    <label for="example-material-maxlength3">Threshold</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength4" name="example-material-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                                                    <label for="example-material-maxlength4">Custom Text</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength5" name="example-material-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary">
                                                    <label for="example-material-maxlength5">Themed Label</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength6" name="example-material-maxlength6" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
                                                    <label for="example-material-maxlength6">Position (top-right)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <textarea class="js-maxlength form-control" id="example-material-maxlength7" name="example-material-maxlength7" rows="3" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                                                    <label for="example-material-maxlength7">Textarea</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Bootstrap Maxlength (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Bootstrap Maxlength -->

                    <!-- Select2 (.js-select2 class is initialized in Codebase() -> uiHelperSelect2()) -->
                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                    <h2 class="content-heading">Select2</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Select2 (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-select2">Normal</label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="1">HTML</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">JavaScript</option>
                                                    <option value="4">PHP</option>
                                                    <option value="5">MySQL</option>
                                                    <option value="6">Ruby</option>
                                                    <option value="7">Angular</option>
                                                    <option value="8">React</option>
                                                    <option value="9">Vue.js</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-select2-multiple">Multiple Values</label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="example-select2-multiple" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="1">HTML</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">JavaScript</option>
                                                    <option value="4">PHP</option>
                                                    <option value="5">MySQL</option>
                                                    <option value="6">Ruby</option>
                                                    <option value="7">Angular</option>
                                                    <option value="8">React</option>
                                                    <option value="9">Vue.js</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Select2 (Bootstrap forms) -->

                                <!-- Select2 (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <select class="js-select2 form-control" id="example2-select2" name="example2-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                        <option value="1">HTML</option>
                                                        <option value="2">CSS</option>
                                                        <option value="3">JavaScript</option>
                                                        <option value="4">PHP</option>
                                                        <option value="5">MySQL</option>
                                                        <option value="6">Ruby</option>
                                                        <option value="7">AngularJS</option>
                                                    </select>
                                                    <label for="example2-select2">Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <select class="js-select2 form-control" id="example2-select2-multiple" name="example2-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                        <option value="1">HTML</option>
                                                        <option value="2">CSS</option>
                                                        <option value="3">JavaScript</option>
                                                        <option value="4">PHP</option>
                                                        <option value="5">MySQL</option>
                                                        <option value="6">Ruby</option>
                                                        <option value="7">AngularJS</option>
                                                    </select>
                                                    <label for="example2-select2-multiple">Multiple Values</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Select2 (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Select2 -->

                    <!-- jQuery Tags Input (.js-tags-input class is initialized in Codebase() -> uiHelperTagsInput()) -->
                    <!-- For more info and examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
                    <h2 class="content-heading">jQuery Tags Input</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- jQuery Tags Input (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-tags1">Normal</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="js-tags-input form-control" data-height="34px" id="example-tags1" name="example-tags1" value="HTML,CSS,JavaScript">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-tags1">Normal (big)</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="js-tags-input form-control" id="example-tags2" name="example-tags2" value="HTML,CSS,JavaScript">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END jQuery Tags Input (Bootstrap forms) -->

                                <!-- jQuery Tags Input (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-10">
                                                <div class="form-material">
                                                    <input type="text" class="js-tags-input form-control" data-height="34px" id="example-tags3" name="example-tags3" value="HTML,CSS,JavaScript">
                                                    <label for="example-tags3">Material</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-10">
                                                <div class="form-material">
                                                    <input type="text" class="js-tags-input form-control" id="example-tags4" name="example-tags4" value="HTML,CSS,JavaScript">
                                                    <label for="example-tags4">Material (big)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END jQuery Tags Input (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END jQuery Tags Input -->

                    <!-- jQuery AutoComplete (example functionality is initialized in js/pages/be_forms_plugins.js) -->
                    <!-- For more info and examples you can check out https://github.com/Pixabay/jQuery-autoComplete -->
                    <h2 class="content-heading">jQuery AutoComplete</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- jQuery Auto Complete (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-autocomplete1">Normal Search</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-autocomplete form-control" id="example-autocomplete1" name="example-autocomplete1" placeholder="Countries..">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END jQuery Auto Complete (Bootstrap forms) -->

                                <!-- jQuery Auto Complete (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-autocomplete form-control" id="example-autocomplete2" name="example-autocomplete2" placeholder="Countries..">
                                                    <label for="example-autocomplete2">Material Search</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END jQuery Auto Complete (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END jQuery AutoComplete -->

                    <!-- Masked Inputs (.js-masked-* classes are initialized in Codebase() -> uiHelperMaskedInputs()) -->
                    <!-- For more info and examples you can check out http://digitalbush.com/projects/masked-input-plugin/ -->
                    <h2 class="content-heading">Masked Inputs</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Default</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <!-- Masked Inputs (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-date1">Date (format 1)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-date form-control" id="example-masked-date1" name="example-masked-date1" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-date2">Date (format 2)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-date-dash form-control" id="example-masked-date2" name="example-masked-date2" placeholder="dd-mm-yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-phone">Phone</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-phone form-control" id="example-masked-phone" name="example-masked-phone" placeholder="(999) 999-9999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-phone-ext">Phone (Ext)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-phone-ext form-control" id="example-masked-phone-ext" name="example-masked-phone-ext" placeholder="(999) 999-9999? x99999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-taxid">Tax ID</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-taxid form-control" id="example-masked-taxid" name="example-masked-taxid" placeholder="99-9999999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-ssn">SSN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-ssn form-control" id="example-masked-ssn" name="example-masked-ssn" placeholder="999-99-9999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-pkey">Product Key</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-pkey form-control" id="example-masked-pkey" name="example-masked-pkey" placeholder="a*-999-a999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-time">Time Format</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-time form-control" id="example-masked-time" name="example-masked-time" placeholder="00:00">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Masked Inputs (Bootstrap forms) -->

                                <!-- Masked Inputs (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-masked-date form-control" id="example-masked2-date1" name="example-masked2-date1" placeholder="dd/mm/yyyy">
                                                    <label for="example-masked2-date1">Date (format 1)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-masked-date-dash form-control" id="example-masked2-date2" name="example-masked2-date2" placeholder="dd-mm-yyyy">
                                                    <label for="example-masked2-date2">Date (format 2)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material floating">
                                                    <input type="text" class="js-masked-phone form-control" id="example-masked2-phone" name="example-masked2-phone">
                                                    <label for="example-masked2-phone">Phone <small class="text-muted">(999) 999-9999</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material floating">
                                                    <input type="text" class="js-masked-phone-ext form-control" id="example-masked2-phone-ext" name="example-masked2-phone-ext">
                                                    <label for="example-masked2-phone-ext">Phone (Ext) <small class="text-muted">(999) 999-9999? x99999</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material floating">
                                                    <input type="text" class="js-masked-pkey form-control" id="example-masked2-pkey" name="example-masked2-pkey">
                                                    <label for="example-masked2-pkey">Product Key <small class="text-muted">a*-999-a999</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material floating">
                                                    <input type="text" class="js-masked-time form-control" id="example-masked2-time" name="example-masked2-time">
                                                    <label for="example-masked2-time">Time Format <small class="text-muted">00:00</small></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Masked Inputs (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Masked Inputs -->

                    <!-- Range Sliders -->
                    <!-- Ion Range Sliders (.js-rangeslider class is initialized in Codebase() -> uiHelperRangeslider()) -->
                    <!-- For more info and examples you can check out https://github.com/IonDen/ion.rangeSlider -->
                    <h2 class="content-heading">Range Sliders</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Normal</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider1" name="example-rangeslider1" value="25">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Min Max</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider2" name="example-rangeslider2" value="330" data-min="0" data-max="1000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Grid</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider3" name="example-rangeslider3" value="660" data-grid="true" data-min="0" data-max="1000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Double</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider4" name="example-rangeslider4" data-type="double" data-grid="true" data-min="0" data-max="1000" data-from="200" data-to="800">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Negative</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider5" name="example-rangeslider5" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-150" data-to="150">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Step</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider6" name="example-rangeslider6" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-250" data-to="250" data-step="50">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Custom</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider7" name="example-rangeslider7" data-grid="true" data-from="5" data-values="January, February, March, April, May, June, July, August, September, October, November, December">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Prefixes</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider8" name="example-rangeslider8" data-type="double" data-grid="true" data-min="0" data-max="10000" data-from="2500" data-to="7500" data-prefix="$">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Postfixes</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider9" name="example-rangeslider9" data-grid="true" data-min="-20" data-max="90" data-from="35" data-postfix="&deg;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Range Sliders -->

                    <!-- DropzoneJS -->
                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                    <h2 class="content-heading">DropzoneJS</h2>
                    <div class="block">
                        <div class="block-content block-content-full">
                            <!-- DropzoneJS Container -->
                            <form class="dropzone" action="be_forms_plugins.html"></form>
                        </div>
                    </div>
                    <!-- END DropzoneJS -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 2.0</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/codebase/assets/js/core/jquery.min.js"></script>
        <script src="assets/codebase/assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="assets/codebase/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/codebase/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/codebase/assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/codebase/assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/codebase/assets/js/core/js.cookie.min.js"></script>
        <script src="assets/codebase/assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/codebase/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/dropzonejs/min/dropzone.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/codebase/assets/js/pages/be_forms_plugins.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
    </body>
</html>