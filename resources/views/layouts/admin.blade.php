<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    @yield('styles')
    @yield('pageStyles')
</head>

<body class="container">
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