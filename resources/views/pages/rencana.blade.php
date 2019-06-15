<!-- Untuk menampilkan halaman rencana audit -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
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
                    <h2 class="content-heading font-w700">Rencana Audit</h2>
                    <div class="block">
                        @include('layouts.messages')
                        <div class="block-header">
                            @if(session('user')->permit == 1)
                            <div><a class="btn btn-success" href="/createrencana"> Create</a></div>
                            @endif
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter table-bordered">
                                    <thead>
                                        <tr class="bg-gd-earth text-white text-center  font-w700 h6">
                                            <th></th>
                                            <th>Scope</th>
                                            <th>Content</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Remaks</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rencanas as $rencana)
                                        <tr>
                                            <td>ISPS Code Audit</td>
                                            <td>{{$rencana->isps_scope}}</td>
                                            <td>{{$rencana->isps_content}}</td>
                                            <td>{{$rencana->isps_from}}</td>
                                            <td>{{$rencana->isps_to}}</td>
                                            <td>{{$rencana->isps_remaks}}</td>
                                            <td rowspan="5">
                                                @if($rencana->status == 'Approved')
                                                <p class="p-10 bg-primary-light font-w700 text-center">{{$rencana->status}}</p>
                                                @else
                                                <p class="p-10 bg-warning-  font-w700 text-center">{{$rencana->status}}</p>
                                                @endif
                                                @if(session('user')->status == 'Audit Manager' && $rencana->status == 'in Reviewer')
                                                <center>
                                                    <a href="/approverAM/{{$rencana->id}}" class="font-w700 btn btn-outline-info js-click-ripple-enabled">
                                                        Approve
                                                    </a>
                                                </center>
                                                
                                                @elseif(session('user')->status == 'Audit General Manager' && $rencana->status == 'in General Manager')
                                                <center>
                                                    <a href="/approverGM/{{$rencana->id}}" class="font-w700 btn btn-outline-info js-click-ripple-enabled">
                                                        Approve
                                                    </a>
                                                </center>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Special Audit</td>
                                            <td>{{$rencana->special_scope}}</td>
                                            <td>{{$rencana->special_content}}</td>
                                            <td>{{$rencana->special_from}}</td>
                                            <td>{{$rencana->special_to}}</td>
                                            <td>{{$rencana->special_remaks}}</td>
                                        </tr>
                                        <tr>
                                            <td>Audit Semeter 1</td>
                                            <td>{{$rencana->smt1_scope}}</td>
                                            <td>{{$rencana->smt1_content}}</td>
                                            <td>{{$rencana->smt1_from}}</td>
                                            <td>{{$rencana->smt1_to}}</td>
                                            <td>{{$rencana->smt1_remaks}}</td>
                                        </tr>
                                        <tr>
                                            <td>Audit Semeter 2</td>
                                            <td>{{$rencana->smt2_scope}}</td>
                                            <td>{{$rencana->smt2_content}}</td>
                                            <td>{{$rencana->smt2_from}}</td>
                                            <td>{{$rencana->smt2_to}}</td>
                                            <td>{{$rencana->smt2_remaks}}</td>
                                        </tr>
                                        <tr>
                                            <td>SIAP Audit</td>
                                            <td>{{$rencana->siap_scope}}</td>
                                            <td>{{$rencana->siap_content}}</td>
                                            <td>{{$rencana->siap_from}}</td>
                                            <td>{{$rencana->siap_to}}</td>
                                            <td>{{$rencana->siap_remaks}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="bg-earth-light"></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{$rencanas->links()}}
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
