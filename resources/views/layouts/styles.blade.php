@section('styles')
<link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

<!-- Select2 -->
<link rel="stylesheet" href="{{asset('/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

<!-- Favicons -->
<link href="{{ asset('plugins/yearpicker/yearpicker.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

<!-- daterange picker -->
<link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- daterange picker -->
<link href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
<!-- uPlot -->
<link rel="stylesheet" href="{{ asset('/plugins/uplot/uPlot.min.css') }}">
<style>
    @media (min-width: 700px) {
        #mobile-nav {
            display: none;
        }

        .header-area {
            display: none;
        }

    }

    @media (max-width: 700px) {
        #featured-services {
            display: none;
        }

        #hero {
            display: none;
        }

        .lg-nav {
            display: none;
        }

    }
</style>
<!-- ::::::::::::::Favicon icon::::::::::::::-->
<link rel="shortcut icon" href="assets2/images/favicon.ico" type="image/png">

<!-- ::::::::::::::All Google Fonts::::::::::::::-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<!-- ::::::::::::::All CSS Files here :::::::::::::: -->
<!-- Vendor CSS -->
<link rel="stylesheet" href="assets2/css/vendor/icomoon.css" />

<!-- Plugin CSS -->
<link rel="stylesheet" href="assets2/css/plugins/swiper-bundle.min.css">
<link rel="stylesheet" href="assets2/css/plugins/ion.rangeSlider.min.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets2/css/style.css">
@endsection