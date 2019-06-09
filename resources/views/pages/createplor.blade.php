<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="assets/codebase/assets/js/plugins/select2/select2-bootstrap.min.css">
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
                    <h2 class="content-heading font-w700">PLOR Audit</h2>
                    <div class="block">
                        <div class="block-content">
                            <form class="js-validation-material" action="{{url('post_plor')}}" method="post" novalidate="novalidate">
                            @csrf
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control valid" id="no_nc" name="no_nc" aria-describedby="no_nc-error" aria-invalid="false">
                                        <label for="no_nc">No NC</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control valid" id="audit_period" name="audit_period" aria-describedby="audit_period-error" aria-invalid="false">
                                        <label for="audit_period">Audit Period</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="depcont" name="depcont" style="width: 100%;" data-placeholder="Choose Department/Contractor.." tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            @foreach($depts as $dept)
                                            <option value="{{$dept->name}}">{{$dept->name}}</option>
                                            @endforeach
                                            @foreach($conts as $cont)
                                            <option value="{{$cont->name}}">{{$cont->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="depcont">Department/Contractor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="site" name="site" style="width: 100%;" data-placeholder="Choose Site.." tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            @foreach($sites as $site)
                                            <option value="{{$site->name}}">{{$site->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="site">Site</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating open">
                                        <input type="text" class="js-datepicker form-control" id="date" name="date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                        <label for="date">Date</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="auditor" name="auditor[]" style="width: 100%;" data-placeholder="Choose Auditor(1 or more).." tabindex="-1" aria-hidden="true" multiple="multiple">
                                            <option></option>
                                            @foreach($auds as $aud)
                                            <option value="{{$aud->name}}">{{$aud->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="auditor">Auditor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control valid" id="problem" name="problem" aria-describedby="problem-error" aria-invalid="false">
                                        <label for="problem">Problem</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control valid" id="location" name="location" aria-describedby="location-error" aria-invalid="false">
                                        <label for="location">Location</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="category" name="category" style="width: 100%;" data-placeholder="Choose Category.." tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            @foreach($cats as $cat)
                                            <option value="{{$cat->name}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="category">Category</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="smkp" name="smkp">
                                        <label for="smkp">Reference SMKP</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="smk3" name="smk3">
                                        <label for="smk3">Reference SMK3</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="ohsas" name="ohsas">
                                        <label for="ohsas">Reference OHSAS</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="iso" name="iso">
                                        <label for="iso">Reference ISO</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="begems" name="begems">
                                        <label for="begems">Reference BeGeMS</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="approver" name="approver" style="width: 100%;" data-placeholder="Choose Approver Lead Auditor.." tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            @foreach($apps as $app)
                                            <option value="{{$app->name}}">{{$app->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="approver">Approver</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <td><a class="btn btn-alt-primary" data-toggle="modal" data-target="#modal-slideup"> Submit</a></td>
                                </div>
                            </form>

                                <!-- Select2 (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        
                                    </form>
                                </div>
                                <!-- END Select2 (Material forms) -->
                        </div>
                    </div>
                </div>
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
                                    <span class="font-w700 mr-5 font-size-h2 text-primary">Plor Telah Tersubmit</span>
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

        <!-- Page JS Plugins -->
        <script src="assets/codebase/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/select2/select2.full.min.js"></script>
        <!-- Page JS Code -->
        <script src="{{asset('js/plor.js')}}"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'select2']);
            });
        </script>


    </body>
</html>
