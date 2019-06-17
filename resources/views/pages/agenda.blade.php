<!-- Untuk menampilkan halaman agenda -->
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
                    <h2 class="content-heading font-w700">Agenda Audit</h2>
                    <div class="block">
                    @include('layouts.messages')
                        <div class="block-header">
                            @if(session('user')->permit == 1)
                            <div><a class="btn btn-success" href="{{url('/createagenda')}}"> Create</a></div>
                            @endif
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter table-bordered">
                                    <thead>
                                        <tr class="bg-gd-earth text-white text-center font-w700 h6">
                                            <th>Departemen/Kontraktor</th>
                                            <th>Site</th>
                                            <th>Audit Scope</th>
                                            <th>Auditee</th>
                                            <th>Auditor</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Approver</th>
                                            <th>Status</th>
                                            @if(session('user')->status == 'Audit Manager' || session('user')->status == 'Audit General Manager' || session('user')->status == 'Kepala Teknik Tambang' || session('user')->status == 'Wakil Kepala Teknik Tambang')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($agendas as $agenda)
                                        <tr>
                                            <td>{{$agenda->depcont}}</td>
                                            <td>{{$agenda->site}}</td>
                                            <td>{{$agenda->scope}}</td>
                                            <td>{{$agenda->auditee}}</td>
                                            <td>{{$agenda->auditor}}</td>
                                            <td>{{$agenda->from}}</td>
                                            <td>{{$agenda->to}}</td>
                                            <td>{{$agenda->approver}}</td>
                                            <td>
                                                @if($agenda->status == 'Approved')
                                                    <p class="p-10 bg-primary font-w700 text-center text-white">{{$agenda->status}}</p>
                                                @else
                                                    <p class="p-10 bg-warning font-w700 text-center">{{$agenda->status}}</p>
                                                @endif

                                            </td>
                                            @if(session('user')->status == 'Audit Manager' && $agenda->status == 'in Reviewer')
                                            <td>
                                            <a href="{{url('approveAM', $agenda->id)}}" class="btn btn-outline-info js-click-ripple-enabled">
                                                Approve
                                            </a>
                                            </td>
                                            @elseif(session('user')->status == 'Audit General Manager' && $agenda->status == 'in General Manager')
                                            <td>
                                            <a href="{{url('approveGM', $agenda->id)}}" class="btn btn-outline-info js-click-ripple-enabled">
                                                Approve
                                            </a>
                                            @elseif((session('user')->status == 'Kepala Teknik Tambang' || session('user')->status == 'Wakil Kepala Teknik Tambang') && $agenda->status == 'in Approver' && $agenda->approver == session('user')->name)
                                            <td>
                                            <a href="{{url('approve', $agenda->id)}}" class="btn btn-outline-info js-click-ripple-enabled">
                                                Approve
                                            </a>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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

    </body>
</html>
