<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vehiauto.com</title>
    <meta name="Googlebot" content="noindex" />
    <meta name="description" content="vehiauto is a emerging web marketplace for your vehicle needs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets2/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All Google Fonts::::::::::::::-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets2/css/vendor/icomoon.css" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets2/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets2/css/plugins/ion.rangeSlider.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets2/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets2/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets2/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets2/css/style.min.css"> -->
</head>

<body>

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
                            <li class="list-item">
                                <!-- <img class="img-fluid" width="147" height="26" src="assets2/images/logo.png" alt="image"> -->
                                <a href="/">
                                    <h1>vehiauto.com</h1>
                                </a>
                            </li>
                            <li class="list-item">
                                <ul class="list-child">
                                    <li class="list-item">
                                        <span class="notch-bg notch-bg--sunset-orange"></span>
                                        <a href="cart.html" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="icon icon-carce-cart"></i></a>
                                    </li>
                                    <li class="list-item">
                                        <span class="notch-bg notch-bg--emerald"></span>
                                        <a href="#profile-menu-offcanvas" area-label="User" class="btn btn--size-33-33 btn--center btn--round offcanvas-toggle offside-menu">
                                            <?php
                                            $user_path = '';
                                            (isset($user_profile_data['profile_photo_path'])) ? $user_path = './storage/' . $user_profile_data['profile_photo_path'] : $user_path = './dist/img/avatar5.png';
                                            ?>
                                            <img class="img-fluid" height="33" width="33" src="{{ $user_path }}" alt="user image"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End User Event Area -->
            </div>
        </div>
        <!-- ...:::End User Event Section:::... -->

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
                                <a href="#"><span>Shop</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product.html">Product</a></li>
                                    <li><a href="shop-category.html">Shop Category</a></li>
                                </ul>

                            </li>
                            <li>
                                <a href="#"><span>Pages</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="chat.html">Chat</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="order.html">Order</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
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
                        <div class="image">
                            <?php
                            $user_path = '';
                            (isset($user_profile_data['profile_photo_path'])) ? $user_path = './storage/' . $user_profile_data['profile_photo_path'] : $user_path = './dist/img/avatar5.png';
                            ?>
                            <img class="img-fluid" width="10" height="10" src="{{ $user_path }}" alt="image">
                        </div>
                        <div class="content">
                            @if($user_profile_data != null)
                            <h2 class="name">{{$user_profile_data['name'] . ' ' .$user_profile_data['last_name']}}</h2>
                            <span class="email">{{ $user_profile_data['email']}}</span>
                            <span class="id-num"></span>
                            @endif
                        </div>
                        <div class="profile-shape profile-shape-1"><img class="img-fluid" width="61" height="50" src="assets2/images/profile-shape-1.svg" alt="image"></div>
                        <div class="profile-shape profile-shape-2"><img class="img-fluid" width="48" height="59" src="assets2/images/profile-shape-2.svg" alt="image"></div>
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
                                <button aria-label="Wishlist" class="btn btn--size-58-58 btn--font-size-22 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="icon icon-carce-heart"></i></button>
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
                                        <li class="list-item">
                                            <a href="checkout.html" class="profile-link"><span class="icon"><i class="icon icon-carce-briefcase"></i></span>Billing & Payment</a>
                                        </li>
                                        <li class="list-item">
                                            <a href="notification.html" class="profile-link"><span class="icon"><i class="icon icon-carce-bell"></i></span>Notification</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="profile-list-item">
                                    <ul class="profile-single-list">
                                        <li class="list-item">
                                            <a href="login.html" class="profile-link"><span class="icon"><i class="icon icon-carce-login"></i></span>Log Out</a>
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

        <!-- ...:::Start Search & Filter Section:::... -->
        <div class="search-n-filter-section section-gap-top-25">
            <div class="container">
                <!-- Start Search & Filter Area -->
                <div class="search-n-filter-area home-one">
                    <div class="search-box">

                        <div class="searchable select">
                            <input type="text" placeholder="Search..." onkeyup="filterFunction(this,event)">
                            <ul>
                                <li>mexico city</li>
                                <li>Bulgaria</li>
                                <li>san francisco</li>
                                <li>Egypt</li>
                                <li>texas</li>
                            </ul>
                            <button class="btn search__btn" aria-label="Search Icon" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.003" viewBox="0 0 12 12.003">
                                    <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search" d="M13.859,13.131,10.522,9.762a4.756,4.756,0,1,0-.722.731l3.316,3.347a.514.514,0,0,0,.725.019A.517.517,0,0,0,13.859,13.131Zm-7.075-2.6a3.756,3.756,0,1,1,2.656-1.1A3.732,3.732,0,0,1,6.784,10.534Z" transform="translate(-2 -1.997)" fill="#171717" />
                                </svg>
                            </button>

                            <button class="btn submit__btn" aria-label="Search Icon" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M19.354,11.481a.816.816,0,0,0-.006,1.15l3.8,3.806H8.682a.812.812,0,0,0,0,1.625H23.143l-3.8,3.806a.822.822,0,0,0,.006,1.15.81.81,0,0,0,1.144-.006l5.152-5.187h0a.912.912,0,0,0,.169-.256.775.775,0,0,0,.063-.312.814.814,0,0,0-.231-.569L20.492,11.5A.8.8,0,0,0,19.354,11.481Z" transform="translate(-7.875 -11.252)" fill="#aaa" />
                                </svg>
                            </button>

                            <button class="btn close__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <path id="Icon_metro-cancel" data-name="Icon metro-cancel" d="M6.857.643a6,6,0,1,0,6,6,6,6,0,0,0-6-6Zm0,10.875a4.875,4.875,0,1,1,4.875-4.875A4.875,4.875,0,0,1,6.857,11.518ZM8.732,3.643,6.857,5.518,4.982,3.643,3.857,4.768,5.732,6.643,3.857,8.518,4.982,9.643,6.857,7.768,8.732,9.643,9.857,8.518,7.982,6.643,9.857,4.768Z" transform="translate(-0.857 -0.643)" fill="#aaa" />
                                </svg>
                            </button>

                        </div>

                        <button id="filter-trigger" aria-label="Filter Icon" class="filter_btn btn--radius btn--radical-red btn--color-white btn--box-shadow btn--size-40-40 btn--center btn--font-size-22"><i class="icon icon-carce-filter"></i></button>
                    </div>
                </div>
                <!-- End Search & Filter Area -->

                <div class="shop-filter" id="shop-filter-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-filter-block mt-0">
                                    <h4 class="shop-filter-block__title">Price</h4>
                                    <div class="shop-filter-block__content">
                                        <div class="widget-price-range">
                                            <input type="text" id="price-range-slider">
                                        </div>
                                    </div>
                                </div>
                                <ul class="product-variable-lists">
                                    <li class="list-item">
                                        <div class="left">Size</div>
                                        <div class="right">
                                            <ul class="size-chart inner-child-item">
                                                <li>
                                                    <label for="samll">
                                                        <input type="radio" name="size" id="samll" checked="">
                                                        <span class="size-text">S</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="medium">
                                                        <input type="radio" name="size" id="medium">
                                                        <span class="size-text">M</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="large">
                                                        <input type="radio" name="size" id="large">
                                                        <span class="size-text">L</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="xlarge">
                                                        <input type="radio" name="size" id="xlarge">
                                                        <span class="size-text">XL</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="xxlarge">
                                                        <input type="radio" name="size" id="xxlarge">
                                                        <span class="size-text">XXL</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="left">Color</div>
                                        <div class="right">
                                            <ul class="color-chart inner-child-item">
                                                <li>
                                                    <label for="blue">
                                                        <input type="radio" name="color" id="blue">
                                                        <span class="color-box color-box--blue"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="orange">
                                                        <input type="radio" name="color" id="orange" checked="">
                                                        <span class="color-box color-box--orange"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="violet">
                                                        <input type="radio" name="color" id="violet">
                                                        <span class="color-box color-box--violet"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="pink">
                                                        <input type="radio" name="color" id="pink">
                                                        <span class="color-box color-box--pink"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                                <div class="shop-filter-block">
                                    <h4 class="shop-filter-block__title">Brand</h4>
                                    <div class="shop-filter-block__content">
                                        <ul class="shop-filter-block__brand">
                                            <li><button>HasThemes</button></li>
                                            <li><button class="active">HasTech</button></li>
                                            <li><button>Bootxperts</button></li>
                                            <li><button>Codecarnival</button></li>
                                        </ul>
                                    </div>
                                </div>
                                <section id="search_container" class="bg-secondary text-light mt-2">
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
                                            <div class="col-12"><button type="button" id="filter_btn" class="btn btn-md btn-success d-none w-100">SEARCH</button></div>
                                        </div>
                            </div>
                            </form>
                            </section>
                            <div class="shop-filter-block">
                                <button class="apply-btn">APPLY</button>
                                <button class="cancel-btn">CANCEL</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- ...:::End Search & Filter Section:::... -->

        <!-- ...:::Start Hero Slider Section:::... -->
        <div class="hero-section section-gap-top-25">
            <div class="container">
                <!-- Start Hero Area -->
                <div class="hero-area hero-area--style-1 hero-slider-active">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="hero-singel-slide ">
                                    <div class="hero-bg">
                                        <img width="605" height="312" class="img-full" src="assets2/images/hero/bg/bg-2.jpg" alt="image">
                                    </div>
                                    <!-- <div class="inner-wrapper">
                                        <div class="content">
                                            <p class="title-tag">Summer</p>
                                            <h1 class="title">Fashion</h1>
                                            <h2 class="sub-title">SALE</h2>
                                            <h3 class="sub-title">UP to <span>70% </span> off</h3>
                                        </div>
                                        <div class="product-img">
                                            <img width="149" height="127" class="img-fluid" class="img-fluid" src="assets2/images/hero/product/product-4.jpg" alt="image">
                                            <div class="shape shape-1"><img width="83" height="83" class="img-fluid" src="assets2/images/hero/shape/shape-dotted.png" alt="image"></div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="hero-singel-slide">
                                    <div class="hero-bg">
                                        <img width="388" height="160" class="img-full" src="assets2/images/hero/bg/bg-1.jpg" alt="image">
                                    </div>
                                    <!-- <div class="inner-wrapper">
                                        <div class="content">
                                            <p class="title-tag">Summer</p>
                                            <h1 class="title">Fashion</h1>
                                            <h2 class="sub-title">SALE</h2>
                                            <h3 class="sub-title">UP to <span>70% </span> off</h3>
                                        </div>
                                        <div class="product-img">
                                            <img width="127" height="98" class="img-fluid" class="img-fluid" src="assets2/images/hero/product/product-2.png" alt="image">
                                            <div class="shape shape-1"><img width="83" height="83" class="img-fluid" src="assets2/images/hero/shape/shape-dotted.png" alt="image"></div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="hero-singel-slide">
                                    <div class="hero-bg">
                                        <img width="388" height="160" class="img-full" src="assets2/images/hero/bg/bg-2.jpg" alt="image">
                                    </div>
                                    <!-- <div class="inner-wrapper">
                                        <div class="content">
                                            <p class="title-tag">Summer</p>
                                            <h1 class="title">Fashion</h1>
                                            <h2 class="sub-title">SALE</h2>
                                            <h3 class="sub-title">UP to <span>70% </span> off</h3>
                                        </div>
                                        <div class="product-img">
                                            <img width="126" height="98" class="img-fluid" class="img-fluid" src="assets2/images/hero/product/product-3.png" alt="image">
                                            <div class="shape shape-1"><img width="83" height="83" class="img-fluid" src="assets2/images/hero/shape/shape-dotted.png" alt="image"></div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End Hero Area -->
            </div>
        </div>
        <!-- ...:::End Hero Slider Section:::... -->

        <!-- ...:::Start Catagories - 1 Section:::... -->
        <div class="catagories-section section-gap-top-50">
            <div class="container">
                <div class="catagories-area">
                    <div class="catagories-nav-1">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <a href="./moter-bikes" class="btn"><span class="icon"><i class="fa fa-motorcycle" aria-hidden="true"></i></span> Motercycles</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./cars" class="btn"><span class="icon"><i class="fa fa-car" aria-hidden="true"></i></span> Cars</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./suv" class="btn"><i class="fa fa-taxi" aria-hidden="true"></i></span>SUV's</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="./heavy-vehicles" class="btn"><span class="icon"><i class="fa fa-bus" aria-hidden="true"></i></span>Heavy vehicles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title-content">
                    <h2 class="title">Popular</h2>
                    <a href="shop.html" class="view-all">View All</a>
                </div>
                <div class="catagories-wrapper">
                    <div class="catagories-wrapper-content">
                        <table class="table" id="ad_tbl">
                            <thead></thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>

                <!-- ...:::Start User Event Section:::... -->
                <div class="user-event-section">
                    <!-- Start User Event Area -->
                    <div class="col pos-relative">

                        <div class="user-event-area">
                            <div class="user-event user-event--left">
                                <a area-label="event link icon" href="./home" class="event-btn-link"><i class="icon icon-carce-home" title="home"></i></a>
                                <a area-label="wishlist icon" href="./favourite-items" class="event-btn-link"><i class="icon icon-carce-heart" title="favourite items"></i></a>
                            </div>
                            <div class="user-event user-event--center" title="create post">
                                <a area-label="cart icon" href="./create-post" class="event-btn-link"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="user-event user-event--right">
                                <a area-label="order icon" href="./notifications" class="event-btn-link"><i class="fa fa-bell" aria-hidden="true" title="notifications"></i></a>
                                <a area-label="chat icon" href="./messages" class="event-btn-link"><i class="icon icon-carce-bubbles2" title="messages"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Event Area -->
                </div>
                <!-- ...:::End User Event Section:::... -->
            </div>
        </div>
        <footer class="footer-section"></footer>
    </main>

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor -->
    <script src="assets2/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets2/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets2/js/vendor/jquery-migrate-3.3.2.min.js"></script>

    <!--Plugins JS-->
    <script src="assets2/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets2/js/plugins/ion.rangeSlider.min.js"></script>

    <!-- Minify Version -->
    <!-- <script src="assets2/js/vendor.min.js"></script>
    <script src="assets2/js/plugins.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="assets2/js/main.js"></script>
    <!-- <script src="assets2/js/main.min.js"></script> -->
    <!--Data Tables -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!--commen functions-->
    <script src="{{ asset('/js/commenFunctions/functions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/commenFunctions/file_upload.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/registrationJs/registration.js') }}" type="text/javascript"></script>

    <!--Component Js -->
    <script src="{{asset('/js/combo.js')}}"></script>

    <!-- Vendor JS Files -->
    <script src=" {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page script -->
    <script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('/dist/js/demo.js') }}"></script>

    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('/plugins/datatables/jquery.dataTables.js')}}"></script>
    <!-- Select2 -->
    <script src="{{ asset('/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- validation -->
    <script src="{{ asset('/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- uPlot -->
    <script src="{{ asset('/plugins/uplot/uPlot.iife.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/b13ab8c5a9.js" crossorigin="anonymous"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <script>
        $(document).ready(function() {

            (adsbygoogle = window.adsbygoogle || []).push({});

            // $('#cmb_make').select2();
            // $('#cmb_city').select2();

            loadMakes(function() {
                $('#filter_btn').removeClass('d-none');
            });
            //$('.yearpicker').yearpicker();
            let url = 'https://vehiauto.com/public/api/get_posts';
            loadTable(null, url, 'GET');
        });

        $('#filter_btn').click(function() {
            let data = $('#search_form').serializeArray();
            let url = 'https://vehiauto.com/public/api/filtered_posts';

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
            let html = '';

            let ad_tbl = $('#ad_tbl').DataTable({
                destroy: true,
                processing: true,
                serverSide: false,
                responsive: true,
                searching: false,
                dom: 'Bfrtip',
                "pageLength": 50,
                language: {
                    searchPlaceholder: "search",
                    zeroRecords: " "
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
                "columns": [{
                    "data": "",
                    "render": function(data, type, row, meta) {
                       let html = '';
                    html += '<div class="row">';
                    html += '<div class="card card-light w-100" style="border-width: 2px; border-color: black">';
                    html += '<a href="/public/api/get_post_profile/id/' + row.id + '">';
                    html += '<div class="card-body">';
                    html += '<div class="row">';
                    html += '<div class="col-4 col-md-3">';
                    html += '<div class="portfolio-wrap text-center">';
                    html += "<img src='/public/" + row.main_image + "' style='height: 8em; width: 100%;' alt='main_img'/>";
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="col-7 col-md-8">';
                    html += '<b style="font-size: 18px" class="text-success">' + row.post_title + '</b><br>';
                    html += '<span style="font-size: 14px" class="text-dark"><b>Price: </b>' + row.price + ' </span><br>';
                    html += '<span style="font-size: 14px" class="text-dark"><b>Location: </b>' + row.location + ' </span><br>';
                    html += '<span style="font-size: 14px" class="text-dark"><b>Condition: </b>' + row.condition + ' </span><br>';
                    html += '<span style="font-size: 14px" class="text-dark"><b>Millage: </b>' + row.millage + ' </span>';
                    html += '</div>';
                    html += '<div class="col-1">';
                    html += '<div class="ribbon-wrapper ribbon-sm">';
                    html += '<div class="ribbon bg-success text-sm">';
                    let status = (row.status == 0) ? 'NEW' : 'SOLD';
                    html += status;
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</a>';
                    html += '</div>';
                    html += '</div>';
                    return html;
                    }
                }, ],
            });

            //data table error handling
            $.fn.dataTable.ext.errMode = 'none';
            $('#ad_tbl').on('error.dt', function(e, settings, techNote, message) {
                console.log('DataTables error: ', message);
            });


        }



        function filterFunction(that, event) {
            let container, input, filter, li, input_val;
            container = $(that).closest(".searchable");
            input_val = container.find("input").val().toUpperCase();
            if (["ArrowDown", "ArrowUp", "Enter"].indexOf(event.key) != -1) {
                keyControl(event, container);
            } else {
                li = container.find("ul li");
                li.each(function(i, obj) {
                    if ($(this).text().toUpperCase().indexOf(input_val) > -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                container.find("ul li").removeClass("selected");
                setTimeout(function() {
                    container.find("ul li:visible").first().addClass("selected");
                }, 100);
            }
        }

        function keyControl(e, container) {
            if (e.key == "ArrowDown") {
                if (container.find("ul li").hasClass("selected")) {
                    if (
                        container
                        .find("ul li:visible")
                        .index(container.find("ul li.selected")) +
                        1 <
                        container.find("ul li:visible").length
                    ) {
                        container
                            .find("ul li.selected")
                            .removeClass("selected")
                            .nextAll()
                            .not('[style*="display: none"]')
                            .first()
                            .addClass("selected");
                    }
                } else {
                    container.find("ul li:first-child").addClass("selected");
                }
            } else if (e.key == "ArrowUp") {
                if (
                    container.find("ul li:visible").index(container.find("ul li.selected")) >
                    0
                ) {
                    container
                        .find("ul li.selected")
                        .removeClass("selected")
                        .prevAll()
                        .not('[style*="display: none"]')
                        .first()
                        .addClass("selected");
                }
            } else if (e.key == "Enter") {
                container.find("input").val(container.find("ul li.selected").text()).blur();
                onSelect(container.find("ul li.selected").text());
            }
        }

        function onSelect(val) {}
        $(".searchable input").focus(function() {
            $(this).closest(".searchable").find("ul").show();
            $(this).closest(".searchable").find("ul li").show();
            $('.submit__btn').css({
                "display": "block"
            })
            $('.close__btn').css({
                "display": "block"
            })
            $('.search__btn').css({
                'display': "none"
            })
        });
        $(".searchable input").blur(function() {
            let that = this;
            setTimeout(function() {
                $(that).closest(".searchable").find("ul").hide();
                $('.search__btn').css({
                    'display': "block"
                })
                $('.submit__btn').css({
                    "display": "none"
                })
                $('.close__btn').css({
                    "display": "none"
                })
            }, 300);
        });
        $('.search__btn').on("click", function() {
            $(this).closest(".searchable").find("input").val($(this).text()).blur();
            onSelect($(this).text());
        });
        $(document).on("click", ".searchable ul li", function() {
            $(this).closest(".searchable").find("input").val($(this).text()).blur();
            onSelect($(this).text());
        });
        $(".searchable ul li").hover(function() {
            $(this).closest(".searchable").find("ul li.selected").removeClass("selected");
            $(this).addClass("selected");
        });
        $('.close__btn').on('click', function() {
            $('.searchable').find("input").val($(this).text()).blur()
            $(this).css({
                "display": "none"
            })
        })
        $('#mobile-menu-offcanvas').addClass('offcanvas-open');
    </script>

</body>

</html>