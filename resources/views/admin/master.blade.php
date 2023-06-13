<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('admin.include.header_link')
    @yield('table_script')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('admin.include.navbar')


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

           @include('admin.include.sidebar')

        </aside>

        <!-- Content -->
        @yield('content')
        <!-- Content End -->

        <footer class="main-footer">
            @include('admin.include.footer')
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    @include('admin.include.script')
</body>
</html>
