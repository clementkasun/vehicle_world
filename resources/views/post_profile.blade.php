<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <style>
    .has-error{
        color:red;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    .typeahead,
    .tt-query,
    .tt-hint {
        height: 30px;
        padding: 8px 12px;
        font-size: 24px;
        line-height: 30px;
        border: 2px solid #ccc;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        outline: none;
    }

    .typeahead {
        background-color: #fff;
    }

    .typeahead:focus {
        border: 2px solid #0097cf;
    }

    .tt-query {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-hint {
        color: #999
    }

    .tt-dropdown-menu {
        width: 422px;
        margin-top: 3px;
        padding: 8px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
        -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
        box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }

    .tt-suggestion {
        padding: 3px 20px;
        font-size: 18px;
        line-height: 24px;
        color: black;
        background-color: white;
    }

    .tt-suggestion.tt-cursor {
        color: #fff;
        background-color: #0097cf;
    }

    .tt-suggestion p {
        margin: 0;
        font-size: 18px;
        text-align: left;
    }

    .twitter-typeahead {
        width: 100%;
    }

    footer {
            position: relative;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 20em;
            background: grey;
        }
    </style>
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
                <a href="https://twitter.com/VehiautoC" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
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
                    <li><a class="nav-link scrollto active" href="{{ asset('home') }}">Home</a></li>
                    <li><a class="nav-link scrollto active" href="{{ asset('testing') }}">Analyze</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('about_us') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('services') }}">Services</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('post_registration') }}"><span class="btn btn-warning">post your add</span></a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('user_profile') }}">Account</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('contacts') }}">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('login_cust') }}">Login</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('register_customer') }}">Register</a></li>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section class="content">
            <div class="container-fluid">
                        <!-- Profile Image -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h4><b>{{ $post_data->post_title}}</b></h4>
                            </div>
                            <div class="card-body">
                                        <div class="row">
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
                                                            <div class="form-group col-md-8">
                                                            @if($post_data->additional_info != null)
                                                            <label for="additional_info">Additional Info: </label>
                                                            <span id="additional_info">{{$post_data->additional_info}}</span>
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
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>

    </main><!-- End #main -->
    
    <footer id="footer">
        <div class="container">
            <h3>VEHIAUTO.COM</h3>
            <p>MAKE YOUR DREAM VEHICLE REALITY. ENGAGE WITH US TO PROSPEROUS FUTURE.</p>
            <div class="social-links">
                <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/kasunclement/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instergram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://google-plus.com" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="#">VEHIAUTO.COM</a></strong>
            </div>
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </footer>
    <!--End Footer-->
</body>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

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
            // x[slideIndex - 1].setAttribute(style.display) = "block";
        }
    </script>

</script>
</html>
