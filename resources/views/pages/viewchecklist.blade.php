<!-- Untuk menampilkan halaman checklist -->
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
                    <h2 class="content-heading font-w700">Checklist</h2>
                    <div class="block">
                    @include('layouts.messages')
                        <div class="block-header">
                        @if(session('user')->permit == 1)
                            <div><a class="btn btn-success" href="/uploadchecklist"> Upload</a></div>
                        @endif
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Audit Name</th>
                                            <th>File Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Audit Name 1</td>
                                            <td>Audit Name 1.xlsx</td>
                                            <td><a class="btn btn-success" data-toggle="modal" data-target="#modal-slideup"> Download</a></td>
                                        </tr>
                                        <tr>
                                            <td>Audit Name 2</td>
                                            <td>Audit Name 2.xlsx</td>
                                            <td><a class="btn btn-success" data-toggle="modal" data-target="#modal-slideup"> Download</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                                    <span class="font-w700 mr-5 font-size-h2 text-primary">File Telah Terdownload</span>
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

    </body>
</html>
