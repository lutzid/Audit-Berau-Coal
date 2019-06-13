<!-- Untuk menampilkan halaman form pengisian overdue pada monitoring yang dilakukan auditee  -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
        <link rel="stylesheet" href="{{asset('assets/codebase/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
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
                    <h2 class="content-heading font-w700">Complete PLOR Detail</h2>
                    <div class="block">
                    @include('layouts.messages')
                        <div class="block-content">
                            <form class="js-validation-material" action="" method="post" novalidate="novalidate">
                            @csrf
                                <div class="p-10 h5 bg-earth-light text-center font-w700">PLOR Detail</div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->no_nc}}">
                                        <label>NO NC</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->audit_period}}">
                                        <label>Audit Period</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->depcont}}">
                                        <label>Department/Contractor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->site}}">
                                        <label>Site</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->date}}">
                                        <label>Date</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->auditor}}">
                                        <label>Auditor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->problem}}">
                                        <label>Problem</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->location}}">
                                        <label>Location</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->object}}">
                                        <label>Object</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->category}}">
                                        <label>Category</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->smkp}}">
                                        <label>Reference SMKP</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->smk3}}">
                                        <label>Reference SMK3</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->ohsas}}">
                                        <label>Reference OHSAS</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->iso}}">
                                        <label>Reference ISO</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <input type="text" class="form-control" disabled="" placeholder="{{$plor->begems}}">
                                        <label>Reference BeGeMS</label>
                                    </div>
                                </div>
                                <div class="p-10 h5 bg-earth-light text-center font-w700">Fillable PLOR Overdue</div>
                                <div class="form-group">
                                    <div class="form-material floating open">
                                        <input type="text" class="js-datepicker form-control" id="expired" name="expired" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                        <label for="expired">Expired</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control valid" id="reason" name="reason" aria-describedby="reason-error" aria-invalid="false">
                                        <label for="reason">Alasan Keterlambatan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control valid" id="note" name="note" aria-describedby="note-error" aria-invalid="false">
                                        <label for="note">Note from Auditor</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-alt-primary" data-toggle="modal" data-target="#modal-slideup"> Submit</a>
                                    <a href="/monitoring">
                                    <button type="button" class="btn btn-alt-secondary">Back</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <!-- END Main Container -->
            <div class="modal fade" id="modal-slideup" tabindex="-1" role="dialog" aria-labelledby="modal-slideup" aria-hidden="true">
                <div class="modal-dialog modal-dialog-slideup" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-content">
                                <button type="button" class="btn btn-lg btn-circle btn-primary mr-5 mb-5 pull-right" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                                <p class="text-left">
                                    <span class="font-w700 mr-5 font-size-h2 text-primary">Data telah terisi</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer id="page-footer" class="bg-white">
                @include('layouts.footer')
            </footer>
            <!-- END Footer -->
        </div>
        <script src="{{asset('assets/codebase/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker']);
            });
        </script>

    </body>
</html>

                