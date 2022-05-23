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

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/yearpicker/yearpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/css/select2.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <style>
        .has-error {
            color: red;
        }
    </style>
</head>

<body class="container-fluid">
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
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">
        <div class="card card-primary">
            <div class="card-header bg-success text-light">
                <h3 class="card-title text-center">Advertiesment Registration form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <form id='post_update' data-post-id="{{$post_data['id']}}">
                    <div class="row">
                        <div id="post_section" class="col-12 col-md-6">
                            <div class="card card-light">
                                <div class="card-body">
                                    <input type="text" id="user_id" name="user_id" value="{{ Auth::id() }}" hidden>
                                    <div class="form-group">
                                        <label for="post_type">Post Type</label>
                                        <div>
                                            <select class="form-control" id="post_type" name="post_type" required>
                                                <option value="">Not Selected</option>
                                                <option value="VEHICLE">Vehicle</option>
                                                <option value="SPARE PART">Spare Part</option>
                                                <option value="WANTED">Wanted</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="post_title">Post Title</label>
                                        <div>
                                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter the post title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="vehicle_type">Vehicle type</label>
                                        <div>
                                            <select id="vehicle_type" name="vehicle_type" class="form-control">
                                                <option value="All">All</option>
                                                <option value="Car">Car</option>
                                                <option value="Van">Van</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Crew Cab">Crew Cab</option>
                                                <option value="Wagon">Wagon</option>
                                                <option value="Pickup">Pickup</option>
                                                <option value="Bus">Bus</option>
                                                <option value="Lorry">Lorry</option>
                                                <option value="Three Wheel">Three Wheel</option>
                                                <option value="Tractor">Tractor</option>
                                                <option value="Heavy-Duty">Heavy-Duty</option>
                                                <option value="Other">Other</option>
                                                <option value="Motorcycle">Motorcycle</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condition">Condition</label>
                                        <div>
                                            <select class="form-control" id="condition" name="condition" required>
                                                <option value="">Not Selected</option>
                                                <option value="Used">Used</option>
                                                <option value="New">Brand New</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="make_id">Make</label>
                                        <div>
                                            <select class="form-control" id="make_id" name="make_id" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <div id="the-basics">
                                            <input type="number" class="form-control" name="price" id="price" placeholder='Enter the price' max="1999999999" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <div>
                                            <textarea id="address" name="address" class="form-control" placeholder="Enter the address" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="location">City</label>
                                        <div>
                                            <select id="location" name="cmb_city" class="form-control">
                                                <option value=""> Any City </option>
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
                                                <option value="Welisara">Welisara</option <option value="Wennappuwa">Wennappuwa
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="additional_info">Description</label>
                                        <div>
                                            <textarea id="additional_info" name="additional_info" class="form-control" placeholder="Enter the description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-1">
                            <div class="card card-light">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="main_image">Main Image</label>
                                        <div>
                                            <input type="file" class="form-control" id="main_image" name="main_image" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_one">Image 1</label>
                                        <div>
                                            <input type="file" class="form-control" id="image_one" name="image_one" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_two">Image 2</label>
                                        <div>
                                            <input type="file" class="form-control" id="image_two" name="image_two" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_three">Image 3</label>
                                        <div>
                                            <input type="file" class="form-control" id="image_three" name="image_three" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_four">Image 4</label>
                                        <div>
                                            <input type="file" class="form-control" id="image_four" name="image_four" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_five">Image 5</label>
                                        <div>
                                            <input type="file" class="form-control" id="image_five" name="image_five" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle_sec card card-light mt-1">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="model"> Model *</label>
                                        <div><input type="text" class="form-control" name="model" id="model" placeholder="Enter the model name" required></div>
                                    </div>
                                    <div class="form-group self-start d-none">
                                        <label for="start_type">Start Type</label>
                                        <div>
                                            <select class="form-control" name="start_type" id="start_type" required>
                                                <option value="">Select the Start type</option>
                                                <option value="Manual">Self Start</option>
                                                <option value="Automatic">Kikstart</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="manufactured_year">Manufactured Year</label>
                                        <div><input type="text" class="form-control" name="manufactured_year" id="manufactured_year" placeholder="Please enter the manufactured year" required></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="transmission">Transmission</label>
                                        <div>
                                            <select class="form-control" name="transmission" id="transmission" required>
                                                <option value="">Select the Start type</option>
                                                <option value="Manual">Manual</option>
                                                <option value="Automatic">Automatic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- radio -->
                                    <div class="form-group">
                                        <label for="fuel_type">Fuel Type</label>
                                        <div>
                                            <select name="fuel_type" id="fuel_type" class="form-control" required>
                                                <option value="">Select Fuel Type</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Petrol">Petrol</option>
                                                <option value="Electric">Electric</option>
                                                <option value="Hybrid">Hybrid</option>
                                                <option value="Gas">Gas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="engine_capacity">Engine Capacity</label>
                                        <div><input type="text" class="form-control" name="engine_capacity" id="engine_capacity" required></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="millage">Millage</label>
                                        <div>
                                            <input type="text" class="form-control" name="millage" id="millage" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle_sec card card-light mt-1">
                                <div id="four_wheel_features" class="card-body">
                                    <div class="row">
                                        <div class="form-group col-lg-3">
                                            <label for="isAc">AC</label>
                                            <div>
                                                <input type="checkbox" name="isAc" id="isAc">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="isPowerSteer">Power Steer</label><br>
                                            <div>
                                                <input type="checkbox" name="isPowerSteer" id="isPowerSteer">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="isPowerMirroring">Power Mirroring</label>
                                            <div>
                                                <input type="checkbox" name="isPowerMirroring" id="isPowerMirroring">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="isPowerWindow">Power Window</label>
                                            <div>
                                                <input type="checkbox" name="isPowerMirroring" id="isPowerWindow">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-3">
                                            <label for="on_going_lease">On Going Lease</label>
                                            <div>
                                                <input type="checkbox" name="on_going_lease" id="on_going_lease">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </section>
                            <section id="spare_part_sec" class="d-none col-12 col-md-6">
                                <div class="card card-light">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="part_category">Part Category</label>
                                            <div>
                                                <select id="part_category" name="part_category" class="form-control" required>
                                                    <option value="">Select</option>
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
                                </div>
                            </section>
                            <!--</div>-->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button id="update_post" type="button" class="btn btn-primary pl-5 pr-5">Update Post</button>
                        </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
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
                <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.classifield.qa.mkesell.com">VEHIAUTO.COM</a></strong>
            </div>
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </footer>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Page script -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/dist/js/demo.js') }}"></script>
    <script src="{{asset('/plugins/datatables/jquery.dataTables.js')}}"></script>
    <!--commen functions-->
    <script src="{{ asset('/js/commenFunctions/functions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/commenFunctions/file_upload.js') }}" type="text/javascript"></script>
    <!-- Select2 -->
    <script src="{{ asset('/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- validation -->
    <script src="{{ asset('/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- AdminLTE App -->
    <script>
        $(document).ready(function() {
            let vehicle_type = '{{$post_data["vehicle_type"]}}';
            let post_type = '{{$post_data["post_type"]}}';
            let part_cat = '{{$post_data["part_category"]}}';
            let post_title = '{{$post_data["post_title"]}}';
            let condition = '{{$post_data["condition"]}}';
            let make_id = '{{$post_data["make_id"]}}';
            let price = '{{$post_data["price"]}}';
            let address = '{{$post_data["address"]}}';
            let location = '{{$post_data["location"]}}';
            let desc = '{{$post_data["additional_info"]}}';
            let model = '{{$post_data["model"]}}';
            let start_type = '{{$post_data["start_type"]}}';
            let manufactured_year = '{{$post_data["manufactured_year"]}}';
            let fuel_type = '{{$post_data["fuel_type"]}}';
            let engine_capacity = '{{$post_data["engine_capacity"]}}';
            let millage = '{{$post_data["millage"]}}';
            let transmission = '{{$post_data["transmission"]}}';

            ('{{$post_data["isAc"]}}' == '0') ? $('#isAc').prop('checked', false): $('#isAc').prop('checked', true);
            ('{{$post_data["on_going_lease"]}}' == '0') ? $('#on_going_lease').prop('checked', false): $('#on_going_lease').prop('checked', true);
            ('{{$post_data["isPowerSteer"]}}' == '0') ? $('#isPowerSteer').prop('checked', false): $('#isPowerSteer').prop('checked', true);
            ('{{$post_data["isPowerMirroring"]}}' == '0') ? $('#isPowerMirroring').prop('checked', false): $('#isPowerMirroring').prop('checked', true);
            ('{{$post_data["isPowerWindow"]}}' == '0') ? $('#isPowerWindow').prop('checked', false): $('#isPowerWindow').prop('checked', true);

            $('#vehicle_type').val(vehicle_type).change();
            $('#post_type').val(post_type).change();
            $('#post_title').val(post_title).change();
            $('#condition').val(condition).change();
            loadMakesCombo(make_id, '');
            $('#price').val(price);
            $('#address').val(address);
            $('#location').val(location);
            $('#additional_info').text(desc);
            $('#model').val(model);
            $('#start_type').val(start_type);
            $('#manufactured_year').val(manufactured_year);
            $("#transmission").val(transmission);
            $("#fuel_type").val(fuel_type);
            $("#engine_capacity").val(engine_capacity);
            $("#millage").val(millage);
            $('#part_category').val(part_cat);

            $('#make_id').select2();
            $('#location').select2();
        });

        $('#post_type').change(function() {
            if ($(this).val() == 'VEHICLE' || $(this).val() == 'WANTED') {
                $('#spare_part_sec').addClass('d-none');
                $('.vehicle_sec').removeClass('d-none');
            }
            if ($(this).val() == 'SPARE PART') {
                $('.vehicle_sec').addClass('d-none');
                $('#spare_part_sec').removeClass('d-none');
            }
            if ($(this).val() == '') {
                $('.vehicle_sec').addClass('d-none');
                $('#spare_part_sec').addClass('d-none');
            }
        });

        $('#vehicle_type').change(function() {
            ($(this).val() != 'Motorcycle') ? $('#four_wheel_features').removeClass('d-none'): $('#four_wheel_features').addClass('d-none');
        });

        function loadMakesCombo(selected, callBack) {
            let option = '';
            ajaxRequest("GET", "/public/api/get_makes/", null, function(resp) {
                if (resp.length == 0) {
                    option += '<option value="">No Data</option>';
                } else {
                    $.each(resp, function(index, row) {
                        if (!isNaN(parseInt(selected)) && selected == row.id) {
                            option += '<option value="' + row.id + '" selected>' + row.make_name +
                                '</option>';
                        } else {
                            option += '<option value="' + row.id + '">' + row.make_name + '</option>';
                        }
                    });
                }
                $('#make_id').html(option);
                if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
                    callBack();
                }
            });
        }

        $("#update_post").click(function() {
            var is_valid = jQuery("#post_update").valid();
            if (is_valid) {
                let object = {
                    user_id: $('#user_id').val(),
                    post_type: $('#post_type').val(),
                    post_title: $('#post_title').val(),
                    vehicle_type: $('#vehicle_type').val(),
                    condition: $('#condition').val(),
                    make_id: $('#make_id').val(),
                    price: $('#price').val(),
                    location: $('#location').val(),
                    address: $('#address').val(),
                    additional_info: $('#additional_info').val(),
                    model: $('#model').val(),
                    start_type: $('#start_type').val(),
                    manufactured_year: $('#manufactured_year').val(),
                    on_going_lease: $('input[name="on_going_lease"]:checked').val(),
                    transmission: $("#transmission").val(),
                    fuel_type: $("#fuel_type").val(),
                    engine_capacity: $("#engine_capacity").val(),
                    millage: $("#millage").val(),
                    isAc: $('input[name="isAc"]:checked').val(),
                    isPowerSteer: $('input[name="isPowerSteer"]:checked').val(),
                    isPowerMirroring: $('input[name="isPowerMirroring"]:checked').val(),
                    isPowerWindow: $('input[name="isPowerWindow"]:checked').val(),
                    part_category: $('#part_category').val(),
                };

                object.main_image = ($('#main_image')[0].files[0] != 'undefined') ? $('#main_image')[0].files[0] : null;
                object.image_one = ($('#image_one')[0].files[0] != 'undefined') ? $('#image_one')[0].files[0] : null;
                object.image_two = ($('#image_two')[0].files[0] != 'undefined') ? $('#image_two')[0].files[0] : null;
                object.image_three = ($('#image_three')[0].files[0] != 'undefined') ? $('#image_three')[0].files[0] : null;
                object.image_four = ($('#image_four')[0].files[0] != 'undefined') ? $('#image_four')[0].files[0] : null;
                object.image_five = ($('#image_five')[0].files[0] != 'undefined') ? $('#image_five')[0].files[0] : null;

                let url = "/public/api/update_post/id/" + $('#post_update').data('post-id');
                ulploadFileWithData(url, object, function(result) {
                    if (result.status == 1) {
                        Swal.fire(
                            'Post Registration',
                            'Successfully updated!',
                            'success'
                        );
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: result.msg
                        })
                    }
                    if (typeof callBack !== 'undefined' && callBack != null && typeof callBack ===
                        "function") {
                        callBack(result);
                    }
                });
            }
        });

        var post_update;
        post_update = $("#post_update").validate({
            errorClass: "invalid",
            rules: {
                tel: {
                    valid_lk_phone: true,
                },
                email: {
                    valide_email: true,
                }
            },
            highlight: function(element) {
                $(element).parent().addClass('has-error');
            },
            unhighlight: function(element) {
                $(element).parent().removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'validation-error-message help-block form-helper bold',
            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        });

        jQuery.validator.setDefaults({
            errorElement: "span",
            ignore: ":hidden:not(select.chosen-select)",
            errorPlacement: function(error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");
                if (element.prop("type") === "checkbox") {
                    //                error.insertAfter(element.parent("label"));
                    error.appendTo(element.parents("validate-parent"));
                } else if (element.is("select.chosen-select")) {
                    error.insertAfter(element.siblings(".chosen-container"));
                } else if (element.prop("type") === "radio") {
                    error.appendTo(element.parents("div.validate-parent"));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass, validClass) {
                jQuery(element).parents(".validate-parent").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function(element, errorClass, validClass) {
                jQuery(element).parents(".validate-parent").removeClass("has-error");
            }
        });
        jQuery.validator.addMethod("valide_code", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s\d\_\-()]{1,100}$/.test(value);
        }, "Please enter a valid Code");
        jQuery.validator.addMethod("valid_name", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s\.\&\-()]*$/.test(value);
        }, "Please enter a valid name");
        jQuery.validator.addMethod("valid_date", function(value, element) {
            return this.optional(element) || /^\d{4}\-\d{2}\-\d{2}$/.test(value);
        }, "Please enter a valid date ex. 2017-03-27");
        jQuery.validator.addMethod("valide_email", function(value, element) {
            return this.optional(element) || /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/.test(value);
        }, "Please enter a valid email addresss");
        jQuery.validator.addMethod("valid_lk_phone", function(value, element) {
            return this.optional(element) || /^0[7][0-9]{8}$/.test(value);
        }, "Please enter a valid phone number");

        function formValidation() {
            let response = true;
            if ($('#Telephone').val().trim().length !== 10) {
                alert('Invalid Mobile Number');
                var elem = document.getElementById("Telephone");
                input.addEventListener("invalid", function(evt) {
                    //                                                                var elem = evt.srcElement;
                    //                                                                elem.nextSibling.innerText = elem.validationMessage;
                });
                return false;
            } else if ($('#first_name').val() == '') {
                alert('Enter Firstname');
                response = false;
            }
            return response;
        }
    </script>
</body>

</html>