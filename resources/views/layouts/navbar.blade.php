<!-- Header Content -->
<div class="content-header">
    <!-- Left Section -->
    <div class="content-header-section">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            
        </ul>
    </div>
    <!-- END Left Section -->

    <!-- Middle Section -->
    <div class="content-header-section">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#"><img class="img-fluid" src="{{url('img/berauwhite.png')}}"></a>
            </li>
        </ul>
    </div>
    <!-- END Middle Section -->

    <!-- Right Section -->
    <div class="content-header-section">
        <ul class="nav nav-tabs">
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Session('user')->username}}</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/dashboard">Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('logout_user')}}">Sign Out</a>
                </div>
            </li>
        </ul>

        <!-- END Toggle Sidebar -->
    </div>
    <!-- END Right Section -->
</div>
<!-- END Header Content -->

<!-- Header Search -->
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