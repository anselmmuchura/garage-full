<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name', 'Laravel 8 User Roles and Permissions Tutorial') }}
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor_components/datatable/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary sidebar-collapse">
    @include('sweetalert::alert')
    <div id="app">
        <div class="wrapper">
            @yield('header-content')
            @yield('content')
        </div>
    </div>

    <!-- Vendor JS -->
    <script src="{{ asset('js/vendors.min.js') }}"></script>
    <script src="{{ asset('js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

    <!-- Adnix Admin App -->
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/pages/data-table.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.table').DataTable();
        });

    </script>

</body>

</html>
