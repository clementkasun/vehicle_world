@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('pageStyles')
<style>
    #search_container {
        font-family: 'Bahnschrift SemiBold';
        font-size: 16px;
        overflow-x: hidden;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppings', 'sans-serif';
    }
</style>
@endsection
@section('content')
<!-- ...:::Start Search & Filter Section:::... -->
<div class="search-n-filter-section section-gap-top-25 mb-4">
    <div class="container">
        <!-- Start Search & Filter Area -->
        <div class="search-n-filter-area home-one">
            <div class="search-box">

                <div class="searchable select">
                    <input type="text" placeholder="Search..." id="main_search_input">
                    <button class="btn search__btn" aria-label="Search Icon" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.003" viewBox="0 0 12 12.003">
                            <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search" d="M13.859,13.131,10.522,9.762a4.756,4.756,0,1,0-.722.731l3.316,3.347a.514.514,0,0,0,.725.019A.517.517,0,0,0,13.859,13.131Zm-7.075-2.6a3.756,3.756,0,1,1,2.656-1.1A3.732,3.732,0,0,1,6.784,10.534Z" transform="translate(-2 -1.997)" fill="#171717" />
                        </svg>
                    </button>

                    <button class="btn submit__btn" aria-label="Search Icon" type="submit" id="main_search_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M19.354,11.481a.816.816,0,0,0-.006,1.15l3.8,3.806H8.682a.812.812,0,0,0,0,1.625H23.143l-3.8,3.806a.822.822,0,0,0,.006,1.15.81.81,0,0,0,1.144-.006l5.152-5.187h0a.912.912,0,0,0,.169-.256.775.775,0,0,0,.063-.312.814.814,0,0,0-.231-.569L20.492,11.5A.8.8,0,0,0,19.354,11.481Z" transform="translate(-7.875 -11.252)" fill="#aaa" />
                        </svg>
                    </button>

                    <button class="btn close__btn" id="btn_search_cancel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Icon_metro-cancel" data-name="Icon metro-cancel" d="M6.857.643a6,6,0,1,0,6,6,6,6,0,0,0-6-6Zm0,10.875a4.875,4.875,0,1,1,4.875-4.875A4.875,4.875,0,0,1,6.857,11.518ZM8.732,3.643,6.857,5.518,4.982,3.643,3.857,4.768,5.732,6.643,3.857,8.518,4.982,9.643,6.857,7.768,8.732,9.643,9.857,8.518,7.982,6.643,9.857,4.768Z" transform="translate(-0.857 -0.643)" fill="#aaa" />
                        </svg>
                    </button>

                </div>

                <!-- <button id="filter-trigger" aria-label="Filter Icon" class="filter_btn btn--radius btn--radical-red btn--color-white btn--box-shadow btn--size-40-40 btn--center btn--font-size-22"><i class="icon icon-carce-filter"></i></button> -->
            </div>
        </div>
        <!-- End Search & Filter Area -->

        <div id="mob-hero" class="hero-section section-gap-top-25">
            <div class="container">
                <!-- Start Hero Area -->
                <div class="hero-area hero-area--style-1 hero-slider-active">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @if(isset($most_favoured_posts))
                            @foreach($most_favoured_posts as $key => $favoured_post)
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="hero-singel-slide ">
                                    <div class="hero-bg">
                                        <img width="605" height="312" class="img-full" src="{{ asset('assets2/images/hero/bg/bg-2.jpg') }}" alt="image">
                                    </div>
                                    <div class="inner-wrapper">
                                        <div class="content">
                                            <h1 class="title"><b> {{ $key+1 }} </b></p>
                                                <h1 class="title">Most</h1>
                                                <h1 class="title">Favourite</h1>
                                                <h2 class="title">Vehicle of the month</h2>
                                        </div>
                                        <div class="product-img">
                                            <?php
                                            $main_image_path = (isset($favoured_post->post->main_image)) ? $favoured_post->post->main_image : null;
                                            ?>
                                            <img width="149" height="127" class="img-fluid" id="favour_vehicle_one" src="" alt="image">
                                            <div class="shape shape-1"><img width="83" height="83" class="img-fluid" src="{{ asset($main_image_path) }}" alt="image"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End Hero Area -->
            </div>
        </div>
        <!-- ...:::End Hero Slider Section:::... -->
    </div>
</div>
<div class="row">
    <div class="col-12">
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url({{asset('assets/img/home_images/home-one.jpg')}})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">WELCOME <span>TO VEHIAUTO</span></h2>
                                <p class="animate__animated animate__fadeInUp">Vehiauto.com is marketplace for buy and sell vehicles online in sri lanka.</p>
                                <a href="/home" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url({{asset('assets/img/home_images/home-two.jpg')}})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Sell Vehicles Online</span></h2>
                                <p class="animate__animated animate__fadeInUp">You can sell and promote vehicles online.</p>
                                <a href="/post_registration" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url({{asset('assets/img/home_images/home-three.jpg')}})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Buy and contact sellers</span></h2>
                                <p class="animate__animated animate__fadeInUp">Contact huge number of sellers to analyse and buy your future vehicle.</p>
                                <a href="/contacts" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
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
        <!-- hitwebcounter Code START -->
    </div>
</div>
<div class="row">
    <div class="col-12">
        <section id="search_container" class="bg-light" style="border-color: black; border-width: 2px">
            <form id="search_form" action="/filtered_posts" method="post">
                @csrf
                <div class="row m-2">
                    <div class="form-group col-12 col-md-3 col-lg-1">
                        <label for="cmb_post_type"><b>Post Type</b></label>
                        <div>
                            <select id="cmb_post_type" name="cmb_post_type" class="form-control">
                                <option value="VEHI">Vehicle</option>
                                <option value="SPARE">Spare Parts</option>
                            </select>
                        </div>
                    </div>
                    <div id="start_type_group" class="form-group col-12 col-md-3 col-lg-1">
                        <label for="cmb_start_type"><b>Start Type</b></label>
                        <div>
                            <select id="cmb_start_type" name="cmb_start_type" class="form-control">
                                <option value="any">Any</option>
                                <option value="Manual">Manual</option>
                                <option value="Self">Self</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-3 col-lg-2">
                        <label for="cmb_make"><b>Make</b></label>
                        <div>
                            <select id="cmb_make" name="cmb_make" class="form-control select2"></select>
                        </div>
                    </div>
                    <div id="model_group" class="form-group col-md-3 col-lg-2">
                        <label for="model"><b>Model</b></label>
                        <div>
                            <input type="text" id="model" name="model" class="form-control" placeholder="Enter the model of vehicle" max-length="150">
                        </div>
                    </div>
                    <div id="cmb_vehi_type_group" class="form-group col-12 col-md-3 col-lg-2">
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
                    <div class="form-group col-12 col-md-3 col-lg-2">
                        <label for="cmb_condition"><b>Condition</b></label>
                        <div>
                            <select id="cmb_condition" name="cmb_condition" class="form-control">
                                <option value="any">Select Condition</option>
                                <option value="Used">Used</option>
                                <option value="New">New</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-3 col-lg-2">
                        <label for="cmb_price"><b>Price Range</b></label>
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
                </div>
                <div class="row m-2">
                    <div class="form-group col-12 col-md-3 col-lg-2">
                        <label for="cmb_city"><b>Location</b></label>
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
                    <div id="year_range_group" class="form-group col-12 col-md-4 col-lg-2">
                        <label form="year_range"><b>Year Range</b></label><br>
                        <div class='input-group' id="year_range">
                            <input type="text" id="year_min" name="year_min" class="yearpicker col-6 form-control" placeholder="MIN" autocomplete="off">
                            <input type="text" id="year_max" name="year_max" class="yearpicker col-6 form-control" placeholder="MAX" autocomplete="off">
                        </div>
                    </div>
                    <div id="cmb_gear_group" class="col-12 col-md-3 col-lg-1">
                        <label for="cmb_gear"><b>Gear</b></label>
                        <div>
                            <select id="cmb_gear" name="cmb_gear" class="form-control">
                                <option value="any"> Any Gear </option>
                                <option value="Automatic">Auto</option>
                                <option value="Manual">Manual</option>
                            </select>
                        </div>
                    </div>
                    <div id="cmb_fuel_type_group" class="col-12 col-md-3 col-lg-1">
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
                    <div id="part_in_category_group" class="col-12 col-md-3 col-lg-2 d-none">
                        <label for="part_category">Part Category</label>
                        <div>
                            <select id="part_category" name="part_category" class="form-control">
                                <option value="any">Select</option>
                                <option value="Air Conditioning &amp; Heating">Air Conditioning &amp; Heating
                                </option>
                                <option value="Air Intake &amp; Fuel Delivery">Air Intake &amp; Fuel Delivery
                                </option>
                                <option value="Axles &amp; Axle Parts">Axles &amp; Axle Parts</option>
                                <option value="Battery">Battery</option>
                                <option value="Brakes">Brakes</option>
                                <option value="Car Audio Systems">Car Audio Systems</option>
                                <option value="Car DVR">Car DVR</option>
                                <option value="Car Tuning &amp; Styling">Car Tuning &amp; Styling</option>
                                <option value="Carburetor">Carburetor</option>
                                <option value="Chassis">Chassis</option>
                                <option value="Electrical Components">Electrical Components</option>
                                <option value="Emission Systems">Emission Systems</option>
                                <option value="Engine Cooling">Engine Cooling</option>
                                <option value="Engines &amp; Engine Parts">Engines &amp; Engine Parts</option>
                                <option value="Exhausts &amp; Exhaust Parts">Exhausts &amp; Exhaust Parts
                                </option>
                                <option value="External &amp; Body Parts">External &amp; Body Parts</option>
                                <option value="External Lights &amp; Indicators">External Lights &amp;
                                    Indicators</option>
                                <option value="Footrests, Pedals &amp; Pegs">Footrests, Pedals &amp; Pegs
                                </option>
                                <option value="Freezer">Freezer</option>
                                <option value="Gauges, Dials &amp; Instruments">Gauges, Dials &amp; Instruments
                                </option>
                                <option value="Generator">Generator</option>
                                <option value="GPS &amp; In-Car Technology">GPS &amp; In-Car Technology</option>
                                <option value="Handlebars, Grips &amp; Levers">Handlebars, Grips &amp; Levers
                                </option>
                                <option value="Helmets, Clothing &amp; Protection">Helmets, Clothing &amp;
                                    Protection</option>
                                <option value="Interior Parts &amp; Furnishings">Interior Parts &amp;
                                    Furnishings</option>
                                <option value="Lighting &amp; Indicators">Lighting &amp; Indicators</option>
                                <option value="Mirrors">Mirrors</option>
                                <option value="Oils, Lubricants &amp; Fluids">Oils, Lubricants &amp; Fluids
                                </option>
                                <option value="Other">Other</option>
                                <option value="Reverse Camera">Reverse Camera</option>
                                <option value="Seating">Seating</option>
                                <option value="Service Kits">Service Kits</option>
                                <option value="Silencer">Silencer</option>
                                <option value="Starter Motors">Starter Motors</option>
                                <option value="Stickers">Stickers</option>
                                <option value="Suspension, Steering &amp; Handling">Suspension, Steering &amp;
                                    Handling</option>
                                <option value="Transmission &amp; Drivetrain">Transmission &amp; Drivetrain
                                </option>
                                <option value="Turbos &amp; Superchargers">Turbos &amp; Superchargers</option>
                                <option value="Wheels, Tyres &amp; Rims">Wheels, Tyres &amp; Rims</option>
                                <option value="Windscreen Wipers &amp; Washers">Windscreen Wipers &amp; Washers
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="form-group col-12">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="apply-btn" id="filter_btn" value="APPLY">APPLY</button>
                                <input type="button" class="apply-btn d-none" id="btn_search_cancel" value="CANCEL">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <!-- ======= Trending posts ======= -->
        <div class="trending-posts card card-success m-3" style="font-family: 'Bahnschrift SemiCondensed'; height:'auto'">
            <div class="card-header text-center"><b>
                    <h1>Trending posts</h1>
                </b></div>
            <div class="card-body row">
                @if(isset($trend_posts))
                @foreach($trend_posts as $trend_post)
                <?php
                $post_id = $trend_post['id'];
                $post_title = ($trend_post['post_title'] != null) ? $trend_post['post_title'] : 'N/A';
                $price = ($trend_post['price'] != null) ? $trend_post['price'] : 'N/A';
                $main_image = $trend_post['main_image'];
                $location = ($trend_post->location != null) ? $trend_post->location : 'N/A';
                ($trend_post['post_type'] == 'VEHI') ? $type = 'Vehicle Type: ' . $trend_post['vehilce_type'] : $type = 'Part used in: ' . $trend_post['part_used-in'];
                ?>
                <div class="col-12 col-md-4 col-lg-2">';
                    <a href="{{ asset('/get_post_profile/id/'.$post_id) }}">
                        <div class="card card-white" style="height: 400px">
                            <img src="{{ asset($trend_post->main_image) }}" alt="trending post images" style="width:100%">
                            <div class="card-body bg-success">
                                <h2 class="container-fluid"><b>{{ $post_title }}</b></h2>
                                <h4 class="container-fluid"> <b>Price: </b> රැ . {{ $price }}</h4>
                                <p class="container-fluid"><b>Location: </b> {{ $location }}</p>
                                @if($trend_post['post_type'] == 'VEHI')
                                <p class="container-fluid"><b>Millage: </b> {{ ($trend_post['vehicle'] != null) ? $trend_post['vehicle']['millage'] : 'N/A' }} </p>
                                @endif
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-4"><i class="fa fa-eye">&nbsp; {{ $trend_post['view_count'] }}</i></div>
                                    <div class="col-4"><i class="fa-regular fa-message">&nbsp; {{ $trend_post['review_count'] }}</i></div>
                                    <div class="col-4"><i class="fa-sharp fa-solid fa-heart">&nbsp; {{ $trend_post['favoured_count'] }}</i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <h2>No Trending posts are available yet!</h2>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <!-- ======= Portfolio Section ======= -->
        <div id="portfolio" class="card card-success portfolio m-3" style="font-family: 'Bahnschrift SemiCondensed';">
            <div class="card-header text-center"><b>
                    <h1>Published Posts</h1>
                </b></div>
            <div class="card-body row mb-5" id="adds">
                @if(isset($posts))
                @foreach($posts as $post)
                <?php
                $post_id = $post->id;
                $post_title = ($post->post_title != null) ? $post->post_title : 'N/A';
                $location = ($post->location != null) ? $post->location : 'N/A';
                $price = ($post['price'] != null) ? $post['price'] : 'N/A';
                $millage = ($post['vehicle'] != null) ? $post['vehicle']['millage'] : 'N/A';
                $main_image = $post['main_image'];
                ($post->post_type == 'VEHI') ? $type = 'Vehicle Type: ' . $post['vehilce_type'] : $type = 'Part used in: ' . $post['part_used-in'];
                ?>
                <div class="col-12 col-md-4 col-lg-2">

                    <a href="{{ '/get_post_profile/id/'.$post_id }}">
                        <div class="card card-white" style="height: 400px">
                            @if($post['status'] == '1')
                            <div class="ribbon-wrapper ribbon-lg">
                                <div class="ribbon bg-warning text-lg">Sold</div>
                            </div>
                            @else
                            <div class="ribbon-wrapper ribbon-lg">
                                <div class="ribbon bg-success text-lg">For Sale</div>
                            </div>
                            @endif
                            <img src="{{asset($main_image)}}" alt="post images" style="width:100%">
                            <div class="card-body bg-success">
                                <h2 class="container-fluid"><b>{{ $post_title }}</b></h2>
                                <h4 class="container-fluid"> <b>Price: </b> රැ . {{ $price }}</h4>
                                <p class="container-fluid"><b>Location: </b> {{ $location }}</p>
                                <p class="container-fluid"><b>Millage: </b> {{ $millage}} </p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-4"><i class="fa fa-eye">&nbsp; {{ $post['view_count'] }}</i></div>
                                    <div class="col-4"><i class="fa-regular fa-message">&nbsp; {{ $post['review_count'] }}</i></div>
                                    <div class="col-4"><i class="fa-sharp fa-solid fa-heart">&nbsp; {{ $post['favoured_count'] }}</i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
            <div class="card-footer">
                {{ (isset($posts)) ? $posts->links() : ''; }}
            </div>
        </div>
    </div>
</div>
<!-- End Portfolio Section -->
@endsection
@section('pageScripts')
<script>
    $(document).ready(function() {
        $('#cmb_post_type').change(function() {
            if ($(this).val() == 'SPARE') {
                $('#model_group').addClass('d-none');
                $('#cmb_vehi_type_group').addClass('d-none');
                $('#year_range_group').addClass('d-none');
                $('#cmb_gear_group').addClass('d-none');
                $('#cmb_fuel_type_group').addClass('d-none');
                $('#part_in_category_group').removeClass('d-none');
                $('#start_type_group').addClass('d-none');
            }

            if ($(this).val() == 'VEHI') {
                $('#model_group').removeClass('d-none');
                $('#cmb_vehi_type_group').removeClass('d-none');
                $('#year_range_group').removeClass('d-none');
                $('#cmb_gear_group').removeClass('d-none');
                $('#cmb_fuel_type_group').removeClass('d-none');
                $('#part_in_category_group').addClass('d-none');
                $('#start_type_group').removeClass('d-none');
            }
        });

        $('#cmb_make').select2();
        $('#cmb_city').select2();

        loadMakes();
    });

    function loadMakes(callBack) {
        let option = '';
        ajaxRequest("GET", "{{ asset('/api/get_makes') }}", null, function(resp) {
            if (resp.length == 0) {
                option += '<option value="">No Data</option>';
            } else {
                option = '<option value="any">Select Make</option>';
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

    function generateStars(star_count) {
        let stars = '';

        for (let i = 0; i < 5; i++) {
            if (i < star_count) {
                stars += '<span class="fa fa-star checked"></span>';
            } else {
                stars += '<span class="fa fa-star"></span>';
            }
        }

        return stars;
    }
</script>
@endsection