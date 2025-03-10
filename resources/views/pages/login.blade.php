<!-- Untuk menampilkan halaman login/awal -->
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        @include('layouts.header')
        <style>
            #slide{
                background-color: rgba(255, 255, 255, 0.7)
            }
        </style>
    </head>
    <body>
        <!-- Page Container -->
        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('img/bgloginfix.jpeg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Better Energy, Brighter Future.
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy">2019</span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center" data-toggle="appear" data-class="animated fadeInRight" id="slide">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="font-w700" target="_blank" href="https://www.beraucoalenergy.co.id">
                                        <img class="img-fluid" src="{{url('img/berauwhite.png')}}">
                                    </a>
                                    <h1 class="h3 font-w700 mt-30 mb-10">Welcome to K3L Audit</h1>
                                    @include('layouts.messages')
                                    <h2 class="h5 font-w400 text-muted mb-0">Please sign in</h2>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <form class="js-validation-signin px-30" action="{{url('login_user')}}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="login-username" name="login-username">
                                                <label for="login-username">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="login-password" name="login-password">
                                                <label for="login-password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                                <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero bg-success text-dark">
                                            <i class="si si-login mr-10"></i> Sign In
                                        </button>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
        <!-- Page JS Plugins -->
        <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('js/signin.js')}}"></script>
    </body>
</html>