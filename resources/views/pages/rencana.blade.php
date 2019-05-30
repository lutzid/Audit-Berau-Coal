<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

    </head>
    <body>
        <div id="page-container" class="page-header-fixed page-header main-content-boxed side-trans-enabled sidebar-o">
            <!-- Sidebar -->
            @include('layouts.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                @include('layouts.navbar')
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">  
                <div class="content">
                    <h2 class="content-heading font-w700">Rencana Audit Tahunan</h2>
                    <div class="block">
                        <!-- Validation Wizard Material -->
                        <div class="js-wizard-validation-material block">
                            <!-- Step Tabs -->
                            <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="#isps" data-toggle="tab">ISPS Code Audit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#special" data-toggle="tab">Special Audit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#smt1" data-toggle="tab">Audit Semester 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#smt2" data-toggle="tab">Audit Semester 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#siap" data-toggle="tab">SIAP Audit</a>
                                </li>
                            </ul>
                            <!-- END Step Tabs -->
        
                            <!-- Form -->
                            <form class="js-wizard-validation-material-form" action="{{url('post_rencana')}}" method="post" novalidate="novalidate">
                                @csrf
                                <!-- Steps Content -->
                                <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                                    <!-- Step 1 -->
                                    <div class="tab-pane" id="isps" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="isps-scope" name="isps-scope" aria-describedby="isps-scope-error" aria-invalid="false">
                                                <label for="isps-scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="isps-content" name="isps-content" aria-describedby="isps-content-error" aria-invalid="false">
                                                <label for="isps-content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="isps-from" name="isps-from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="isps-from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="isps-to" name="isps-to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="isps-to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="isps-remaks" name="isps-remaks" aria-describedby="isps-remaks-error" aria-invalid="false">
                                                <label for="isps-remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 1 -->

                                    <!-- Step 2 -->
                                    <div class="tab-pane" id="special" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="special-scope" name="special-scope" aria-describedby="special-scope-error" aria-invalid="false">
                                                <label for="special-scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="special-content" name="special-content" aria-describedby="special-content-error" aria-invalid="false">
                                                <label for="special-content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="special-from" name="special-from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="special-from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="special-to" name="special-to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="special-to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="special-remaks" name="special-remaks" aria-describedby="special-remaks-error" aria-invalid="false">
                                                <label for="special-remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 2 -->

                                    <!-- Step 3 -->
                                    <div class="tab-pane" id="smt1" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt1-scope" name="smt1-scope" aria-describedby="smt1-scope-error" aria-invalid="false">
                                                <label for="smt1-scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt1-content" name="smt1-content" aria-describedby="smt1-content-error" aria-invalid="false">
                                                <label for="smt1-content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="smt1-from" name="smt1-from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="smt1-from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="smt1-to" name="smt1-to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="smt1-to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt1-remaks" name="smt1-remaks" aria-describedby="smt1-remaks-error" aria-invalid="false">
                                                <label for="smt1-remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 3 -->

                                    <!-- Step 4 -->
                                    <div class="tab-pane" id="smt2" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt2-scope" name="smt2-scope" aria-describedby="smt2-scope-error" aria-invalid="false">
                                                <label for="smt2-scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt2-content" name="smt2-content" aria-describedby="smt2-content-error" aria-invalid="false">
                                                <label for="smt2-content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="smt2-from" name="smt2-from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="smt2-from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="smt2-to" name="smt2-to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="smt2-to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt2-remaks" name="smt2-remaks" aria-describedby="smt2-remaks-error" aria-invalid="false">
                                                <label for="smt2-remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 4 -->

                                    <!-- Step 5 -->
                                    <div class="tab-pane" id="siap" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="siap-scope" name="siap-scope" aria-describedby="siap-scope-error" aria-invalid="false">
                                                <label for="siap-scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="siap-content" name="siap-content" aria-describedby="siap-content-error" aria-invalid="false">
                                                <label for="siap-content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="siap-from" name="siap-from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="siap-from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="siap-to" name="siap-to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="siap-to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="siap-remaks" name="siap-remaks" aria-describedby="siap-remaks-error" aria-invalid="false">
                                                <label for="siap-remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 5 -->
        
                                </div>
                                <!-- END Steps Content -->
        
                                <!-- Steps Navigation -->
                                <div class="block-content block-content-sm block-content-full bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                <i class="fa fa-angle-left mr-5"></i> Previous
                                            </button>
                                        </div>
                                        <div class="col-6 text-right">
                                            <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                Next <i class="fa fa-angle-right ml-5"></i>
                                            </button>
                                            <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                                <i class="fa fa-check mr-5"></i> Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Steps Navigation -->
                            </form>
                            <!-- END Form -->
                        </div>
                        <!-- END Validation Wizard 2 -->
                    </div>
                </div>
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-white">
                @include('layouts.footer')
            </footer>
            <!-- END Footer -->
        </div>

        <!-- Page JS Plugins -->
        <script src="{{asset('assets/codebase/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/codebase/assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
        <script src="{{asset('assets/codebase/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('js/rencana.js')}}"></script>
        <script>
            jQuery(function () {
                Codebase.helpers(['datepicker']);
            });
        </script>

    </body>
</html>
