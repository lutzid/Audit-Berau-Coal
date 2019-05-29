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

                        <!-- Validation Wizard Material -->
                        <div class="js-wizard-validation-material block">
                            <!-- Step Tabs -->
                            <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="#wizard-validation-material-step1" data-toggle="tab">ISPS Code</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active show" href="#wizard-validation-material-step2" data-toggle="tab">K3L Spesial Audit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#wizard-validation-material-step3" data-toggle="tab">K3L Semester 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#wizard-validation-material-step4" data-toggle="tab">K3L Semester 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#wizard-validation-material-step5" data-toggle="tab">Audit SIAP</a>
                                </li>
                            </ul>
                            <!-- END Step Tabs -->
        
                            <!-- Form -->
                            <form class="js-wizard-validation-material-form" action="be_forms_wizard.html" method="post" novalidate="novalidate">
                                <!-- Steps Content -->
                                <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                                    <!-- Step 1 -->
                                    <div class="tab-pane" id="wizard-validation-material-step1" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-firstname" name="wizard-validation-material-firstname" aria-describedby="wizard-validation-material-firstname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-firstname">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 1 -->
        
                                    <!-- Step 2 -->
                                    <div class="tab-pane" id="wizard-validation-material-step1" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-firstname" name="wizard-validation-material-firstname" aria-describedby="wizard-validation-material-firstname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-firstname">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 2 -->
        
                                    <!-- Step 3 -->
                                    <div class="tab-pane" id="wizard-validation-material-step1" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-firstname" name="wizard-validation-material-firstname" aria-describedby="wizard-validation-material-firstname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-firstname">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 3 -->

                                    <!-- Step 4 -->
                                    <div class="tab-pane" id="wizard-validation-material-step1" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-firstname" name="wizard-validation-material-firstname" aria-describedby="wizard-validation-material-firstname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-firstname">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Remaks</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 4 -->

                                    <!-- Step 5 -->
                                    <div class="tab-pane" id="wizard-validation-material-step1" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-firstname" name="wizard-validation-material-firstname" aria-describedby="wizard-validation-material-firstname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-firstname">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating open">
                                                <input class="form-control valid" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname" aria-describedby="wizard-validation-material-lastname-error" aria-invalid="false">
                                                <label for="wizard-validation-material-lastname">Remaks</label>
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
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-white">
                @include('layouts.footer')
            </footer>
            <!-- END Footer -->
        </div>
        <script src="assets/codebase/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/codebase/assets/js/pages/be_forms_plugins.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/codebase/assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="assets/codebase/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/codebase/assets/js/pages/be_forms_wizard.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>

    </body>
</html>
