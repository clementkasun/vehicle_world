@section('navbar')
<div class="lg-nav">
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:vehicleworld@gmail.com">vehiauto@gmail.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +94 763993288
            </div>
            <div class="social-links d-none d-md-block">
                <a href="https://twitter.com/VehiautoC" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/kasunclement/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center header">
        <div class="container d-flex align-items-center">
            <h2 class="logo me-auto">VEHIAUTO.COM</h2><i class="bi bi-list mobile-nav-toggle"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ asset('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('analysis') }}">Market Analysis</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('about_us') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('services') }}">Services</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('create-post') }}"><span class="btn btn-warning">post add</span></a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('user_profile') }}">Account</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('contacts') }}">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('login_cust') }}">Login</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('logout') }}">Logout</a></li>
                    <li><a class="nav-link scrollto" href="{{ asset('register_customer') }}">Register</a></li>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
</div>
 <!-- ...:::Start User Event Section:::... -->
 <div class="header-section">
            <div class="container">
                <!-- Start User Event Area -->
                <div class="header-area">
                    <div class="header-top-area header-top-area--style-1">
                        <ul class="event-list">
                            <li class="list-item"><a href="#mobile-menu-offcanvas" area-label="mobile menu offcanvas svg icon" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow main-menu offcanvas-toggle offside-menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-28 -63)">
                                            <path id="Rectangle_3" data-name="Rectangle 3" d="M0,0H5A2,2,0,0,1,7,2V5A2,2,0,0,1,5,7H2A2,2,0,0,1,0,5V0A0,0,0,0,1,0,0Z" transform="translate(28 63)" fill="#ff375f" />
                                            <path id="Rectangle_6" data-name="Rectangle 6" d="M2,0H5A2,2,0,0,1,7,2V5A2,2,0,0,1,5,7H0A0,0,0,0,1,0,7V2A2,2,0,0,1,2,0Z" transform="translate(28 72)" fill="#ff375f" />
                                            <path id="Rectangle_4" data-name="Rectangle 4" d="M2,0H7A0,0,0,0,1,7,0V5A2,2,0,0,1,5,7H2A2,2,0,0,1,0,5V2A2,2,0,0,1,2,0Z" transform="translate(37 63)" fill="#ff375f" />
                                            <path id="Rectangle_5" data-name="Rectangle 5" d="M2,0H5A2,2,0,0,1,7,2V7A0,0,0,0,1,7,7H2A2,2,0,0,1,0,5V2A2,2,0,0,1,2,0Z" transform="translate(37 72)" fill="#ff375f" />
                                        </g>
                                    </svg>
                                </a></li>
                                <a href="/">
                                    <h1>vehiauto.com</h1>
                                </a>
                            <!-- <li class="list-item"> -->
                                <!-- <img class="img-fluid" width="147" height="26" src="assets2/images/logo.png" alt="image"> -->
                            <!-- </li> -->
                            <li class="list-item">
                                <ul class="list-child">
                                    <!-- <li class="list-item">
                                        <span class="notch-bg notch-bg--sunset-orange"></span>
                                        <a href="cart.html" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="icon icon-carce-cart"></i></a>
                                    </li> -->
                                    <li class="list-item">
                                        <span class="notch-bg notch-bg--emerald"></span>
                                        <a href="#profile-menu-offcanvas" area-label="User" class="btn btn--size-33-33 btn--center btn--round offcanvas-toggle offside-menu">
                                            <?php
                                            $user_path = '';
                                            (isset($user_profile_data['profile_photo_path'])) ? $user_path = '/storage/' . $user_profile_data['profile_photo_path'] : $user_path = '/dist/img/avatar5.png';
                                            ?>
                                            <img class="img-fluid" height="33" width="33" src="{{ asset($user_path) }}" alt="user image"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End User Event Area -->
            </div>
        </div>
@endsection
