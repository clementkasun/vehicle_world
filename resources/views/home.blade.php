<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>VEHICLEWORLD.COM</title>
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
            <h2 class="logo me-auto">VEHICLEWORLD.COM</h2><i class="bi bi-list mobile-nav-toggle"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{asset('assets/img/slide/slide-1.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">WELCOME <span> VEHICLEWORLD</span></h2>
                            <p class="animate__animated animate__fadeInUp">VEHICLEWORLD is marketplace for sell vehicles online in sri lanka.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide-2.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Sell Vehicles Online</span></h2>
                            <p class="animate__animated animate__fadeInUp">VEHICLEWORLD is marketplace for sell vehicles online in sri lanka.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide-3.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Buy and contact sellers</span></h2>
                            <p class="animate__animated animate__fadeInUp">VEHICLEWORLD is marketplace for sell vehicles online in sri lanka.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container">

                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-laptop"></i></div>
                            <h4 class="title"><a href="">Sell Your Vehicles</a></h4>
                            <p class="description">Sell Vehicles online on our platform</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Buy Vehicles</a></h4>
                            <p class="description">Buy Vehicles online on our platform</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            <h4 class="title"><a href="">Analyse the vehicle market</a></h4>
                            <p class="description">Analyse vehicle market data with us to get the right decision</p>
                        </div>
                    </div>
                </div>

            </div>
            <section id="search_container" class="bg-secondary text-light">
                <form id="search_form" method="GET" action="">
                    @csrf
                    <div class="row m-2">
                        <div class="form-group col-lg-3">
                            <label for="cmb_make"><b>MAKE</b></label>
                            <div>
                                <select id="cmb_make" name="cmb_make" class="form-control"></select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="model"><b>MODEL</b></label>
                            <div>
                                <input type="text" id="model" name="model" class="form-control" placeholder="Enter the model of vehicle" max-length="150">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="cmb_post_type"><b>POST TYPE</b></label>
                            <div>
                                <select id="cmb_post_type" name="cmb_post_type" class="form-control">
                                    <option value="VEHI">Vehicle</option>
                                    <option value="SPARE">Spare Parts</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="cmb_vehi_type"><b>Vehicle Type</b></label>
                            <div>
                                <select id="cmb_vehi_type" name="cmb_vehi_type" class="form-control">
                                    <option value="any"> Any Type </option>
                                    <option value="car">Car</option>
                                    <option value="van">Van</option>
                                    <option value="suv">SUV / Jeep</option>
                                    <option value="motorcycle">Motorcycle</option>
                                    <option value="crew-cab">Crew Cab</option>
                                    <option value="wagon">Wagon</option>
                                    <option value="pickup">Pickup / Double Cab</option>
                                    <option value="buse">Bus</option>
                                    <option value="lorry">Lorry</option>
                                    <option value="three-wheel">Three Wheel</option>
                                    <option value="other">Other</option>
                                    <option value="tractor">Tractor</option>
                                    <option value="heavy-dutie">Heavy-Duty</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="form-group col-lg-4">
                            <label for="cmb_condition"><b>CONDITION</b></label>
                            <div>
                                <select id="cmb_condition" name="cmb_condition" class="form-control">
                                    <option value="any">Select Condition</option>
                                    <option value="Used">Used</option>
                                    <option value="New">New</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="cmb_price"><b>PRICE RANGE</b></label>
                            <div>
                                <select id="cmb_price" name="cmb_price" class="form-control">
                                    <option value="Any"> Any </option>
                                    <option value="< 100000">&lt; 100,000</option>
                                    <option value="100000-500000">100,000 - 500,000</option>
                                    <option value="500000-1000000">500,000 - 1,000,000</option>
                                    <option value="1000000-1500000">1,000,000 - 1,500,000</option>
                                    <option value="1500000-2000000">1,500,000 - 2,000,000</option>
                                    <option value="2000000-3000000">2,000,000 - 3,000,000</option>
                                    <option value="3000000-4000000">3,000,000 - 4,000,000</option>
                                    <option value="4000000-5000000">4,000,000 - 5,000,000</option>
                                    <option value="5000000-6000000">5,000,000 - 6,000,000</option>
                                    <option value="6000000-7000000">6,000,000 - 7,000,000</option>
                                    <option value="7000000-8000000">7,000,000 - 8,000,000</option>
                                    <option value="8000000-10000000">8,000,000 - 10 Million</option>
                                    <option value="10000000-15000000">10 Million - 15 Million</option>
                                    <option value="> 15000000">&gt; 15 Million</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="cmb_city"><b>LOCATION</b></label>
                            <div>
                                <select id="cmb_city" name="cmb_city" class="form-control">
                                    <option value="any"> Any City </option>
                                    <option value="Ambalangoda">Ambalangoda</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Anuradapura">Anuradapura</option>
                                    <option value="Avissawella">Avissawella</option>
                                    <option value="Bandaragama">Bandaragama</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Balangoda">Balangoda</option>
                                    <option value="Bandarawela">Bandarawela</option>
                                    <option value="Battaramulla">Battaramulla</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Beruwala">Beruwala</option>
                                    <option value="Boralesgamuwa">Boralesgamuwa</option>
                                    <option value="Chavakacheri">Chavakacheri</option>
                                    <option value="Chilaw">Chilaw</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Daluguma">Daluguma</option>
                                    <option value="Dambulla">Dambulla</option>
                                    <option value="Dehiwala-Mount-Lavinia">Dehiwala-Mount</option>
                                    <option value="Divulapitiya">Divulapitiya</option>
                                    <option value="Dompe">Dompe</option>
                                    <option value="Eheliyagoda">Eheliyagoda</option>
                                    <option value="Embilipitiya">Embilipitiya</option>
                                    <option value="Eravur">Eravur</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Gampola">Gampola</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Hanwella">Hanwella</option>
                                    <option value="Haputale">Haputale</option>
                                    <option value="Harispattuwa">Harispattuwa</option>
                                    <option value="Hatton">Hatton</option>
                                    <option value="Hendala">Hendala</option>
                                    <option value="Homagama">Homagama</option>
                                    <option value="Horana">Horana</option>
                                    <option value="Ja-Ela">Ja-Ela</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Kadawatha">Kadawatha</option>
                                    <option value="Kadugannawa">Kadugannawa</option>
                                    <option value="Kaduwela">Kaduwela</option>
                                    <option value="Kalawana">Kalawana</option>
                                    <option value="Kalmunai">Kalmunai</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandana">Kandana</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Kattankudy">Kattankudy</option>
                                    <option value="Katunayake">Katunayake</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Kelaniya">Kelaniya</option>
                                    <option value="Kesbewa">Kesbewa</option>
                                    <option value="Keselwatta">Keselwatta</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Kiribathgoda">Kiribathgoda</option>
                                    <option value="Kolonnawa">Kolonnawa</option>
                                    <option value="Kotikawatta">Kotikawatta</option>
                                    <option value="Kotte">Kotte</option>
                                    <option value="Kottawa">Kottawa</option>
                                    <option value="Kuliyapitiya">Kuliyapitiya</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Maharagama">Maharagama</option>
                                    <option value="Mahiyanganaya">Mahiyanganaya</option>
                                    <option value="Malabe">Malabe</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Matugama">Matugama</option>
                                    <option value="Mawanella">Mawanella</option>
                                    <option value="Minuwangoda">Minuwangoda</option>
                                    <option value="Mirigama">Mirigama</option>
                                    <option value="Moneragala">Moneragala</option>
                                    <option value="Moratuwa">Moratuwa</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Mulleriyawa">Mulleriyawa</option>
                                    <option value="Nawalapitiya">Nawalapitiya</option>
                                    <option value="Negombo">Negombo</option>
                                    <option value="Nittambuwa">Nittambuwa</option>
                                    <option value="Nuwara-Eliya">Nuwara-Eliya</option>
                                    <option value="Nugegoda">Nugegoda</option>
                                    <option value="Padukka">Padukka</option>
                                    <option value="Panadura">Panadura</option>
                                    <option value="Pannipitiya">Pannipitiya</option>
                                    <option value="Peliyagoda">Peliyagoda</option>
                                    <option value="Piliyandala">Piliyandala</option>
                                    <option value="Polgahawela">Polgahawela</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Ragama">Ragama</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Seethawakapura">Seethawakapura</option>
                                    <option value="Sigiriya">Sigiriya</option>
                                    <option value="Talawakele">Talawakele</option>
                                    <option value="Tangalle">Tangalle</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Valvettithurai">Valvettithurai</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                    <option value="Wattala">Wattala</option>
                                    <option value="Wattegama">Wattegama</option>
                                    <option value="Warakapola">Warakapola</option>
                                    <option value="Weligama">Weligama</option>
                                    <option value="Welimada">Welimada</option>
                                    <option value="Welisara">Welisara</option <option value="Wennappuwa">Wennappuwa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="form-group col-lg-6">
                            <label form="year_range"><b>Year Range</b></label><br>
                            <div class='input-group' id="year_range">
                                <input type="text" id="year_min" name="year_min" class="yearpicker col-6 form-control" placeholder="MIN" autocomplete="off">
                                <input type="text" id="year_max" name="year_max" class="yearpicker col-6 form-control" placeholder="MAX" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    <label for="cmb_gear"><b>Gear</b></label>
                                    <div>
                                        <select id="cmb_gear" name="cmb_gear" class="form-control">
                                            <option value="any"> Any Gear </option>
                                            <option value="Automatic">Auto</option>
                                            <option value="Manual">Manual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="cmb_fuel_type"><b>Fuel</b></label>
                                    <div>
                                        <select id="cmb_fuel_type" name="cmb_fuel_type" class="form-control">
                                            <option value="any"> Any Fuel </option>
                                            <option value="petrol">Petrol</option>
                                            <option value="diesel">Diesel</option>
                                            <option value="electric">Electric</option>
                                            <option value="hybrid">Hybrid</option>
                                            <option value="gas">Gas</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="sumbit" id="filter_btn" class="btn btn-md btn-success d-none">SEARCH</button>
                    </div>
                    </div>
                </form>
            </section>
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio bg-white">

                <div class="container">
                    <div class="section-title">
                        <h2>PROMOTING ADDS</h2>
                    </div>
                    <div id="promoted_adds">
                        <div class="container">
                            <div class="row">
                                @if($posts[0] != null)
                                @foreach($posts as $post)
                                <div class='col-12 col-md-6'>
                                    <div class="card card-success m-2" style="height: 10em">
                                        <a href="/api/get_post_profile/id/{{$post->id}}">
                                            <div class="card-body bg-light">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="portfolio-wrap text-center">
                                                            <img src="{{asset('storage/'.$post->main_image)}}" class='img-fluid cover' style='height: 7em; width: 90%' alt='main_img' />
                                                        </div>
                                                    </div>
                                                    <div class="col-7 text-dark">
                                                        <b style="font-size: 18px" class="text-success">{{$post->post_title}}</b><br>
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
                                <div class="text-center mt-5">{{ $posts->appends($request)->links('pagination::bootstrap-4') }}</div>
                                @endif

                                @if(!isset($request))
                                <div class="text-center mt-5">{{ $posts->links('pagination::bootstrap-4') }}</div>
                                @endif

                                @endif
                            </div>
                        </div>
            </section><!-- End Portfolio Section -->
    </main><!-- End #main -->
    <footer id="footer">
        <div class="container">
            <h3>VEHICLEWORLD</h3>
            <p>MAKE YOUR DREAM VEHICLE REALITY.ENGAGE WITH US TO PROSPEROUS FUTURE.</p>
            <div class="social-links">
                <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/kasunclement/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instergram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://google-plus.com" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="http://www.classifield.qa.mkesell.com">VEHICLEWORLD</a></strong>
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
        $(document).ready(function() {
            loadMakes(function() {
                $('#filter_btn').removeClass('d-none');
            });
            //$('.yearpicker').yearpicker();

            $('#search_form').change(function() {
                var make = 'null';
                if ($('#cmb_make').val() != '') {
                    make = $('#cmb_make').val();
                }
                var model = 'null';
                if ($('#model').val() != '') {
                    model = $('#model').val();
                }
                var post_type = $('#cmb_post_type').val();
                var vehi_type = $('#cmb_vehi_type').val();
                var condition = $('#cmb_condition').val();
                var price_range = $('#cmb_price').val();
                var location = $('#cmb_city').val();
                var year_min = '0';
                var year_max = '0';
                if ($('#year_min').val() != '') {
                    year_min = $('#year_min').val();
                }
                if ($('#year_max').val() != '') {
                    year_max = $('#year_max').val();
                }
                var gear_type = $('#cmb_gear').val();
                var fuel_type = $('#cmb_fuel_type').val();
                $('#search_form').attr('action', '/filtered_posts/make/' + make + '/model/' + model + '/post_type/' + post_type + '/vehi_type/' + vehi_type + '/condition/' + condition + '/price_range/' + price_range + '/year_min/' + year_min + '/year_max/' + year_max + '/gear_type/' + gear_type + '/fuel_type/' + fuel_type + '/location/' + location);
            });

        });

        function loadMakes(callBack) {
            let option = '';
            ajaxRequest("GET", "{{ asset('/api/get_makes') }}", null, function(resp) {
                if (resp.length == 0) {
                    option += '<option value="">No Data</option>';
                } else {
                    option = '<option value="">Select Make</option>';
                    $.each(resp, function(index, row) {
                        option += '<option value="' + row.id + '">' + row.make_name + '</option>';
                    });
                }
                $('#cmb_make').html(option);
                //                    $('#cmb_make').select2();
                if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
                    callBack();
                }
            });
        }
    </script>
</body>

</html>