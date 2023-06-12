<!DOCTYPE html>
<html>

<head>

    @include('admin.layout._header_link')

    @stack('custom-css')


</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @include('admin.layout._top_bar')
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            @include('admin.layout._left_side')
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    @yield('main-content')
                </div> <!-- container -->

            </div> <!-- content -->

            @include('admin.layout._footer')

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    @include('admin.layout._footer_link')

    <!-- Datatables-->
    @stack('datatable-scripts')

    <!-- Datatables-->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.scroller.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('admin/pages/datatables.init.js') }}"></script>

    <script src="{{ asset('/') }}admin/pages/dashborad.js"></script>
    <script src="{{ asset('/') }}admin/js/app.js"></script>

    <script src="{{ asset('admin/js/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/js/sweetalert2@10.js') }}"></script>

    {!! Toastr::message() !!}

    <script type="text/javascript">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButton: true,
                    progressBar: true
                })
            @endforeach
        @endif
    </script>

    @stack('scripts')

</body>

</html>
