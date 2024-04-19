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
            </div>
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav d-flex flex-row me-1">
                    <li class="nav-item me-3 me-lg-0">
                        <div class="dropdown">
                            <a class="me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell text-danger" aria-hidden="true" title="notifications"></i>
                                <span class="sr-only">notifications</span>
                                <span class="badge text-danger">{{ (auth()->user() != null) ? auth()->user()->unreadNotifications->count() : null }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

                                <?php (isset(auth()->user()->unreadNotifications)) ? $notifications = auth()->user()->unreadNotifications : $notifications = null ?>
                                @if($notifications)
                                @forelse($notifications as $notification)
                                <li>
                                    <div class="alert alert-info" role="alert" id="{{ $notification->id }}">
                                        <div class="row">
                                            <div class="col-7">
                                                {{ $notification->created_at }} {{ $notification['data']['action'] }}.
                                            </div>
                                            <div class="col-5">
                                                <button class="float-right mark-as-read fa fa-mark-as-read btn btn-warning" data-id="{{ $notification->id }}">Mark as read</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                @if($loop->last)
                                <a href="{{ $notifications->markAsRead() }}" class="btn btn-warning float-right mark-all-as-read">
                                    Mark all as read
                                </a>
                                @endif
                                @empty
                                <li>There are no new notifications</li>
                                @endforelse
                                @endif
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </section>


    <!-- ======= Header ======= -->
    <header id="header" class="header">
        <div class="container-fluid">
            <ul id="lg-links-ul">
                <li class="lg-links-li">
                    <h2 class="logo me-auto text-light m-3">VEHIAUTO.COM</h2>
                </li>
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a link-active" href="{{ asset('/') }}">Home</a></li>
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('/analysis') }}">Analysis</a></li>
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('about_us') }}">About</a></li>
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('services') }}">Services</a></li>
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('create-post') }}">Create post</a></li>
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('user_profile') }}">Account</a></li>
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('contacts') }}">Contact</a></li>
                @if(auth()->user() != null)
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('logout') }}">Logout</a></li>
                @else
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('login_cust') }}">Login</a></li>
                <li class="lg-links-li"><a class="nav-link scrollto lg-links-a" href="{{ asset('register') }}">Register</a></li>
                @endif
            </ul>
            <!-- .navbar -->
        </div>
    </header>
</div>

<main class="main-wrapper">
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
                            <h1>VEHIAUTO.COM</h1>
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
                                <li class="list-item" id="prof_btn">
                                    <span class="notch-bg notch-bg--emerald"></span>
                                    <a href="#profile-menu-offcanvas" area-label="User" class="btn btn--size-33-33 btn--center btn--round offcanvas-toggle offside-menu">
                                        <?php

                                        $user = auth()->user();
                                        $user_path = '';
                                        (isset($user->profile_photo_path)) ? $user_path = '/storage/' . $user->profile_photo_path : $user_path = './dist/img/avatar5.png';
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
</main>

<!--  Start Offcanvas Mobile Menu Section -->
<div id="mobile-menu-offcanvas" class="offcanvas offcanvas-leftside offcanvas-mobile-menu-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header flex-end">

        <div class="logo">
            <a href="/">
                <h1>vehiauto.com</h1>
            </a>
        </div>

        <button class="offcanvas-close" aria-label="offcanvas svg icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="5.973" height="10.449" viewBox="0 0 5.973 10.449">
                <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M13.051,11.417,17,7.466a.747.747,0,0,0-1.058-1.054l-4.479,4.476a.745.745,0,0,0-.022,1.03l4.5,4.507A.747.747,0,1,0,17,15.37Z" transform="translate(-11.251 -6.194)" />
            </svg>
        </button>
    </div>
    <!-- End Offcanvas Header -->

    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-mobile-menu-wrapper">
        <!-- Start Mobile Menu  -->
        <div class="mobile-menu-bottom">
            <!-- Start Mobile Menu Nav -->
            <div class="offcanvas-menu">
                <ul>
                    <li>
                        <a href="/"><span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Pages</span></a>
                        <ul class="mobile-sub-menu">
                            <li><a href="/analysis">Analytics</a></li>
                            <li><a href="/create-post">Create post</a></li>
                            <li><a href="/user_profile">User Profile</a></li>
                            <li><a href="/logout">Logout</a></li>
                            <li><a href="/login_cust">Login</a></li>
                            <li><a href="/register_customer">Register</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>More Details</span></a>
                        <ul class="mobile-sub-menu">
                            <li><a href="/contacts">Contacts</a></li>
                            <li><a href="/about_us">About us</a></li>
                            <li><a href="/help">Help</a></li>
                        </ul>

                    </li>
                </ul>
            </div> <!-- End Mobile Menu Nav -->
        </div> <!-- End Mobile Menu -->

        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <address class="address">
                <span>Address: Kurunegala,sri lanka</span>
                <span>Call Us: 0763993288</span>
                <span>Email: ksaunclement12345@mail.com</span>
            </address>
        </div>
        <!-- End Mobile contact Info -->

    </div> <!-- End Offcanvas Mobile Menu Wrapper -->
</div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

<!--  Start Offcanvas Profile Menu Section -->
<div id="profile-menu-offcanvas" class="offcanvas offcanvas-rightside">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header flex-start offcanvas-modify">
        <button class="offcanvas-close" aria-label="offcanvas svg icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="5.973" height="10.449" viewBox="0 0 5.973 10.449">
                <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M13.051,11.417,17,7.466a.747.747,0,0,0-1.058-1.054l-4.479,4.476a.745.745,0,0,0-.022,1.03l4.5,4.507A.747.747,0,1,0,17,15.37Z" transform="translate(-11.251 -6.194)" />
            </svg>
        </button>
        <span>User Profile</span>

    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-profile-menu-wrapper">
        <!-- ...:::Start Profile Card Section:::... -->
        <div class="profile-card-section section-gap-top-25">
            <div class="profile-card-wrapper">
                <div>
                    <?php

                    $user = auth()->user();
                    $user_path = '';
                    (isset($user->profile_photo_path)) ? $user_path = '/storage/' . $user->profile_photo_path : $user_path = './dist/img/avatar5.png';
                    ?>
                    <img class="img-circle" width="45px" height="45px" src="{{ asset($user_path) }}" alt="image">
                </div>
                <div class="content">
                    @if($user != null)
                    <h2 class="name">{{ $user->name . ' ' .$user->last_name }}</h2>
                    <span class="email">{{ $user->email }}</span>
                    <span class="user_name">{{ $user->user_name }}</span>
                    @endif
                </div>
                <div class="profile-shape profile-shape-1"><img class="img-fluid" width="61" height="50" src="{{ asset('assets2/images/profile-shape-1.svg')}}" alt="image"></div>
                <div class="profile-shape profile-shape-2"><img class="img-fluid" width="48" height="59" src="{{ asset('assets2/images/profile-shape-2.svg')}}" alt="image"></div>
            </div>
        </div>
        <!-- ...:::End Profile Card Section:::... -->

        <!-- ...:::Start Profile Details Section:::... -->
        <div class="profile-details-section section-gap-top-30">
            <div class="profile-details-wrapper">
                <div class="profile-details-top">
                    <!-- <div class="left">
                                <span class="text">Total Buy</span>
                                <span class="price">$2000.00</span>
                            </div> -->
                    <div class="right">
                        <a area-label="wishlist icon" href="{{ ($user != null) ? asset('/user-favourite-page/id/'.$user->id) : '/login'; }}" class="btn btn--size-58-58 btn--font-size-22 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="icon icon-carce-heart" title="favourite items"></i></a>
                    </div>
                </div>
                <div class="profile-details-bottom">
                    <ul class="profile-user-list">
                        <li class="profile-list-item">
                            <ul class="profile-single-list">
                                <li class="list-item">
                                    <span class="title">Setting</span>
                                </li>
                                <li class="list-item">
                                    <a href="/user_profile" class="profile-link"><span class="icon"><i class="icon icon-carce-user"></i></span>Account Setting</a>
                                </li>
                                <!-- <li class="list-item">
                                    <a href="/" class="profile-link"><span class="icon"><i class="icon icon-carce-briefcase"></i></span>Billing & Payment</a>
                                </li> -->
                                <li class="list-item">
                                    <a href="/notifications" class="profile-link"><span class="icon"><i class="icon icon-carce-bell"></i></span>Notification</a>
                                </li>
                            </ul>
                        </li>

                        <li class="profile-list-item">
                            <ul class="profile-single-list">
                                <li class="list-item">
                                    <a href="/logout" class="profile-link"><span class="icon"><i class="icon icon-carce-login"></i></span>Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ...:::End Profile Details Section:::... -->
    </div> <!-- End Offcanvas Mobile Menu Wrapper -->
</div> <!-- ...:::: End Offcanvas Profile Menu Section:::... -->

<div class="offcanvas-overlay"></div>
@endsection