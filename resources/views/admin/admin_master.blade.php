<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Панель администратора</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
        <link href="{{ asset('backend/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" id="app-style">
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    </head>
    <body data-menu-color="light" data-sidebar="default">
        <div id="app-layout">
             @include('admin.body.header')
            <!-- Left Sidebar Start -->
            <div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>
                    <!--- Sidemenu -->
                    @include('admin.body.sidebar')
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- Left Sidebar End -->
            <div class="content-page">
                <div class="content">
                    @yield('admin')
                </div>
                @include('admin.body.footer')
            </div>
        </div>
        <!-- END wrapper -->

        <script src="{{ asset('backend/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('backend/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('backend/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('backend/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
        <script src="{{ asset('backend/js/pages/analytics-dashboard.init.js') }}"></script>
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/js/pages/datatable.init.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{ asset('backend/js/code.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type','info') }}"
                switch(type) {
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                    break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                    break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                    break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                    break;
                }
            @endif
        </script>
    </body>
</html>