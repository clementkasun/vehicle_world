<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>VEHIAUTO.COM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/yearpicker/yearpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/jqpaginator/jqpaginator.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .add-font {
            font-size: 14px;
            color: #003e80;
        }

        .current {
            color: green;
        }

        .w-5 {
            display: none;
        }

        .yearpicker {
            background-color: white;
        }

        @font-face {
            font-family: myFirstFont;
            src: url(sansation_light.woff);
        }

        div {
            font-family: myFirstFont;
            font-size: 14px;
        }

    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-208237465-1">
    </script>
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:vehicleworld@gmail.com">vehiauto@gmail.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +94 763993288
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h2 class="logo me-auto">VEHIAUTO.COM</h2><i class="bi bi-list mobile-nav-toggle"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/home">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('post_registration') }}"><span
                                class="btn btn-warning">post your add</span></a></li>
                    <li><a class="nav-link scrollto" href="#contact">Account</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('login_cust') }}">Login</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('register_customer') }}">Register</a></li>
                </ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- Profile Image -->
        <div class="card card-secondary">
            <div class="card-header text-center">
                <h4 class="text-light"><b>Sales Item Profile</b></h4>
            </div>
            <div class="card-body">
                <div class="row bg-light">
                    <div class="col-12 col-md-8 mt-2">
                        <div class="card card-light">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @if ($post_data->main_image != null)
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                        @endif
                                        @if ($post_data->image_1 != null)
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        @endif
                                        @if ($post_data->image_2 != null)
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        @endif
                                        @if ($post_data->image_3 != null)
                                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        @endif
                                        @if ($post_data->image_4 != null)
                                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                        @endif
                                        @if ($post_data->image_5 != null)
                                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                        @endif
                                    </ol>
                                    <div class="carousel-inner">
                                        @if ($post_data->main_image != null)
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 img-responsive"
                                                    src="{{ asset('/storage/' . $post_data->main_image) }}"
                                                    style="height: 100%" alt="First slide">
                                            </div>
                                        @endif
                                        @if ($post_data->image_1 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive"
                                                    src="{{ asset('/storage/' . $post_data->image_1) }}"
                                                    style="height: 100%" alt="Second slide">
                                            </div>
                                        @endif
                                        @if ($post_data->image_2 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive"
                                                    src="{{ asset('/storage/' . $post_data->image_2) }}"
                                                    style="height: 100%" alt="Third slide">
                                            </div>
                                        @endif
                                        @if ($post_data->image_3 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive"
                                                    src="{{ asset('/storage/' . $post_data->image_3) }}"
                                                    style="height: 100%" alt="Fourth slide">
                                            </div>
                                        @endif
                                        @if ($post_data->image_4 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive"
                                                    src="{{ asset('/storage/' . $post_data->image_4) }}"
                                                    style="height: 100%" alt="Fifth slide">
                                            </div>
                                        @endif
                                        @if ($post_data->image_5 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive"
                                                    src="{{ asset('/storage/' . $post_data->image_5) }}"
                                                    style="height: 100%" alt="Sixth slide">
                                            </div>
                                        @endif
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-success pb-4 w-100">
                            <div class="card-header">
                                <h5><b>Contact Details</b></h5>
                            </div>
                            <div class="card-body">
                                @if ($post_data->phone_number != null)
                                    <div class="card card-success">
                                        <div class="card-header">Seller Tel No:</div>
                                        <div class="card-body">{{ $post_data->phone_number }}</div>
                                    </div>
                                @endif
                                @if ($post_data->email != null)
                                    <div class="card card-success">
                                        <div class="card-header">Seller Email:</div>
                                        <div class="card-body">{{ $post_data->email }}</div>
                                    </div>
                                @endif
                                @if ($post_data->seller_location != null)
                                    <div class="card card-success">
                                        <div class="card-header">Seller Address:</div>
                                        <div class="card-body">{{ $post_data->seller_location }}</div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2365603589658807"
     crossorigin="anonymous"></script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-success mt-2 w-100">
                            <div class="card-header">
                                <div class="text-center">
                                    <h5 class="profile-username"><b>{{ $post_data->post_title }}</b></h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row bg-light" style="border-radius: 15px">
                                    <div class="col-12 col-md-6">
                                        <div class="card card-success">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    @if ($post_data->model != null)
                                                        <label for="model">Model: </label>
                                                        <span>{{ $post_data->model }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->model == null)
<span>-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->price != null)
                                                        <label for="price">Price: </label>
                                                        <span>{{ $post_data->price }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->price == null)
<span>-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->manufactured_year != null)
                                                        <label for="manufactured_year">Manufactured Year: </label>
                                                        <span>{{ $post_data->manufactured_year }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->manufactured_year == null)
<span>-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->condition != null)
                                                        <label for="condition">Condition : </label>
                                                        <span>{{ $post_data->condition }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->condition == null)
<span>-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->engine_capacity != null)
                                                        <label for="engine_capacity">Engine Capacity: </label>
                                                        <span>{{ $post_data->engine_capacity }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->engine_capacity == null)
<span>-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->millage != null)
                                                        <label for="millage">Millage: </label>
                                                        <span>{{ $post_data->millage }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->millage == null)
<span>-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->part_used_in != null)
                                                        <label for="part_used_in">Parts Used Brand: </label>
                                                        <span class="ml-2">{{ $data->part_used_in }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->part_used_in == null)
<span class="text-muted">-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->part_category != null)
                                                        <label for="part_category">Part Category: </label>
                                                        <span
                                                            class="ml-2">{{ $post_data->part_category }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->part_category == null)
<span class="text-muted">-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->transmission != null)
                                                        <label for="transmission">Transmission: </label>
                                                        <span
                                                            class="ml-2">{{ $post_data->transmission }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->transmission == null)
<span class="text-muted">-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->start_type != null)
                                                        <label for="start_type">Start Type: </label>
                                                        <span
                                                            class="ml-2">{{ $post_data->start_type }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->start_type == null)
<span class="text-muted">-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->fuel_type != null)
                                                        <label for="fuel_type">Fuel Type: </label>
                                                        <span
                                                            class="ml-2">{{ $post_data->fuel_type }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->fuel_type == null)
<span class="text-muted">-------</span>
@endif-->
                                                </div>
                                                <div class="form-group">
                                                    @if ($post_data->location != null)
                                                        <label for="location">Vehicle Location: </label>
                                                        <span
                                                            class="ml-2">{{ $post_data->location }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->fuel_type == null)
<span class="text-muted">-------</span>
@endif-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card card-success w-100">
                                            <div class="card-body pb-4">
                                                <div class="form-group">
                                                    @if ($post_data->address != null)
                                                        <label for="address">Address: </label>
                                                        <span
                                                            class="ml-2">{{ $post_data->address }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->fuel_type == null)
<span class="text-muted">-------</span>
@endif-->
                                                </div>
                                                <div class="form-group pt-4">
                                                    <label for="ongoing_lease">Ongoing Lease: </label><br>
                                                    @if ($post_data->on_going_lease != null)
                                                        <label class="bg-warning p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                    @if ($post_data->on_going_lease == null)
                                                        <label class="bg-success p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="isAc">AC: </label><br>
                                                    @if ($post_data->isAc != null)
                                                        <label class="bg-warning p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                    @if ($post_data->isAc == null)
                                                        <label class="bg-success p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="isPowerSteer">Power Steering: </label><br>
                                                    @if ($post_data->isPowerSteer != null)
                                                        <label class="bg-warning p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                    @if ($post_data->isPowerSteer == null)
                                                        <label class="bg-success p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="isPowerMirroring">Power Mirroring: </label><br>
                                                    @if ($post_data->isPowerMirroring != null)
                                                        <label class="bg-warning p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                    @if ($post_data->isPowerMirroring == null)
                                                        <label class="bg-success p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="isPowerWindow">Power Window: </label><br>
                                                    @if ($post_data->isPowerWindow != null)
                                                        <label class="bg-warning p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                    @if ($post_data->isPowerWindow == null)
                                                        <label class="bg-success p-1 m-1"
                                                            style="border-radius: 5px;"></label><br>
                                                    @endif
                                                </div>
                                                <div class="form-group" id="advertiesments" style="height: 500px">
                                                    asad
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-success w-100">
                                            <div class="card-header d-flex justify-content-center">
                                                <h5>Description</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    @if ($post_data->additional_info != null)
                                                        <span
                                                            class="ml-2">{{ $post_data->additional_info }}</span>
                                                    @endif
                                                    <!--                                            @if ($post_data->additional_info == null)
<span class="text-muted">-------</span>
@endif-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-success">
                            <div class="card-header d-flex justify-content-center">
                                <h5>Related Results for your search</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if ($related_posts[0] != null)
                                        @foreach ($related_posts as $post)
                                            <div class='col-12 col-md-4'>
                                                <div class="card card-success mt-2" style="height: 10em;">
                                                    <a href="/api/get_post_profile/id/{{ $post->id }}">
                                                        <div class="card-body text-dark bg-light">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <div class="portfolio-wrap text-center">
                                                                        <img src="{{ asset('./storage/' . $post->main_image) }}"
                                                                            class='img-fluid cover m-2'
                                                                            style='height: 7em; width: 90%'
                                                                            alt='main_img' />
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <b style="font-size: 18px"
                                                                        class="text-success">{{ $post->post_title }}</b></br>
                                                                    <span><b>Price:</b> {{ $post->price }}
                                                                    </span><br>
                                                                    <span><b>Location:</b> {{ $post->location }}
                                                                    </span><br>
                                                                    <span><b>Condition:</b> {{ $post->condition }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach

                                        @if (isset($request))
                                            <div class="text-center mt-5">
                                                {{ $related_posts->appends($request)->links('pagination::bootstrap-4') }}
                                            </div>
                                        @endif

                                        @if (!isset($request))
                                            <div class="text-center mt-5">
                                                {{ $related_posts->links('pagination::bootstrap-4') }}</div>
                                        @endif

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </main><!-- End #main -->
    <footer id="footer">
        <div class="container">
            <h3>VEHIAUTO.COM</h3>
            <p>MAKE YOUR DREAM VEHICLE REALITY. ENGAGE WITH US TO PROSPEROUS FUTURE.</p>
            <div class="social-links">
                <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/kasunclement/" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instergram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://google-plus.com" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                <strong>Copyright &copy; <?php echo date('Y'); ?> <a
                        href="http://www.classifield.qa.mkesell.com">VEHIAUTO.COM</a></strong>
            </div>
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </footer>
    <!-- Page script -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('../../../dist/js/adminlte.min.js}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('./../../../dist/js/demo.js}}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--Component Js -->
    <script src="{{ asset('/js/combo.js') }}"></script>
    <!--Data Tables -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <!--Tosts-->
    <script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>
    <!-- Toastr -->
    <!-- SweetAlert2 -->
    <script src="{{ asset('/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('/dist/js/demo.js') }}"></script>

    <!--commen functions-->
    <script src="{{ asset('/js/commenFunctions/functions.js') }}" type="text/javascript"></script>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>

</body>

</html>
