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
                    @include('layouts.messages')s
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
                                                <input class="form-control valid" type="text" id="isps_scope" name="isps_scope" aria-describedby="isps_scope-error" aria-invalid="false">
                                                <label for="isps_scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="isps_content" name="isps_content" aria-describedby="isps_content-error" aria-invalid="false">
                                                <label for="isps_content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="isps_from" name="isps_from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="isps_from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="isps_to" name="isps_to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="isps_to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="isps_remaks" name="isps_remaks" aria-describedby="isps_remaks-error" aria-invalid="false">
                                                <label for="isps_remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 1 -->

                                    <!-- Step 2 -->
                                    <div class="tab-pane" id="special" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="special_scope" name="special_scope" aria-describedby="special_scope-error" aria-invalid="false">
                                                <label for="special_scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="special_content" name="special_content" aria-describedby="special_content-error" aria-invalid="false">
                                                <label for="special_content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="special_from" name="special_from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="special_from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="special_to" name="special_to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="special_to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="special_remaks" name="special_remaks" aria-describedby="special_remaks-error" aria-invalid="false">
                                                <label for="special_remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 2 -->

                                    <!-- Step 3 -->
                                    <div class="tab-pane" id="smt1" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt1_scope" name="smt1_scope" aria-describedby="smt1_scope-error" aria-invalid="false">
                                                <label for="smt1_scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt1_content" name="smt1_content" aria-describedby="smt1_content-error" aria-invalid="false">
                                                <label for="smt1_content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="smt1_from" name="smt1_from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="smt1_from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="smt1_to" name="smt1_to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="smt1_to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt1_remaks" name="smt1_remaks" aria-describedby="smt1_remaks-error" aria-invalid="false">
                                                <label for="smt1_remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 3 -->

                                    <!-- Step 4 -->
                                    <div class="tab-pane" id="smt2" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt2_scope" name="smt2_scope" aria-describedby="smt2_scope-error" aria-invalid="false">
                                                <label for="smt2_scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt2_content" name="smt2_content" aria-describedby="smt2_content-error" aria-invalid="false">
                                                <label for="smt2_content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="smt2_from" name="smt2_from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="smt2_from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="smt2_to" name="smt2_to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="smt2_to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="smt2_remaks" name="smt2_remaks" aria-describedby="smt2_remaks-error" aria-invalid="false">
                                                <label for="smt2_remaks">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 4 -->

                                    <!-- Step 5 -->
                                    <div class="tab-pane" id="siap" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="siap_scope" name="siap_scope" aria-describedby="siap_scope-error" aria-invalid="false">
                                                <label for="siap_scope">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="siap_content" name="siap_content" aria-describedby="siap_content-error" aria-invalid="false">
                                                <label for="siap_content">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="siap_from" name="siap_from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="siap_from">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="siap_to" name="siap_to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="siap_to">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control valid" type="text" id="siap_remaks" name="siap_remaks" aria-describedby="siap_remaks-error" aria-invalid="false">
                                                <label for="siap_remaks">Remaks</label>
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
