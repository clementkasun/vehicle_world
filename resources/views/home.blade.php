@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{asset('assets/img/home_images/home-one.jpg')}})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">WELCOME <span> VEHIAUTO</span></h2>
                        <p class="animate__animated animate__fadeInUp">vehiauto.com is marketplace for buy and sell vehicles online in sri lanka.</p>
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
<!-- <span class="mt-5 d-flex justify-content-center"><b>Visits: </b><img src="https://hitwebcounter.com/counter/counter.php?page=7985375&style=0006&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter" border="0" height="25px" width="100px" /></a></span> -->
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
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio bg-white">
    <div class="row">
        <div class="col-md-2">
            <div class="card-success">
                <div class="card-header">Google Adds</div>
                <div class="card-body w-100" style="height: 100%;">

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table" id="ad_tbl"></table>
        </div>
        <div class="col-md-2">
            <div class="card-success w-100" style="height: 100%;">
                <div class="card-header">Google Adds</div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Section -->
@endsection
@section('pageScripts')
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
        ajaxRequest(method, url, data, function(resp) {
            let html = '';
            $.each(resp, function(index, row) {
                html += '<div class="row">';
                html += '<div class="card card-success bg-dark w-100">';
                html += '<a href="/public/api/get_post_profile/id/' + row.id + '">';
                html += '<div class="card-body bg-dark">';
                html += '<div class="row">';
                html += '<div class="col-5 col-md-3">';
                html += '<div class="portfolio-wrap text-center">';
                html += "<img src='/public/" + row.main_image + "' style='height: 6em; width: 100%;' alt='main_img'/>";
                html += '</div>';
                html += '</div>';
                html += '<div class="col-7 col-md-9 text-dark">';
                html += '<b style="font-size: 18px" class="text-success">' + row.post_title + '</b><br>';
                html += '<span class="text-light"><b>Price: </b>' + row.price + ' </span><br>';
                html += '<span class="text-light"><b>Location: </b>' + row.location + ' </span><br>';
                html += '<span class="text-light"><b>Condition: </b>' + row.condition + ' </span>';
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
            });
            $('#ad_tbl tbody').html(html);
            $('#ad_tbl').DataTable({
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
                }
            });
        });


        // let ad_tbl = $('#ad_tbl').DataTable({
        //     destroy: true,
        //     processing: true,
        //     serverSide: false,
        //     responsive: true,
        //     searching: false,
        //     dom: 'Bfrtip',
        //     "pageLength": 50,
        //     language: {
        //         searchPlaceholder: "search",
        //         zeroRecords: " "
        //     },
        //     "ajax": {
        //         "url": url,
        //         "data": data,
        //         "type": method,
        //         "dataSrc": "",
        //         "headers": {
        //             //            "X-XSRF-TOKEN": token,
        //             'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr("content"),
        //             'Accept': "application/json"
        //         },
        //     },
        //     "columns": [{
        //         "data": "",
        //         "render": function(data, type, row, meta) {
        //             let html = '';
        //             html += '<div class="row">';
        //             html += '<div class="card card-success bg-dark w-100">';
        //             html += '<a href="/public/api/get_post_profile/id/' + row.id + '">';
        //             html += '<div class="card-body bg-dark">';
        //             html += '<div class="row">';
        //             html += '<div class="col-5 col-md-3">';
        //             html += '<div class="portfolio-wrap text-center">';
        //             html += "<img src='/public/" + row.main_image + "' style='height: 6em; width: 100%;' alt='main_img'/>";
        //             html += '</div>';
        //             html += '</div>';
        //             html += '<div class="col-7 col-md-9 text-dark">';
        //             html += '<b style="font-size: 18px" class="text-success">' + row.post_title + '</b><br>';
        //             html += '<span class="text-light"><b>Price: </b>' + row.price + ' </span><br>';
        //             html += '<span class="text-light"><b>Location: </b>' + row.location + ' </span><br>';
        //             html += '<span class="text-light"><b>Condition: </b>' + row.condition + ' </span>';
        //             html += '<div class="ribbon-wrapper ribbon-sm">';
        //             html += '<div class="ribbon bg-success text-sm">';
        //             let status = (row.status == 0) ? 'NEW' : 'SOLD';
        //             html += status;
        //             html += '</div>';
        //             html += '</div>';
        //             html += '</div>';
        //             html += '</div>';
        //             html += '</div>';
        //             html += '</a>';
        //             html += '</div>';
        //             html += '</div>';
        //             return html;
        //         }
        //     }, ],
        // });

        // //data table error handling
        // $.fn.dataTable.ext.errMode = 'none';
        // $('#ad_tbl').on('error.dt', function(e, settings, techNote, message) {
        //     console.log('DataTables error: ', message);
        // });
    }
</script>
@endsection