<!-- Untuk menampilkan halaman untuk mengedit form plor  -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
        <link rel="stylesheet" href="{{asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
        <link rel="stylesheet" href="{{asset('js/plugins/select2/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('js/plugins/select2/select2-bootstrap.min.css')}}">
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
                    <h2 class="content-heading font-w700">Edit PLOR Audit</h2>
                    <div class="block">
                    @include('layouts.messages')
                        <div class="block-content">
                            <form class="js-validation-material" action="{{url('edit_plor', $plor->id)}}" method="post" novalidate="novalidate">
                            @csrf
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control valid" id="no_nc" name="no_nc" aria-describedby="no_nc-error" aria-invalid="false" value="{{$plor->no_nc}}">
                                        <label for="no_nc">No NC</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control valid" id="audit_period" name="audit_period" aria-describedby="audit_period-error" aria-invalid="false" value="{{$plor->audit_period}}">
                                        <label for="audit_period">Audit Period</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="depcont" name="depcont" style="width: 100%;" data-placeholder="Choose Department/Contractor.." tabindex="-1" aria-hidden="true">
                                            <option value="{{$plor->depcont}}" selected>{{$plor->depcont}}</option>
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
                                            <option value="{{$plor->site}}" selected>{{$plor->site}}</option>
                                            @foreach($sites as $site)
                                            <option value="{{$site->name}}">{{$site->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="site">Site</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="js-datepicker form-control" id="date" name="date" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{$plor->date}}">
                                        <label for="date">Date</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="auditor" name="auditor[]" style="width: 100%;" data-placeholder="Choose Auditor(1 or more).." tabindex="-1" aria-hidden="true" multiple="multiple">
                                            <option value="{{$plor->auditor}}" selected>{{$plor->auditor}}</option>
                                            @foreach($auds as $aud)
                                            <option value="{{$aud->name}}">{{$aud->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="auditor">Auditor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control valid" id="problem" name="problem" aria-describedby="problem-error" aria-invalid="false" value="{{$plor->problem}}">
                                        <label for="problem">Problem</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control valid" id="location" name="location" aria-describedby="location-error" aria-invalid="false" value="{{$plor->location}}">
                                        <label for="location">Location</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control valid" id="object" name="object" aria-describedby="object-error" aria-invalid="false" value="{{$plor->object}}">
                                        <label for="object">Object</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="category" name="category" style="width: 100%;" data-placeholder="Choose Category.." tabindex="-1" aria-hidden="true"">
                                            <option value="{{$plor->category}}" selected>{{$plor->category}}</option>
                                            @foreach($cats as $cat)
                                            <option value="{{$cat->name}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="category">Category</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="smkp" name="smkp" value="{{$plor->smkp}}">
                                        <label for="smkp">Reference SMKP</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="smk3" name="smk3" value="{{$plor->smk3}}">
                                        <label for="smk3">Reference SMK3</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="ohsas" name="ohsas" value="{{$plor->ohsas}}">
                                        <label for="ohsas">Reference OHSAS</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="iso" name="iso" value="{{$plor->iso}}">
                                        <label for="iso">Reference ISO</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" id="begems" name="begems" value="{{$plor->begems}}">
                                        <label for="begems">Reference BeGeMS</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="js-select2 form-control" id="approver" name="approver" style="width: 100%;" data-placeholder="Choose Approver Lead Auditor.." tabindex="-1" aria-hidden="true">
                                            <option value="{{$plor->approver}}" selected>{{$plor->approver}}</option>
                                            @foreach($apps as $app)
                                            <option value="{{$app->name}}">{{$app->name}}</option>
                                            @endforeach
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
        <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
        
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
