@section('styles')
<link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<!-- uPlot -->
<link rel="stylesheet" href="{{ asset('/plugins/uplot/uPlot.min.css') }}">
<!-- ::::::::::::::Favicon icon::::::::::::::-->
<link rel="shortcut icon" href="{{ asset('assets2/images/favicon.ico')}}" type="image/png">
<!-- ::::::::::::::All Google Fonts::::::::::::::-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- ::::::::::::::All CSS Files here :::::::::::::: -->
<!-- Vendor CSS -->
<link rel="stylesheet" href="{{ asset('assets2/css/vendor/icomoon.css')}}" />
<!-- Plugin CSS -->
<link rel="stylesheet" href="{{ asset('assets2/css/plugins/swiper-bundle.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets2/css/plugins/ion.rangeSlider.min.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('assets2/css/style.css')}}">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<style>
    #lg-links-ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    .lg-links-li {
        float: left;
    }

    .lg-links-li .lg-links-a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
    }

    .lg-links-li .lg-links-a:hover:not(.active) {
        background-color: #111;
    }

    .link-active {
        background-color: #04AA6D;
    }

    #lg-links-ul {
        padding-top: 10px;
    }

    @media (min-width: 1000px) {
        #mobile-nav {
            display: none;
        }

        .header-area {
            display: none;
        }

        #mob-hero {
            display: none;
        }

        #ad_tbl {
            max-width: 700px;
        }
    }

    @media (max-width: 1000px) {
        #featured-services {
            display: none;
        }

        #hero {
            display: none;
        }

        .lg-nav {
            display: none;
        }

        #ad_tbl {
            max-width: 340px;
        }

        #footer {
            display: none;
        }

    }

    table.dataTable thead .sorting,
    table.dataTable thead .sorting_asc,
    table.dataTable thead .sorting_desc {
        background: none;
    }
</style>
@endsection