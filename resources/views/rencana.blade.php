<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')

        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">

                    <!-- Material Forms Validation -->
                    <h2 class="content-heading">Material Forms</h2>
                    <div class="block">
                        
                        <div class="block-header block-header-default">
                            <h3 class="block-title">ISPS Code</h3>
                        </div>
                        <!-- <div class="block-content"> -->
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-material" action="be_forms_validation.html" method="post">
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Scope..">
                                                <label for="val-username2">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Content..">
                                                <label for="val-username2">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Remaks..">
                                                <label for="val-username2">Remaks</label>
                                            </div>
                                        </div>
                        
                            <div class="block-header block-header-default">
                                <h3 class="block-title">K3L Spesial Audit</h3>
                            </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Scope..">
                                                <label for="val-username2">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Content..">
                                                <label for="val-username2">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Remaks..">
                                                <label for="val-username2">Remaks</label>
                                            </div>
                                        </div>
                            <div class="block-header block-header-default">
                                <h3 class="block-title">K3L semester 1</h3>
                            </div> 
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Scope..">
                                                <label for="val-username2">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Content..">
                                                <label for="val-username2">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Remaks..">
                                                <label for="val-username2">Remaks</label>
                                            </div>
                                        </div>
                            <div class="block-header block-header-default">
                                <h3 class="block-title">K3L semester 2</h3>
                            </div>
                        
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Scope..">
                                                <label for="val-username2">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Content..">
                                                <label for="val-username2">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Remaks..">
                                                <label for="val-username2">Remaks</label>
                                            </div>
                                        </div>
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Audit Siap</h3>
                            </div> 
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Scope..">
                                                <label for="val-username2">Audit Scope</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Audit Content..">
                                                <label for="val-username2">Audit Content</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">From</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">To</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter Remaks..">
                                                <label for="val-username2">Remaks</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Material Forms Validation -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <script src="assets/codebase/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/codebase/assets/js/pages/be_forms_plugins.js"></script>
        <script src="assets/codebase/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/dropzonejs/min/dropzone.min.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
    </body>
</html>
