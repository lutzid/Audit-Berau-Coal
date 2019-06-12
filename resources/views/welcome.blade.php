<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
    </head>
    <body>
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header main-content-boxed">
            <!-- Sidebar -->
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    
                    <a class="font-w700 mr-5" href="index.html">
                        <span class="font-size-xl text-primary">Berau Coal</span>
                    </a>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <div class="content-header-section">
                            <img class="img-fluid" src="{{asset('assets/codebase/assets/img/logos/berauwhite.png')}}">
                        </div>
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Loader -->
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
                <div class="content content-full">
                    <div class="row">
                        <div class="col-sm">
                            <div>
                                <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Login</h3>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <form class="js-validation-bootstrap" action="be_forms_validation.html" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Password..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="block block-rounded bg-image" style="background-image: url({{asset('assets/codebase/assets/img/photos/minetruck.png')}});">
                                <div class="block-content">
                                    <p class="text-right py-200">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
            </footer>
            <!-- END Footer -->
        </div>
    </body>
</html>
