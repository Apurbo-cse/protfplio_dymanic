<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="Admin Dashboard" name="description" />
<meta content="ThemeDesign" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>

<link rel="shortcut icon" href="{{ asset('/') }}assets/admin/images/favicon.ico">

<link href="{{ asset('/') }}assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('/') }}assets/admin/css/icons.css" rel="stylesheet" type="text/css">
<link href="{{ asset('/') }}assets/admin/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('/') }}assets/admin/css/toastr.min.css">


<!-- DataTables -->
<link href="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet"
    type="text/css" />


<style>
    @media only screen and (max-width: 600px) {
        .desk { display: none !important; }
    }
    @media only screen and (min-width: 601px) {
        .mobile { display: none !important; }
    }
</style>
