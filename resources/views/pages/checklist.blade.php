<!-- Untuk menampilkan halaman checklist -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
        <link rel="stylesheet" href="{{asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">

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
                <!-- Material Forms Validation -->
                    <h2 class="content-heading font-w700">Checklist Audit</h2>
                    <div class="block">
                    @include('layouts.messages')
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <form class="js-validation-material" action="" method="post">
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-auditname" name="val-auditname" placeholder="Enter audit name..">
                                                <label for="val-auditname">Audit Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                    <label for="example-datepicker1">From</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material floating open">
                                                    <input type="text" class="js-datepicker form-control" id="end-datepicker1" name="end-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                    <label for="end-datepicker1">To</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-0" for="example-file-input">Upload File</label>
                                            <div class="col-0">
                                                <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <td><a class="btn btn-alt-primary" data-toggle="modal" data-target="#modal-slideup"> Submit</a></td>
                                            <a href="/checklist">
                                            <button type="button" class="btn btn-alt-secondary">Back</button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- END Material Forms Validation -->
            </main>
            <!-- END Main Container -->

            <!-- Large modal -->
            <div class="modal fade" id="modal-slideup" tabindex="-1" role="dialog" aria-labelledby="modal-slideup" aria-hidden="true">
                <div class="modal-dialog modal-dialog-slideup" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-content">
                                <button type="button" class="btn btn-lg btn-circle btn-primary mr-5 mb-5 pull-right" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                                <p class="text-left">
                                    <span class="font-w700 mr-5 font-size-h2 text-primary">File Telah Terupload</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Large Modal -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-white">
                @include('layouts.footer')
            </footer>
            <!-- END Footer -->
        </div>

        <script src="{{asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
        <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('js/plugins/jquery-validation/additional-methods.min.js')}}"></script>
        
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
    </body>
</html>
