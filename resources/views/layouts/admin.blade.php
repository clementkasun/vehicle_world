<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{--csrf_token()--}}" />
    <meta name="api-token" content="{{--auth()->user()->api_token--}}" />
    @yield('styles')
    @yield('pageStyles')
</head>

<body>
    @yield('navbar')
    @yield('content')
    @yield('footer')
    @yield('scripts')
    @yield('pageScripts')
</body>

</html>