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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    </style>
    <link rel="stylesheet" href="../../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <!--<link rel="stylesheet" href="../../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">-->
    <!-- Theme style -->
    <!--<link rel="stylesheet" href="../../../dist/css/adminlte.min.css">-->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="../../../plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="../../../plugins/w3/w3.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="{{asset("/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset("/plugins/daterangepicker/daterangepicker.css")}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset("/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset("/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset("/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Select2 -->



    <link rel="stylesheet" href="{{asset("/plugins/select2/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{asset("/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset("/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("/dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--tosts-->
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset("/plugins/toastr/toastr.min.css")}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset("/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">

    <style>
        .invalid {
            color: #FF0000;
        }

        .mySlides {
            display: none;
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2365603589658807"
     crossorigin="anonymous"></script>
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:vehicleworld@gmail.com">vehicleworld@gmail.com</a>
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
                    <li><a class="nav-link scrollto" href="{{ asset('post_registration') }}">Post Create</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Account</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('login_cust') }}">Login</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('register_customer') }}">Register</a></li>
                </ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Profile Image -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h4><b>{{ $post_data->post_title}}</b></h4>
                            </div>
                            <div class="card-body">
                                <div class="row bg-light">
                                    <div class="col-md-8">
                                                <div class="card card-light">
                                                    <div class="card-body">
                                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                @if($post_data->main_image != null)
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                                @endif
                                                                @if($post_data->image_1 != null)
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                                @endif
                                                                @if($post_data->image_2 != null)
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                                @endif
                                                                @if($post_data->image_3 != null)
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                                @endif
                                                                @if($post_data->image_4 != null)
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                                                @endif
                                                                @if($post_data->image_5 != null)
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                                                @endif
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                @if($post_data->main_image != null)
                                                                <div class="carousel-item active">
                                                                    <img class="d-block w-100 img-responsive" src="{{asset("/storage/".$post_data->main_image)}}" style="height: 100%" alt="First slide">
                                                                </div>
                                                                @endif
                                                                @if($post_data->image_1 != null)
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100 img-responsive" src="{{asset("/storage/".$post_data->image_1)}}" style="height: 100%" alt="Second slide">
                                                                </div>
                                                                @endif
                                                                @if($post_data->image_2 != null)
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100 img-responsive" src="{{asset("/storage/".$post_data->image_2)}}" style="height: 100%" alt="Third slide">
                                                                </div>
                                                                @endif
                                                                @if($post_data->image_3 != null)
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100 img-responsive" src="{{asset("/storage/".$post_data->image_3)}}" style="height: 100%" alt="Fourth slide">
                                                                </div>
                                                                @endif
                                                                @if($post_data->image_4 != null)
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100 img-responsive" src="{{asset("/storage/".$post_data->image_4)}}" style="height: 100%" alt="Fifth slide">
                                                                </div>
                                                                @endif
                                                                @if($post_data->image_5 != null)
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100 img-responsive" src="{{asset("/storage/".$post_data->image_5)}}" style="height: 100%" alt="Sixth slide">
                                                                </div>
                                                                @endif
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card card-success pb-4 w-100">
                                                    <div class="card-header">
                                                        <b>Seller Contact Details</b>
                                                    </div>
                                                    <div class="card-body">
                                                        @if($post_data->phone_number != null)
                                                        <div class="row">
                                                            <div class="col-md-4">Tel No:</div>
                                                            <div class="col-md-8">{{$post_data->phone_number}}</div>
                                                        </div>
                                                        @endif
                                                        @if($post_data->email != null)
                                                        <div class="row">
                                                            <div class="col-md-4">Email:</div>
                                                            <div class="col-md-8">{{$post_data->email}}</div>
                                                        </div>
                                                        @endif
                                                        @if($post_data->seller_location != null)
                                                        <div class="row">
                                                            <div class="col-md-4">Address:</div>
                                                            <div class="col-md-8">{{$post_data->seller_location}}</div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="card card-success pb-4 w-100">
                                                        <div class="card-header">
                                                          <b>Vehicle Details</b>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                              <div class="form-group col-md-4">
                                                                @if($post_data->model != null)
                                                                <label for="model">Model: </label>
                                                                <span>{{$post_data->model}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->model == null)
                                                                                                        <span>-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->price != null)
                                                                <label for="price">Price: </label>
                                                                <span>{{$post_data->price}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->price == null)
                                                                                                        <span>-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->manufactured_year != null)
                                                                <label for="manufactured_year">Manufactured Year: </label>
                                                                <span>{{$post_data->manufactured_year}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->manufactured_year == null)
                                                                                                        <span>-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="form-group col-md-4">
                                                                @if($post_data->condition != null)
                                                                <label for="condition">Condition : </label>
                                                                <span>{{$post_data->condition}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->condition == null)
                                                                                                        <span>-------</span>
                                                                                                        @endif-->
                                                               </div>
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->engine_capacity != null)
                                                                <label for="engine_capacity">Engine Capacity: </label>
                                                                <span>{{$post_data->engine_capacity}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->engine_capacity == null)
                                                                                                        <span>-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->millage != null)
                                                                <label for="millage">Millage: </label>
                                                                <span>{{$post_data->millage}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->millage == null)
                                                                                                        <span>-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->fuel_type != null)
                                                                <label for="fuel_type">Fuel Type: </label>
                                                                <span class="ml-2">{{$post_data->fuel_type}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->fuel_type == null)
                                                                                                        <span class="text-muted">-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                           
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->transmission != null)
                                                                <label for="transmission">Transmission: </label>
                                                                <span class="ml-2">{{$post_data->transmission}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->transmission == null)
                                                                                                        <span class="text-muted">-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->location != null)
                                                                <label for="location">Vehicle Location: </label>
                                                                <span class="ml-2">{{$post_data->location}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->fuel_type == null)
                                                                                                        <span class="text-muted">-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->address != null)
                                                                <label for="address">Address: </label>
                                                                <span class="ml-2">{{$post_data->address}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->fuel_type == null)
                                                                                                        <span class="text-muted">-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            <div class="form-group">
                                                            @if($post_data->additional_info != null)
                                                            <label for="additional_info">Additional Info: </label><br>
                                                            <span class="ml-2" id="additional_info">{{$post_data->additional_info}}</span>
                                                            @endif
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-4">
                                                                @if($post_data->part_used_in != null)
                                                                <label for="part_used_in">Parts Used Brand: </label>
                                                                <span class="ml-2">{{$data->part_used_in}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->part_used_in == null)
                                                                                                        <span class="text-muted">-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                @if($post_data->part_category != null)
                                                                <label for="part_category">Part Category: </label>
                                                                <span class="ml-2">{{$post_data->part_category}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->part_category == null)
                                                                                                        <span class="text-muted">-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                             <div class="form-group col-md-4">
                                                                @if($post_data->start_type != null)
                                                                <label for="start_type">Start Type: </label>
                                                                <span class="ml-2">{{$post_data->start_type}}</span>
                                                                @endif
                                                                <!--                                            @if($post_data->start_type == null)
                                                                                                        <span class="text-muted">-------</span>
                                                                                                        @endif-->
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="ongoing_lease">Ongoing Lease: </label><br>
                                                                @if($post_data->on_going_lease != null)
                                                                <label class="bg-warning p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                                @if($post_data->on_going_lease == null)
                                                                <label class="bg-success p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="isAc">AC: </label><br>
                                                                @if($post_data->isAc != null)
                                                                <label class="bg-warning p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                                @if($post_data->isAc == null)
                                                                <label class="bg-success p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                            </div> 
                                                                 <div class="form-group col-md-3">
                                                                <label for="isPowerSteer">Power Steering: </label><br>
                                                                @if($post_data->isPowerSteer != null)
                                                                <label class="bg-warning p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                                @if($post_data->isPowerSteer == null)
                                                                <label class="bg-success p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                            </div>

                                                            <div class="form-group col-md-3">
                                                                <label for="isPowerMirroring">Power Mirroring: </label><br>
                                                                @if($post_data->isPowerMirroring != null)
                                                                <label class="bg-warning p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                                @if($post_data->isPowerMirroring == null)
                                                                <label class="bg-success p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="form-group col-md-3">
                                                                <label for="isPowerWindow">Power Window: </label><br>
                                                                @if($post_data->isPowerWindow != null)
                                                                <label class="bg-warning p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                                @if($post_data->isPowerWindow == null)
                                                                <label class="bg-success p-1 m-1" style="border-radius: 5px;"></label><br>
                                                                @endif
                                                            </div> 
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                        <span>Do not make any payments to advertiser before inspecting the vehicle. wehicleworld.com shall not be held responsible for any transaction or agreement reached between the advertiser and you.</span><br>
                                                        <hr>
                                                        <span>වාහනය පරික්ෂා කර බැලීමෙන් තොරව වාහන අයිතිකරුවන්ට මුදල් ගෙවීමෙන් වලකින්න. එසේ කරනු ලබන කිසිදු ගෙවීමක් සදහා wehicleworld.com වෙබ් අඩවිය වගකීමක් නොදරන බව දන්වා සිටිමු.</span><br>
                                                        <hr>
                                                        <span>சொத்தை அல்லது உடமையை ஆய்வு செய்வதற்கு முன்பு விளம்பரதாரருக்கு பணம் செலுத்த வேண்டாம்.</span>
                                                        <span>wehicleworld.com வளையதளமானது உங்களுடைய எந்த ஒரு வாகனக்கட்டணத்துக்கும்பொறுப்பு கூற மாட்டாது.</span>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                    <div class="col-12">
                                        <div class="card card-success">
                                            <div class="card-header d-flex justify-content-center">
                                                Related Results for your search
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    @if($related_posts[0] != null)
                                                    @foreach($related_posts as $post)
                                                    <div class='col-12 col-md-4'>
                                                        <div class="card card-success mt-2" style="height: 10em;">
                                                            <a href="/public/api/get_post_profile/id/{{$post->id}}">
                                                                <div class="card-body text-dark bg-light">
                                                                    <div class="row">
                                                                        <div class="col-5">
                                                                            <div class="portfolio-wrap text-center">
                                                                                <img src="{{asset('storage/'.$post->main_image)}}" class='img-fluid cover m-2' style='height: 7em; width: 90%' alt='main_img' />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-7">
                                                                            <b style="font-size: 18px" class="text-success">{{$post->post_title}}</b></br>
                                                                            <span><b>Price:</b> {{$post->price}} </span><br>
                                                                            <span><b>Location:</b> {{$post->location}} </span><br>
                                                                            <span><b>Condition:</b> {{$post->condition}} </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    @if(isset($request))
                                                    <div class="text-center mt-5">{{ $related_posts->appends($request)->links('pagination::bootstrap-4') }}</div>
                                                    @endif

                                                    @if(!isset($request))
                                                    <div class="text-center mt-5">{{ $related_posts->links('pagination::bootstrap-4') }}</div>
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
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>

    </main><!-- End #main -->
    <footer id="footer">
        <div class="container">
            <h3>VEHICLEWORLD</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/kasunclement/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instergram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://google-plus.com" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>vehiauto.com</span></strong>. All Rights Reserved
            </div>
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </footer>
    <!--End Footer-->
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/commenFunctions/functions.js') }}"></script>
    <script src="{{ asset('plugins/yearpicker/yearpicker.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('plugins/jquery.tws/jquery.tws.js') }}"></script>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
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

</html>s