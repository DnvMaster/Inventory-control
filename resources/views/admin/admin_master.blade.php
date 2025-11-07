<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Панель администратора</title>
        <meta name="viewport" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" id="app-style">
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet">
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
    </body>
</html>