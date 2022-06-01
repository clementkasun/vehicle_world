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
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<!-- uPlot -->
<link rel="stylesheet" href="{{ asset('/plugins/uplot/uPlot.min.css') }}">
<script src="https://kit.fontawesome.com/b13ab8c5a9.js" crossorigin="anonymous"></script>
@endsection