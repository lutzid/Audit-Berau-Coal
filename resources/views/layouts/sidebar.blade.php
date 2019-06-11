
<nav id="sidebar" style="width:20%">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-30">
                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent">
                    <span class="font-w700 font-size-xl text-dark">K3L </span><span class="font-w700 font-size-xl text-success">Audit</span>
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    @if(session('user')->special == 1)
                    <li class="table">
                        <a href="/rencana"><i class="si si-calendar"></i><span class="sidebar-mini-hide font-size-sm">Rencana Audit Tahunan</span></a>
                    </li>
                    @endif
                    <li class="table">
                        <a href="/agenda"><i class="si si-list"></i><span class="sidebar-mini-hide font-size-sm">Agenda Audit</span></a>
                    </li>
                    <li class="table">
                        <a href="/checklist"><i class="si si-doc"></i><span class="sidebar-mini-hide font-size-sm">Checklist Audit</span></a>
                    </li>
                    @if(session('user')->special == 1)
                    <li class="table">
                        <a href="/laporan"><i class="si si-doc"></i><span class="sidebar-mini-hide font-size-sm">Laporan Audit</span></a>
                    </li>
                    @endif
                    <li class="table">
                        <a href="/plor"><i class="si si-docs"></i><span class="sidebar-mini-hide font-size-sm">PLOR Audit</span></a>
                    </li>
                    <li class="table">
                        <a href="/monitoring"><i class="si si-screen-desktop"></i><span class="sidebar-mini-hide font-size-sm">Monitoring Hasil Audit</span></a>
                    </li>
                    
                </ul>

            </div>
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>

