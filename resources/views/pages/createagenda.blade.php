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
                    <h2 class="content-heading font-w700">Agenda Audit</h2>
                    <div class="block">
                        <div class="block-content">
                            <form class="js-validation-material" action="{{url('post_agenda')}}" method="post" snovalidate="novalidate">
                            @csrf
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
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="scope" name="scope" placeholder="Enter Audit Scope..">
                                        <label for="scope">Audit Scope</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="auditee" name="auditee" style="width: 100%;" data-placeholder="Choose Auditee.." tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            @foreach($audis as $audi)
                                            <option value="{{$audi->name}}">{{$audi->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="auditee">Auditee</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="auditor" name="auditor[]" style="width: 100%;" data-placeholder="Choose Auditor.." tabindex="-1" aria-hidden="true" multiple="multiple">
                                            <option></option>
                                            @foreach($auds as $aud)
                                            <option value="{{$aud->name}}">{{$aud->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="auditor">Auditor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating open">
                                        <input type="text" class="js-datepicker form-control" id="from" name="from" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                        <label for="from">From</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating open">
                                        <input type="text" class="js-datepicker form-control" id="to" name="to" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                        <label for="to">To</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="approver" name="approver" style="width: 100%;" data-placeholder="Choose Approver.." tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="Feri Indrayana">Feri Indrayana</option>
                                            <option value="Yombi Gautama">Yombi Gautama</option>
                                            <option value="Sutami Sitorus">Sutami Sitorus</option>
                                            <option value="Bobby Riyanto">Bobby Riyanto</option>
                                        </select>
                                        <label for="approver">Approver</label>
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
        <script src="assets/codebase/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/codebase/assets/js/plugins/select2/select2.full.min.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'select2']);
            });
        </script>


    </body>
</html>
