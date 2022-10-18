@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('pageStyles')
<style>
  /*****************globals*************/
  body {
    font-family: 'open sans';
    overflow-x: hidden;
  }

  img {
    max-width: 100%;
  }

  .preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px;
    }
  }

  .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
  }

  .preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px;
  }

  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%;
  }

  .preview-thumbnail.nav-tabs li img {
    max-width: 100%;
    display: block;
  }

  .preview-thumbnail.nav-tabs li a {
    padding: 0;
    margin: 0;
  }

  .preview-thumbnail.nav-tabs li:last-of-type {
    margin-right: 0;
  }

  .tab-content {
    overflow: hidden;
  }

  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
    animation-name: opacity;
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
  }

  /* .card {
    margin-top: 50px;
    background: #eee;
    padding: 3em;
    line-height: 1.5em;
  } */

  @media screen and (min-width: 997px) {
    .wrapper {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }
  }

  .details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  .colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
  }

  .product-title,
  .price,
  .sizes,
  .colors {
    text-transform: UPPERCASE;
    font-weight: bold;
  }

  .checked,
  .price span {
    color: #ff9f1a;
  }

  .product-title,
  .rating,
  .product-description,
  .price,
  .vote,
  .sizes {
    margin-bottom: 15px;
  }

  .product-title {
    margin-top: 0;
  }

  .size {
    margin-right: 10px;
  }

  .size:first-of-type {
    margin-left: 40px;
  }

  .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px;
  }

  .color:first-of-type {
    margin-left: 20px;
  }

  .add-to-cart,
  .like {
    background: #ff9f1a;
    padding: 1.2em 1.5em;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
    -webkit-transition: background .3s ease;
    transition: background .3s ease;
  }

  .add-to-cart:hover,
  .like:hover {
    background: #b36800;
    color: #fff;
  }

  .not-available {
    text-align: center;
    line-height: 2em;
  }

  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff;
  }

  .orange {
    background: #ff9f1a;
  }

  .green {
    background: #85ad00;
  }

  .blue {
    background: #0076ad;
  }

  .tooltip-inner {
    padding: 1.3em;
  }

  @-webkit-keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
      transform: scale(3);
    }

    100% {
      opacity: 1;
      -webkit-transform: scale(1);
      transform: scale(1);
    }
  }

  @keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
      transform: scale(3);
    }

    100% {
      opacity: 1;
      -webkit-transform: scale(1);
      transform: scale(1);
    }
  }

  /*# sourceMappingURL=style.css.map */

</style>
@endsection
@section('content')
<!-- Profile Image -->

<div class="card card-success mt-2" style="padding: 0">
  <div class="card-header">
    <h1>Add Profile</h1>
  </div>
  <div class="card-body">
    <div class="wrapper row">
      <div class="preview col-md-6">

        <div class="preview-pic tab-content">
          <div class="tab-pane active" id="pic-1"><img src='{{asset("".$post_data->main_image)}}' /></div>
          <div class="tab-pane" id="pic-2"><img src='{{asset("".$post_data->image_1)}}' /></div>
          <div class="tab-pane" id="pic-3"><img src='{{asset("".$post_data->image_2)}}' /></div>
          <div class="tab-pane" id="pic-4"><img src='{{asset("".$post_data->image_3)}}' /></div>
          <div class="tab-pane" id="pic-5"><img src='{{asset("".$post_data->image_4)}}' /></div>
          <div class="tab-pane" id="pic-6"><img src='{{asset("".$post_data->image_5)}}' /></div>
        </div>
        <ul class="preview-thumbnail nav nav-tabs">
          <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src='{{asset("".$post_data->main_image)}}' /></a></li>
          <li><a data-target="#pic-2" data-toggle="tab"><img src='{{asset("".$post_data->image_1)}}' /></a></li>
          <li><a data-target="#pic-3" data-toggle="tab"><img src='{{asset("".$post_data->image_2)}}' /></a></li>
          <li><a data-target="#pic-4" data-toggle="tab"><img src='{{asset("".$post_data->image_3)}}' /></a></li>
          <li><a data-target="#pic-5" data-toggle="tab"><img src='{{asset("".$post_data->image_4)}}' /></a></li>
        </ul>

      </div>
      <div class="details col-md-6">
        <span class="product-title text-lg">
          {{ $post_data->post_title}}
        </span>
        <div class="rating">
          <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <span class="review-no">41 reviews</span>
        </div>
        <div class="product-info p-2">
          <div class="row">
            <div class="col-6">
              @if($post_data->price != null)
              <label for="price">Price: </label>
              <span>{{$post_data->price}}</span>
              @endif
            </div>
            <div class="col-6">
              @if($post_data->model != null)
              <label for="model">Model: </label>
              <span>{{$post_data->model}}</span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              @if($post_data->condition != null)
              <label for="condition">Condition : </label>
              <span>{{$post_data->condition}}</span>
              @endif
            </div>
            <div class="col-6">
              @if($post_data->engine_capacity != null)
              <label for="engine_capacity">Engine Capacity: </label>
              <span>{{$post_data->engine_capacity}}</span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              @if($post_data->manufactured_year != null)
              <label for="manufactured_year">Manufactured Year: </label>
              <span>{{$post_data->manufactured_year}}</span>
              @endif
            </div>
            <div class="col-6">
              @if($post_data->millage != null)
              <label for="millage">Millage: </label>
              <span>{{$post_data->millage}}</span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              @if($post_data->fuel_type != null)
              <label for="fuel_type">Fuel Type: </label>
              <span class="ml-2">{{$post_data->fuel_type}}</span>
              @endif
            </div>
            <div class="col-6">
              @if($post_data->transmission != null)
              <label for="transmission">Transmission: </label>
              <span class="ml-2">{{$post_data->transmission}}</span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              @if($post_data->manufactured_year != null)
              <label for="manufactured_year">Manufactured Year: </label>
              <span>{{$post_data->manufactured_year}}</span>
              @endif
            </div>
            <div class="col-6">
              @if($post_data->millage != null)
              <label for="millage">Millage: </label>
              <span>{{$post_data->millage}}</span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="isAc">AC: </label><br>
              @if($post_data->isAc != null)
              <p class="bg-warning p-1 m-1" style="border-radius: 5px;"></p>
              @endif
              @if($post_data->isAc == null)
              <p class="bg-success p-1 m-1" style="border-radius: 5px;"></p>
              @endif
            </div>
            <div class="col-6">
              <label for="ongoing_lease">Ongoing Lease: </label>
              @if($post_data->on_going_lease != null)
              <p class="bg-warning p-1 m-1" style="border-radius: 5px;"></p>
              @endif
              @if($post_data->on_going_lease == null)
              <p class="bg-success p-1 m-1" style="border-radius: 5px;"></p>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="isPowerSteer">Power Steering: </label>
              @if($post_data->isPowerSteer != null)
              <p class="bg-warning p-1 m-1" style="border-radius: 5px;"></p>
              @endif
              @if($post_data->isPowerSteer == null)
              <p class="bg-success p-1 m-1" style="border-radius: 5px;"></p>
              @endif
            </div>
            <div class="col-6">
              <label for="isPowerWindow">Power Window: </label><br>
              @if($post_data->isPowerWindow != null)
              <p class="bg-warning p-1 m-1" style="border-radius: 5px;"></p>
              @endif
              @if($post_data->isPowerWindow == null)
              <p class="bg-success p-1 m-1" style="border-radius: 5px;"></p>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="soldStatus">Sold Status: </label><br>
              @if($post_data->status != 0)
              <p class="bg-success" style="border-radius: 5px; padding-left: 5px; padding-right: 5px">Sold</p>
              @endif
              @if($post_data->status == 0)
              <p class="bg-primary" style="border-radius: 5px; padding-left: 5px; padding-right: 5px">Not Yet</p>
              @endif
            </div>
            <div class="col-6"></div>
          </div>
          <div class="row mt-2">
            <p class="product-description col-12 w-100 p-1 m-1">{{$post_data->additional_info}}</p>
          </div>
        </div>
        <!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
        <h5 class="sizes">sizes:
          <span class="size" data-toggle="tooltip" title="small">s</span>
          <span class="size" data-toggle="tooltip" title="medium">m</span>
          <span class="size" data-toggle="tooltip" title="large">l</span>
          <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
        </h5>
        <h5 class="colors">colors:
          <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
          <span class="color green"></span>
          <span class="color blue"></span>
        </h5> -->
        <div class="action">
          <!-- <button class="add-to-cart btn btn-default" type="button">add to cart</button> -->
          <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
        </div>
      </div>

      <div class="user-ratings p-4">
        

      </div>


      <div class="card">
        <div class="card-body">Do not make any payments to advertiser before inspecting the vehicle. <b>vehiauto.com</b> shall not be held responsible for any transaction or agreement reached between the advertiser and you.</div>
      </div>
      <div class="card">
        <div class="card-body">වාහනය පරික්ෂා කර බැලීමෙන් තොරව වාහන අයිතිකරුවන්ට මුදල් ගෙවීමෙන් වලකින්න. එසේ කරනු ලබන කිසිදු ගෙවීමක් සදහා <b>vehiauto.com</b> වෙබ් අඩවිය වගකීමක් නොදරන බව දන්වා සිටිමු.</div>
      </div>
      <div class="card">
        <div class="card-body">சொத்தை அல்லது உடமையை ஆய்வு செய்வதற்கு முன்பு விளம்பரதாரருக்கு பணம் செலுத்த வேண்டாம். <b>vehiauto.com</b> வளையதளமானது உங்களுடைய எந்த ஒரு வாகனக்கட்டணத்துக்கும்பொறுப்பு கூற மாட்டாது.</div>
      </div>
    </div>

  </div>
  <div class="card-footer">
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
                <div class="card card-light mt-2 w-100" style="border-width: 2px; border-color: black;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <img src="{{asset(''.$post->main_image)}}" style="height: 8em;" class="w-100" alt='main_img' />
                      </div>
                      <div class="col-7">
                        <a href="/public/api/get_post_profile/id/{{$post->id}}"><b style="font-size: 14px" class="text-success">{{$post->post_title}}</b></br></a>
                        <span style="font-size: 12px" class="text-dark"><b>Price: </b> {{$post->price}} </span>
                        <span style="font-size: 12px" class="text-dark"><b>Location: </b> {{$post->location}} </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="card-footer">
            @if(isset($request))
            <div class="text-center mt-1">{{ $related_posts->appends($request)->links('pagination::bootstrap-4') }}</div>
            @endif

            @if(!isset($request))
            <div class="text-center mt-1">{{ $related_posts->links('pagination::bootstrap-4') }}</div>
            @endif

            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('pageScripts')
<script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
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