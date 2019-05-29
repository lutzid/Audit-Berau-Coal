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
                    <h2 class="content-heading font-w700">Agenda Audit</h2>
                    <div class="block">
                        <div class="block-header">
                            <div><a class="btn btn-success" href="/createagenda"> Create</a></div>
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Departemen/Kontraktor</th>
                                            <th>Site</th>
                                            <th>Audit Scope</th>
                                            <th>Auditee</th>
                                            <th>Auditor</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Approver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dept 1</td>
                                            <td>Site 1</td>
                                            <td>Scope 1</td>
                                            <td>Dept Head</td>
                                            <td>Auditor 1, Auditor 2</td>
                                            <td>20/05/2019</td>
                                            <td>20/07/2019</td>
                                            <td>Manager</td>
                                        </tr>
                                        <tr>
                                            <td>Dept 1</td>
                                            <td>Site 1</td>
                                            <td>Scope 1</td>
                                            <td>Dept Head</td>
                                            <td>Auditor 1, Auditor 2</td>
                                            <td>20/05/2019</td>
                                            <td>20/07/2019</td>
                                            <td>Manager</td>
                                        </tr>
                                        <tr>
                                            <td>Dept 1</td>
                                            <td>Site 1</td>
                                            <td>Scope 1</td>
                                            <td>Dept Head</td>
                                            <td>Auditor 1, Auditor 2</td>
                                            <td>20/05/2019</td>
                                            <td>20/07/2019</td>
                                            <td>Manager</td>
                                        </tr>
                                        <tr>
                                            <td>Dept 1</td>
                                            <td>Site 1</td>
                                            <td>Scope 1</td>
                                            <td>Dept Head</td>
                                            <td>Auditor 1, Auditor 2</td>
                                            <td>20/05/2019</td>
                                            <td>20/07/2019</td>
                                            <td>Manager</td>
                                        </tr>
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
