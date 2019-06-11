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
                    <h2 class="content-heading font-w700">Monitoring Hasil Audit</h2>
                    <div class="block">
                    @include('layouts.messages')
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter table-bordered">
                                    <thead>
                                        <tr class="bg-gd-earth text-white text-center font-w700 h6">
                                            <th>NO NC</th>
                                            <th>Audit Period</th>
                                            <th>Departemen/Kontraktor</th>
                                            <th>Site</th>
                                            <th>Date</th>
                                            <th>Auditor</th>
                                            <th>Problem</th>
                                            <th>Location</th>
                                            <th>Object</th>
                                            <th>Category</th>
                                            <th>Details</th>
                                            <th>Auditee Previlege</th>
                                            <th>Approver</th>
                                            <th>Overdue</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($plors as $plor)
                                        <tr>
                                            <td>{{$plor->no_nc}}</td>
                                            <td>{{$plor->audit_period}}</td>
                                            <td>{{$plor->depcont}}</td>
                                            <td>{{$plor->site}}</td>
                                            <td>{{$plor->date}}</td>
                                            <td>{{$plor->auditor}}</td>
                                            <td>{{$plor->problem}}</td>
                                            <td>{{$plor->location}}</td>
                                            <td>{{$plor->object}}</td>
                                            <td>{{$plor->category}}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary" type="button" data-toggle="modal" data-target="#myRef" data-smkp="{{$plor->smkp}}" data-smk3="{{$plor->smk3}}" data-ohsas="{{$plor->ohsas}}" data-iso="{{$plor->iso}}" data-begems="{{$plor->begems}}" data-problem="{{$plor->problem}}" data-location="{{$plor->location}}" data-object="{{$plor->object}}">
                                                    Detail
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary" type="button" data-toggle="modal" data-target="#myRef2" data-root="{{$plor->root}}" data-corrective="{{$plor->corrective}}" data-due_date1="{{$plor->due_date1}}" data-pj1="{{$plor->pj1}}" data-eviden="{{$plor->eviden}}" data-preventive="{{$plor->preventive}}" data-due_date2="{{$plor->due_date2}}" data-pj2="{{$plor->pj2}}">
                                                    Show
                                                </a>
                                                @if(session('user')->status == 'Auditee')
                                                <a href="/fillAuditee/{{$plor->id}}" class="btn btn-outline-primary">Fill</a>
                                                @endif
                                            </td>
                                            <td>
                                                <p class="h6">
                                                {{$plor->status2}}
                                                </p>
                                                @if((session('user')->username == 'pjo' || session('user')->username == 'depthead' ) && $plor->status2 != 'Approved')
                                                <a href="/approvePJO/{{$plor->id}}" class="btn btn-outline-primary">Approve</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary" type="button" data-toggle="modal" data-target="#myRef3" data-expired="{{$plor->expired}}" data-reason="{{$plor->reason}}" data-note="{{$plor->note}}">
                                                    Show
                                                </a>
                                                @if(session('user')->status == 'Auditee')
                                                <a href="/fillOverdue/{{$plor->id}}" class="btn btn-outline-primary">Fill</a>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                {{$plor->statusFinal}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{$plors->links()}}
                        </div>
                    </div>
                </div>
            </main>
            <!-- END Main Container --> 
            
            <div class="modal fade" id="myRef" tabindex="-1" role="dialog" aria-labelledby="myRef" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popout" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary">
                                <h3 class="block-title">Details</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-vcenter">
                                        <tr>
                                            <td>Reference SMKP</td>
                                            <td id="modal-smkp"></td>
                                        </tr>
                                        <tr>
                                            <td>Reference SMK3</td>
                                            <td id="modal-smk3"></td>
                                        </tr>
                                        <tr>
                                            <td>Reference OHSAS</td>
                                            <td id="modal-ohsas"></td>
                                        </tr>
                                        <tr>
                                            <td>Reference ISO</td>
                                            <td id="modal-iso"></td>
                                        </tr>
                                        <tr>
                                            <td>Reference BeGeMS</td>
                                            <td id="modal-begems"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myRef2" tabindex="-1" role="dialog" aria-labelledby="myRef2" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popout" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary">
                                <h3 class="block-title">Auditee Previlege</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-vcenter">
                                        <tr>
                                            <td>Root Cause</td>
                                            <td id="modal-root"></td>
                                        </tr>
                                        <tr>
                                            <td>Corrective Action</td>
                                            <td id="modal-corrective"></td>
                                        </tr>
                                        <tr>
                                            <td>Due Date</td>
                                            <td id="modal-due_date1"></td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab</td>
                                            <td id="modal-pj1"></td>
                                        </tr>
                                        <tr>
                                            <td>Eviden</td>
                                            <td id="modal-eviden"></td>
                                        </tr>
                                        <tr>
                                            <td>Preventive Action</td>
                                            <td id="modal-preventive"></td>
                                        </tr>
                                        <tr>
                                            <td>Due Date</td>
                                            <td id="modal-due_date2"></td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab</td>
                                            <td id="modal-pj2"></td>
                                        </tr>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myRef3" tabindex="-1" role="dialog" aria-labelledby="myRef3" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popout" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary">
                                <h3 class="block-title">Overdue Details</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-vcenter">
                                        <tr>
                                            <td>Expired</td>
                                            <td id="modal-expired"></td>
                                        </tr>
                                        <tr>
                                            <td>Reason</td>
                                            <td id="modal-reason"></td>
                                        </tr>
                                        <tr>
                                            <td>Note from Auditor</td>
                                            <td id="modal-note"></td>
                                        </tr>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
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
        <script>
        var ATTRIBUTES1 = [
            'root',
            'corrective',
            'due_date1',
            'pj1',
            'eviden',
            'preventive',
            'due_date2',
            'pj2'
        ];

        $('[data-toggle="modal"]').on('click', function (e) {
            
            var $target = $(e.target);
            
            var modalSelector = $target.data('target');
            
            ATTRIBUTES1.forEach(function (attributeName) {
                
                var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
                var dataValue = $target.data(attributeName);
                $modalAttribute.text(dataValue || '');
            });
        });

        var ATTRIBUTES2 = ['problem', 'location', 'object', 'smkp', 'smk3', 'ohsas', 'iso', 'begems'];

        $('[data-toggle="modal"]').on('click', function (e) {
            
            var $target = $(e.target);
            
            var modalSelector = $target.data('target');
            
            ATTRIBUTES2.forEach(function (attributeName) {
                
                var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
                var dataValue = $target.data(attributeName);
                $modalAttribute.text(dataValue || '');
            });
        });

        var ATTRIBUTES3 = [
            'expired',
            'reason',
            'note',
        ];

        $('[data-toggle="modal"]').on('click', function (e) {
            
            var $target = $(e.target);
            
            var modalSelector = $target.data('target');
            
            ATTRIBUTES3.forEach(function (attributeName) {
                
                var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
                var dataValue = $target.data(attributeName);
                $modalAttribute.text(dataValue || '');
            });
        });

        </script>
    </body>
</html>
