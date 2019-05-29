<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.header')
    </head>
    <body>
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header main-content-boxed">
            <!-- Sidebar -->
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                @include('layouts.navbar')
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                @include('layouts.footer')
            </footer>
            <!-- END Footer -->
        </div>
    </body>
</html>
