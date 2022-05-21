<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
      <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
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
                    <li><a class="nav-link scrollto" href="{{ asset('about_us') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('about_us') }}">Services</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('post_registration') }}"><span class="btn btn-warning">post your add</span></a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('user_profile') }}">Account</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('contact') }}">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('logout') }}">Logout</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('login_cust') }}">Login</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('register_customer') }}">Register</a></li>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{asset('assets/img/slide/slide-1.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">WELCOME <span> VEHIAUTO</span></h2>
                            <p class="animate__animated animate__fadeInUp">VEHIAUTO is marketplace for sell vehicles online in sri lanka.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide-2.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Sell Vehicles Online</span></h2>
                            <p class="animate__animated animate__fadeInUp">VEHIAUTO is marketplace for sell vehicles online in sri lanka.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide-3.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Buy and contact sellers</span></h2>
                            <p class="animate__animated animate__fadeInUp">VEHIAUTO is marketplace for sell vehicles online in sri lanka.</p>
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
    </section>
            <section id="search_container" class="bg-secondary text-light">
                <form id="search_form">
                    @csrf
                    <div class="row m-2">
                        <div class="form-group col-lg-3">
                            <label for="cmb_make"><b>MAKE</b></label>
                            <div>
                                <select id="cmb_make" name="cmb_make" class="form-control select2"></select>
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
                                <select id="cmb_city" name="cmb_city" class="form-control select2">
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
                                    <option value="Welisara">Welisara</option>
                                    <option value="Wennappuwa">Wennappuwa</option>
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
                    <div class="row d-flex justify-content-center">
                        <button type="button" id="filter_btn" class="btn btn-md btn-success d-none">SEARCH</button>
                    </div>
                    </div>
                </form>
            </section>
            <!-- hitwebcounter Code START -->
            <span class="mt-5 d-flex justify-content-center"><b>Visits: </b><img src="https://hitwebcounter.com/counter/counter.php?page=7985375&style=0006&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter" border="0" height="25px" width="100px"/></a></span>                
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio bg-white">

                <div class="container">
                    <!-- <div class="section-title">
                        <h2>PROMOTING ADDS</h2>
                    </div> -->
                    <div id="promoted_adds">
                        <div class="container">
                            <div class="row">
                                <div class='col-12'>
                                    <table class="table" id="ad_tbl">
                                      <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </section><!-- End Portfolio Section -->  
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
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <!-- Page script -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('../../../dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('./../../../dist/js/demo.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/dist/js/demo.js') }}"></script>
    <script src="{{asset('/plugins/datatables/jquery.dataTables.js')}}"></script> 
    <!--commen functions-->
    <script src="{{ asset('/js/commenFunctions/functions.js') }}" type="text/javascript"></script>
    <!-- Select2 -->
    <script src="{{ asset('/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
        $(document).ready(function() {

            $('#cmb_make').select2();
            $('#cmb_city').select2();

            loadMakes(function() {
                $('#filter_btn').removeClass('d-none');
            });
            //$('.yearpicker').yearpicker();
            let url = './api/get_posts';
            loadTable(null, url, 'GET'); 
        });

        $('#filter_btn').click(function() {
            let data = $('#search_form').serializeArray();
            let url = './api/filtered_posts';

            loadTable(data, url, 'POST');                
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

        function loadTable(data, url, method) {

        let ad_tbl = $('#ad_tbl').DataTable({
        destroy: true,
        processing: true,
        serverSide: false,
        responsive: true,
        dom: 'Bfrtip',
        "pageLength": 50,
        language: {
            searchPlaceholder: "search"
        },
        "ajax": {
            "url": url,
            "data": data,
            "type": method,
            "dataSrc": "",
            "headers": {
                //            "X-XSRF-TOKEN": token,
                'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr("content"),
                'Accept': "application/json"
            },
        },
        "columns": [
            {
                "data": "",
                "render": function(data, type, row, meta){
                    let html = '';
                    html += '<div class="row">';
                    html += '<div class="card card-success m-2 col-md-12">';
                    html += '<a href="/public/api/get_post_profile/id/'+row.id+'">';
                    html += '<div class="card-body bg-light">';
                    html += '<div class="row">';
                    html += '<div class="col-3">';
                    html += '<div class="portfolio-wrap text-center">';
                    html += "<img src='/public/storage/"+row.main_image+"' style='height: 10em; width: 100%' alt='main_img' />";
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="col-9 text-dark">';
                    html += '<b style="font-size: 18px" class="text-success">'+row.post_title+'</b><br>';
                    html += '<span><b>Price:</b>'+row.price+' </span><br>';
                    html += '<span><b>Location:</b>'+row.location+' </span><br>';
                    html += '<span><b>Condition:</b>'+row.condition+' </span>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</a>';
                    html += '</div>';
                    html += '</div>';
                    return html;
                }
            },
        ],
    });

    //data table error handling
    $.fn.dataTable.ext.errMode = 'none';
    $('#ad_tbl').on('error.dt', function(e, settings, techNote, message) {
        console.log('DataTables error: ', message);
    });
}
    </script>
</html>





