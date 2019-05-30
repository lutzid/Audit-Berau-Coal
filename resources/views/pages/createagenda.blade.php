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
                        <div class="block-content">
                            <form class="js-validation-material" action="be_forms_elements_material.html" method="post" onsubmit="return false;" novalidate="novalidate">
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <select class="form-control" id="dept-cont" name="dept-cont">
                                            <option></option><!-- Empty value for demostrating material select box -->
                                            <option value="1">Dept 1</option>
                                            <option value="2">Dept 2</option>
                                            <option value="3">Dept 3</option>
                                        </select>
                                        <label for="dept-cont">Departemen/Kontraktor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <select class="form-control" id="site" name="site">
                                            <option></option><!-- Empty value for demostrating material select box -->
                                            <option value="1">Site 1</option>
                                            <option value="2">Site 2</option>
                                            <option value="3">Site 3</option>
                                        </select>
                                        <label for="site">Site</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="audit-scope" name="audit-scope">
                                        <label for="audit-scope">Audit Scope</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <select class="form-control" id="auditee" name="auditee">
                                            <option></option><!-- Empty value for demostrating material select box -->
                                            <option value="1">Auditee 1</option>
                                            <option value="2">Auditee 2</option>
                                            <option value="3">Auditee 3</option>
                                        </select>
                                        <label for="auditee">Auditee</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <select class="form-control" id="auditor" name="auditor">
                                            <option></option><!-- Empty value for demostrating material select box -->
                                            <option value="1">Auditor 1</option>
                                            <option value="2">Auditor 2</option>
                                            <option value="3">Auditor 3</option>
                                        </select>
                                        <label for="auditor">Auditor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating open">
                                        <input type="text" class="js-datepicker form-control" id="from" name="from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                        <label for="from">From</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating open">
                                        <input type="text" class="js-datepicker form-control" id="to" name="to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                        <label for="to">To</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <select class="form-control" id="approver" name="approver">
                                            <option></option><!-- Empty value for demostrating material select box -->
                                            <option value="1">Supv</option>
                                            <option value="2">Supt</option>
                                            <option value="3">Manager</option>
                                            <option value="4">General Manager</option>
                                        </select>
                                        <label for="approver">Auditor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                                </div>
                            </form>
                        </div>
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
        <script src="{{asset('assets/codebase/assets/js/plugins/jquery-validation/additional-methods.min.js')}}"></script>


        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker']);
            });
        </script>


    </body>
</html>
