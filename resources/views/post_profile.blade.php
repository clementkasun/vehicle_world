@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')

@section('content')
<main id="main">
    <section class="content">
        <div class="container-fluid">
            <!-- Profile Image -->
            <div class="card card-success">
                <div class="card-header">
                    <h4><b>{{ $post_data->post_title}}</b></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-7">
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
                                                <img class="d-block w-100 img-responsive" src="{{asset("".$post_data->main_image)}}" style="height: 100%;" alt="First slide">
                                            </div>
                                            @endif
                                            @if($post_data->image_1 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive" src="{{asset("".$post_data->image_1)}}" style="height: 100%;" alt="Second slide">
                                            </div>
                                            @endif
                                            @if($post_data->image_2 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive" src="{{asset("".$post_data->image_2)}}" style="height: 100%;" alt="Third slide">
                                            </div>
                                            @endif
                                            @if($post_data->image_3 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive" src="{{asset("".$post_data->image_3)}}" style="height: 100%;" alt="Fourth slide">
                                            </div>
                                            @endif
                                            @if($post_data->image_4 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive" src="{{asset("".$post_data->image_4)}}" style="height: 100%;" alt="Fifth slide">
                                            </div>
                                            @endif
                                            @if($post_data->image_5 != null)
                                            <div class="carousel-item">
                                                <img class="d-block w-100 img-responsive" src="{{asset("".$post_data->image_5)}}" style="height: 100%;" alt="Sixth slide">
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
                        <div class="col-12 col-md-5">
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
                            <div class="card card-success">
                                <div class="card-header"><b>Advertiesment Area</b></div>
                                <div class="card-body" id="google_ad_area">
                                    <amp-auto-ads type="adsense" data-ad-client="ca-pub-2365603589658807">
                                    </amp-auto-ads>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="card card-success pb-4 w-100">
                                <div class="card-header">
                                    <b>Vehicle Details</b>
                                </div>
                                <div class="card-body">
                                    <div class="card">
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
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
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
                                                <div class="form-group col-md-3">
                                                    <label for="soldStatus">Sold Status: </label><br>
                                                    @if($post_data->status != 0)
                                                    <label class="bg-success" style="border-radius: 5px;">Sold</label><br>
                                                    @endif
                                                    @if($post_data->status == 0)
                                                    <label class="bg-primary" style="border-radius: 5px;">Not Yet</label><br>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="card">
                                        <div class="card-body">Do not make any payments to advertiser before inspecting the vehicle. wehicleworld.com shall not be held responsible for any transaction or agreement reached between the advertiser and you.</div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">වාහනය පරික්ෂා කර බැලීමෙන් තොරව වාහන අයිතිකරුවන්ට මුදල් ගෙවීමෙන් වලකින්න. එසේ කරනු ලබන කිසිදු ගෙවීමක් සදහා wehicleworld.com වෙබ් අඩවිය වගකීමක් නොදරන බව දන්වා සිටිමු.</div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">சொத்தை அல்லது உடமையை ஆய்வு செய்வதற்கு முன்பு விளம்பரதாரருக்கு பணம் செலுத்த வேண்டாம். wehicleworld.com வளையதளமானது உங்களுடைய எந்த ஒரு வாகனக்கட்டணத்துக்கும்பொறுப்பு கூற மாட்டாது.</div>
                                    </div>
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
                                        <div class='col-12 col-md-3'>
                                            <div class="card card-success mt-2" style="height: 10em;">
                                                <a href="/public/api/get_post_profile/id/{{$post->id}}">
                                                    <div class="card-body text-light bg-dark">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="portfolio-wrap text-center">
                                                                    <img src="{{asset(''.$post->main_image)}}" class='img-fluid cover m-2' style='height: 7em; width: 90%' alt='main_img' />
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
</main>
@endsection

@section('pageScripts')
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
@endsection