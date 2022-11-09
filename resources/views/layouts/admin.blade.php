<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Googlebot" content="noindex" />
    <meta name="description" content="vehiauto is a emerging web marketplace for your vehicle needs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>vehiauto is a emerging web marketplace for your vehicle needs</title>
    @yield('styles')
    @yield('pageStyles')
</head>

<body class="container-fluid bg-light" style="height: auto">
    <nav>
        @yield('navbar')
    </nav>
    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
    @yield('footer')
    @yield('scripts')
    @yield('pageScripts')
</body>

</html>