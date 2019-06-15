<!-- Untuk menampilkan halaman laporan monitoring -->
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
                    <h2 class="content-heading font-w700">Laporan Monitoring Hasil Audit</h2>
                    <div class="block">
                    @include('layouts.messages')
                        <div class="block-header">
                            <div><a class="btn btn-success" href="{{url('/monitoring')}}">Back</a></div>
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter table-bordered">
                                    <thead>
                                        <tr class="bg-gd-earth text-white text-center font-w700 h6">
                                            <th rowspan="2" style="vertical-align:middle">No</th>
                                            <th rowspan="2" style="vertical-align:middle">Departement</th>
                                            <th rowspan="2" style="vertical-align:middle">Jumlah Temuan</th>
                                            <th colspan="5">Kategori Temuan</th>
                                            <th rowspan="2" style="vertical-align:middle">Open</th>
                                            <th rowspan="2" style="vertical-align:middle">Close</th>
                                            <th rowspan="2" style="vertical-align:middle">Open %</th>
                                            <th rowspan="2" style="vertical-align:middle">Close %</th>                                            
                                        </tr>
                                        <tr class="bg-gd-earth text-white text-center font-w700 h6">
                                            <th>Kesesuaian</th>
                                            <th>Kritikal</th>
                                            <th>Mayor</th>
                                            <th>Minor</th>
                                            <th>Observasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td class="text-left">Logistik</td>
                                            <td>8</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>8</td>
                                            <td>-</td>
                                            <td>8</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>2</td>
                                            <td class="text-left">Procurement</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>3</td>
                                            <td class="text-left">System Development</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>4</td>
                                            <td class="text-left">G & E</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>5</td>
                                            <td class="text-left">Mining</td>
                                            <td>4</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>4</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>4</td>
                                            <td>0,00%</td>
                                            <td>100,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>6</td>
                                            <td class="text-left">Environment</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>7</td>
                                            <td class="text-left">SGI</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>8</td>
                                            <td class="text-left">FPM</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>9</td>
                                            <td class="text-left">OHS</td>
                                            <td>4</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>4</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>10</td>
                                            <td class="text-left">PBO</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>11</td>
                                            <td class="text-left">GS</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>3</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>12</td>
                                            <td class="text-left">OLD Training & Klinik</td>
                                            <td>5</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>40,00%</td>
                                            <td>60,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>13</td>
                                            <td class="text-left">HSECT</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>14</td>
                                            <td class="text-left">MPC</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>2</td>
                                            <td>-</td>
                                            <td>100,00%</td>
                                            <td>0,00%</td>
                                        </tr>
                                        <tr class="bg-gd-earth text-white text-center font-w700 h6">
                                            <th colspan="2">Jumlah</th>
                                            <th>47</th>
                                            <th>-</th>
                                            <th>-</th>
                                            <th>-</th>
                                            <th>43</th>
                                            <th>4</th>
                                            <th>40</th>
                                            <th>7</th>
                                            <th>85,11%</th>
                                            <th>14,89%</th>
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
