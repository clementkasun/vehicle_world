@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
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
    width: 14%;
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


  .product-title,
  .price,
  .sizes {
    text-transform: UPPERCASE;
    font-weight: bold;
  }

  .product-title,
  .rating,
  .product-description,
  .price {
    margin-bottom: 15px;
  }

  .product-title {
    margin-top: 0;
  }

  .size {
    margin-right: 10px;
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

  .container-fluid {
    max-width: 1500px;
  }

  /*# sourceMappingURL=style.css.map */

  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial;
    margin: 0 auto;
    /* Center website */
    max-width: 800px;
    /* Max width */
    padding: 20px;
  }

  .heading {
    font-size: 25px;
    margin-right: 25px;
  }

  .checked {
    color: orange;
  }

  /* Three column layout */
  .side {
    float: left;
    width: 15%;
    margin-top: 10px;
  }

  .middle {
    margin-top: 10px;
    float: left;
    width: 70%;
  }

  /* Place text to the right */
  .right {
    text-align: right;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* The bar container */
  .bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
  }

  /* Individual bars */
  .bar-5 {
    width: 60%;
    height: 18px;
    background-color: #04AA6D;
  }

  .bar-4 {
    width: 30%;
    height: 18px;
    background-color: #2196F3;
  }

  .bar-3 {
    width: 10%;
    height: 18px;
    background-color: #00bcd4;
  }

  .bar-2 {
    width: 4%;
    height: 18px;
    background-color: #ff9800;
  }

  .bar-1 {
    width: 15%;
    height: 18px;
    background-color: #f44336;
  }

  /* Responsive layout - make the columns stack on top of each other instead of next to each other */
  @media (max-width: 400px) {

    .side,
    .middle {
      width: 100%;
    }

    .right {
      display: none;
    }
  }

  .status-fields {
    border-radius: 5px;
    padding-left: 5px;
    padding-right: 5px;
    font-weight: bold;
  }

  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  /* html {
    font-size: 10px;
  } */

  /* body {
    width: 100%;
    min-height: 100vh;
    display: grid;
    place-content: center;
    font-family: Poppins, sans-serif;
    background: rgb(25, 25, 25);
  } */

  .container-ratings {
    display: grid;
    place-content: center;
    padding: 2rem;
    text-align: center;
    min-height: 200px;
    border-radius: 12px;
    position: relative;
    overflow: hidden;
  }

  .container-ratings::after {
    z-index: -1;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: url(https://images.unsplash.com/photo-1553356084-58ef4a67b2a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80) no-repeat center center / cover;
    filter: blur(50px) brightness(30%);
  }

  .info {
    margin-bottom: 1rem;
  }

  .emoji {
    font-size: 2rem;
    height: 20px;
    margin-bottom: 1rem;
  }

  .status {
    font-size: 2rem;
    color: honeydew;
  }

  .stars {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row-reverse;
  }

  .star {
    height: 40px;
    width: 40px;
    cursor: pointer;
  }

  .star svg {
    fill: none;
    width: 100%;
    height: 100%;
    stroke: none;
    fill: gray;
  }

  .selected svg,
  .selected~.star svg {
    fill: #ffc107;
  }

  .star:hover svg,
  .star:hover~.star svg {
    fill: gold;
  }

  div#social-links {
    margin: 0 auto;
    max-width: 500px;
  }

  div#social-links ul li {
    display: inline-block;
  }

  div#social-links ul li a {
    padding: 10px;
    border: 1px solid #ccc;
    margin: 1px;
    font-size: 24px;
    color: #222;
    background-color: #ccc;
  }
</style>

@endsection
@section('content')
<?php

use App\Models\UserFavourite;

if (auth()->check() == true) {
  $user_id = auth()->user()->id;
  $is_favoured = UserFavourite::where('user_id', $user_id)->where('post_id', $post_data->id)->exists();
} else {
  $is_favoured = false;
  $user_id = null;
}
?>
<input type="text" id="post_id" name="post_id" data-post-id="{{ $post_data->id }}" hidden>
<input type="text" id="user_id" name="user_id" data-user-id="{{ $user_id }}" hidden>
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
          <li><a data-target="#pic-6" data-toggle="tab"><img src='{{asset("".$post_data->image_5)}}' /></a></li>
        </ul>

      </div>
      <div class="details col-md-6" style="height: auto">
        <div class="row">
          <div class="col-6">
            <span class="product-title text-lg">
              {{ $post_data->post_title}}
            </span>
            <div class="rating">
              <span class="avg_star"></span>
              <span class="review-no"><i class="fa-regular fa-message"></i>&nbsp;<span class="review_count"></span></span>
              <span class="user-view-count"> <i class="fa fa-eye"></i>{{ $post_data->view_count }}</span>
              &nbsp;
              <span>
                <button class="btn btn-lg" type="button" id="btn-favourite"><span class="fa fa-heart"></span></button>
                <span class="pl-2" id="post_likes">{{$post_likes}}</span>
              </span>
            </div>
          </div>
          <div class="col-6">
            <span class="text-right">
              {!! $shareComponent !!}
            </span>
          </div>
        </div>
        <div class="product-info p-3 card card-light">
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
              <label for="manufactured_year"> Year: </label>
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
              <label for="fuel_type">Fuel: </label>
              <span class="ml-2">{{$post_data->fuel_type}}</span>
              @endif
            </div>
            <div class="col-6">
              @if($post_data->transmission != null)
              <label for="transmission">Gear: </label>
              <span class="ml-2">{{$post_data->transmission}}</span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              @if($post_data->millage != null)
              <label for="millage">Millage: </label>
              <span>{{$post_data->millage}}</span>
              @endif
            </div>
            <div class="col-6">

            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="isAc">AC: </label><br>
              @if($post_data->isAc != null)
              <p class="bg-success p-1 m-1 status-fields">Available</p>
              @endif
              @if($post_data->isAc == null)
              <p class="bg-warning p-1 m-1 status-fields">N/A</p>
              @endif
            </div>
            <div class="col-6">
              <label for="ongoing_lease">Ongoing Lease: </label>
              @if($post_data->on_going_lease != null)
              <p class="bg-success p-1 m-1 status-fields">Available</p>
              @endif
              @if($post_data->on_going_lease == null)
              <p class="bg-warning p-1 m-1 status-fields">N/A</p>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="isPowerSteer">Power Steering: </label>
              @if($post_data->isPowerSteer != null)
              <p class="bg-success p-1 m-1 status-fields">Available</p>
              @endif
              @if($post_data->isPowerSteer == null)
              <p class="bg-warning p-1 m-1 status-fields">N/A</p>
              @endif
            </div>
            <div class="col-6">
              <label for="isPowerWindow">Power Window: </label><br>
              @if($post_data->isPowerWindow != null)
              <p class="bg-success p-1 m-1 status-fields">Available</p>
              @endif
              @if($post_data->isPowerWindow == null)
              <p class="bg-warning p-1 m-1 status-fields">N/A</p>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="soldStatus">Sold Status: </label><br>
              @if($post_data->status != 0)
              <p class="bg-warning p-1 m-1 status-fields">Sold</p>
              @endif
              @if($post_data->status == 0)
              <p class="bg-success p-1 m-1 status-fields">Not Yet</p>
              @endif
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">
            <div class="card card-light" style="height: auto">
              <div class="card-body">
                <h4>Description:</h4>
                <p class="product-description col-12 mt-2 ml-0 pl-0" style="text-transform: lowercase; font-size: 16px; font-family: Bahnschrift Condensed"> {{$post_data->additional_info}} </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <div class="card card-light">
          <div class="card-body" style="text-transform: none; font-weight: bold; font-size:18px;">Do not make any payments to advertiser before inspecting the vehicle. <b>vehiauto.com</b> shall not be held responsible for any transaction or agreement reached between the advertiser and you.</div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <div class="card card-light">
          <div class="card-body" style="font-weight: bold; font-size:20px;">වාහනය පරික්ෂා කර බැලීමෙන් තොරව වාහන අයිතිකරුවන්ට මුදල් ගෙවීමෙන් වලකින්න. එසේ කරනු ලබන කිසිදු ගෙවීමක් සදහා <b style="font-size:16px;">vehiauto.com</b> වෙබ් අඩවිය වගකීමක් නොදරන බව දන්වා සිටිමු.</div>
        </div>

      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <div class="card card-light">
          <div class="card-body" style="font-weight: bold; font-size:16px;">சொத்தை அல்லது உடமையை ஆய்வு செய்வதற்கு முன்பு விளம்பரதாரருக்கு பணம் செலுத்த வேண்டாம். <b>vehiauto.com</b> வளையதளமானது உங்களுடைய எந்த ஒரு வாகனக்கட்டணத்துக்கும்பொறுப்பு கூற மாட்டாது.</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <span class="heading">User Ratings</span><br>
        <span id="avg_stars"></span>
        <p> Average <span class="avg_star"></span> based on <span class="review_count"></span> reviews.</p>
        <hr style="border:3px solid #f1f1f1">

        <div class="row p-5">
          <div class="side">
            <div>5 star</div>
          </div>
          <div class="middle">
            <div class="progress">
              <div class="progress--striped bg-success" id="five_star_progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="side right">
            <div id="five_star_amount"></div>
          </div>
          <div class="side">
            <div>4 star</div>
          </div>
          <div class="middle">
            <div class="progress">
              <div class="progress-bar-striped bg-info" id="four_star_progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="side right">
            <div id="four_star_amount"></div>
          </div>
          <div class="side">
            <div>3 star</div>
          </div>
          <div class="middle">
            <div class="progress">
              <div class="progress-bar-striped bg-primary" id="three_star_progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="side right">
            <div id="three_star_amount"></div>
          </div>
          <div class="side">
            <div>2 star</div>
          </div>
          <div class="middle">
            <div class="progress">
              <div class="progress-bar-striped bg-warning" id="two_star_progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="side right">
            <div id="two_star_amount"></div>
          </div>
          <div class="side">
            <div>1 star</div>
          </div>
          <div class="middle">
            <div class="progress">
              <div class="progress-bar-striped bg-danger" id="one_star_progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="side right">
            <div id="one_star_amount"></div>
          </div>
        </div>
      </div>
    </div>

    @if($user_id != null)
    <div id="user_review" class="card card-light mt-2">
      <div class="card-header">
        <b>Post Review</b>
      </div>
      <div class="card-body">
        <div class="row mt-2 pl-2">
          <div class="container-ratings col-12 col-md-8" style="min-height: auto; display: grid;place-content: center;font-family: Poppins, sans-serif;background: rgb(25, 25, 25);">
            <div class="info">
              <div class="emoji"></div>
              <div class="status"></div>
            </div>
            <div class="stars">
              <div class="star" data-rate="5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </div>
              <div class="star" data-rate="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </div>
              <div class="star" data-rate="3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </div>
              <div class="star" data-rate="2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </div>
              <div class="star" data-rate="1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-8">
            <label>Comment:</label>
            <textarea id="user_review_input" class="form-control" style="height: 100px;" placeholder="Type your review for this post"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-">
            <button id="save_review" name="save_review" class="btn bg-primary pl-2 pr-2 pt-1 pb-1 mt-2 ml-3"><b>Review</b></button>
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="row">
      <div class="col-12">
        <div id="review_warn" class="card card-light">
          <div class="card-header">

          </div>
          <div class="card-body">
            <h2>Please! log in to the system for review this post. <span><a class="text-primary" href="{{ asset('/login') }}">login</a></span></h2>
          </div>
        </div>
      </div>
    </div>
    @endif
    <div class="row mt-2">
      <div class="col-12">
        <div class="card card-light">
          <div class="card-header">
            <h3 style="text-transform: none"><b>Reviews</b></h3>
          </div>
          <div class="card-body" id="reviews">

          </div>
        </div>
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
              @if(isset($related_posts))
              @foreach($related_posts as $related_post)
              <?php
              $post_id = $related_post['id'];
              $post_title = ($related_post['post_title'] != null) ? $related_post['post_title'] : 'N/A';
              $price = ($related_post['price'] != null) ? $related_post['price'] : 'N/A';
              $main_image = $related_post['main_image'];
              $location = ($related_post->location != null) ? $related_post->location : 'N/A';
              ($related_post['post_type'] == 'VEHI') ? $type = 'Vehicle Type: ' . $related_post['vehilce_type'] : $type = 'Part used in: ' . $related_post['part_used-in'];
              ?>
              <div class="col-12 col-md-2">
                <a href="{{ asset('/get_post_profile/id/'.$post_id) }}">
                  <div class="card card-white" style="height: 400px">
                    <img src="{{ asset($related_post->main_image) }}" alt="trending post images" style="width:100%">
                    <div class="card-body bg-success">
                      <h2 class="container-fluid"><b>{{ $post_title }}</b></h2>
                      <h4 class="container-fluid"> <b>Price: </b> රැ . {{ $price }}</h4>
                      <p class="container-fluid"><b>Location: </b> {{ $location }}</p>
                      @if($related_post['post_type'] == 'VEHI')
                      <p class="container-fluid"><b>Millage: </b> {{ ($related_post['vehicle'] != null) ? $related_post['vehicle']['millage'] : 'N/A' }} </p>
                      @endif
                    </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-4"><i class="fa fa-eye">&nbsp; {{ $related_post['view_count'] }}</i></div>
                        <div class="col-4"><i class="fa-regular fa-message">&nbsp; {{ $related_post['review_count'] }}</i></div>
                        <div class="col-4"><i class="fa-sharp fa-solid fa-heart">&nbsp; {{ $related_post['favoured_count'] }}</i></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <div class="card-footer">

            @if(isset($request))
            <div class="text-center mt-1">{{ $related_posts->appends($request)->links('pagination::bootstrap-4') }}</div>
            @else
            <div class="text-center mt-1">{{ $related_posts->links('pagination::bootstrap-4') }}</div>
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

  var post_id = $('#post_id').data('post-id');
  var default_favour_status = '{{ $is_favoured}}';
  if (default_favour_status == true) {
    $('#btn-favourite span').addClass('text-danger');
  } else {
    $('#btn-favourite span').removeClass('text-danger');
  }

  loadReviews(post_id);
  getPostReviewAnalytics(post_id);

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

  $('#save_review').click(function() {

    if (currentRatingIndex > 0 && $('#user_review_input').val() != '') {
      let data = {
        'user_id': $('#user_id').data('user-id'),
        'post_id': post_id,
        'user_review': $('#user_review_input').val(),
        'rating_index': currentRatingIndex
      };

      let url = "{{ asset('/api/create-post-review') }}";
      let Method = "post";

      ajaxRequest(Method, url, data, function(result) {
        if (result.status == 1) {
          Swal.fire(
            'Post Review',
            'Successfully Review saved!',
            'success'
          );
          loadReviews(post_id);
          getPostReviewAnalytics(post_id);

          resetRating();
          $('input:checkbox').removeAttr('checked');
          $('#user_review_input').val("");
        } else {
          Swal.fire({
            icon: 'error',
            title: 'System Error',
            text: result.msg
          })
        }
        //        $('#degree_registration').trigger("reset");
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack ===
          "function") {
          callBack(result);
        }
      });

    } else {
      Swal.fire({
        icon: 'warning',
        title: 'Missing Inputs',
        text: 'You must select one or more stars and type description field to save as a review'
      })
    }
  });

  function loadReviews(post_id) {
    let stars;
    let url = "{{ asset('/api/get-post-reviews/id/') }}/" + post_id;
    let Method = "get";
    ajaxRequest(Method, url, null, function(result) {
      let html = '';
      $.each(result, (index, item) => {
        stars = generateStars(item.user_star);
        html += '<div class="card card-light">';
        html += '<div class="card-header"><div class="row"><div class="col-12 col-md-10" style="text-transform: none"><b>' + item.user.name + '</b></div><div class="col-12 col-md-2 p-0 m-0">' + stars + '</div></div></div>';
        html += '<div class="card-body">' + item.review_desc + '</div>';
        html += '</div>';
      });
      $('#reviews').html(html);
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

  // function calculateStars() {
  //   var count = 0;
  //   const checkboxes = ["chk_one", "chk_two", "chk_three", "chk_four", "chk_five"];

  //   $.each(checkboxes, (index, item) => {
  //     if ($('#' + item).prop('checked') == true) {
  //       count += 1;
  //     }
  //   });

  //   return count;
  // }

  function getPostReviewAnalytics(post_id) {
    let url = "{{ asset('/api/get-post-review-analytics/id/') }}/" + post_id;
    let Method = "get";
    ajaxRequest(Method, url, null, function(result) {
      $('#five_star_amount').html('<b>' + result.five_stars + '</b>');
      $('#four_star_amount').html('<b>' + result.four_stars + '</b>');
      $('#three_star_amount').html('<b>' + result.three_stars + '</b>');
      $('#two_star_amount').html('<b>' + result.two_stars + '</b>');
      $('#one_star_amount').html('<b>' + result.one_stars + '</b>');

      $('#five_star_progress').css("width", result.five_stars_perc + '%');
      $('#five_star_progress').html('<b>' + result.five_stars_perc + '%' + '</b>');

      $('#four_star_progress').css("width", result.four_stars_perc + '%');
      $('#four_star_progress').html('<b>' + result.four_stars_perc + '%' + '</b>');

      $('#three_star_progress').css("width", result.three_stars_perc + '%');
      $('#three_star_progress').html('<b>' + result.three_stars_perc + '%' + '</b>');

      $('#two_star_progress').css("width", result.two_stars_perc + '%');
      $('#two_star_progress').html('<b>' + result.two_stars_perc + '%' + '</b>');

      $('#one_star_progress').css("width", result.one_stars_perc + '%');
      $('#one_star_progress').html('<b>' + result.one_stars_perc + '%' + '</b>');

      $('#avg_star').html(result.avg_star);
      $('.review_count').html(result.review_count);

      let avg_stars = generateStars(result.avg_star);
      $('.avg_star').html(avg_stars);
    });
  }

  $('#btn-favourite').click(function() {
    change_favourite();
  });

  function change_favourite() {
    let url = "{{ asset('/api/change-user-favourite') }}";
    let Method = "post";
    let data = {
      'user_id': $('#user_id').data('user-id'),
      'post_id': post_id,
    };

    if ($('#user_id').data('user-id') != '') {
      ajaxRequest(Method, url, data, function(result) {
        if (result.status == 1) {
          if (result.cheacked) {
            $('#btn-favourite span').addClass('text-danger');
          } else {
            $('#btn-favourite span').removeClass('text-danger');
          }
          $('#post_likes').html(result.post_likes);
          Swal.fire({
            icon: 'success',
            title: result.msg,
            text: result.msg
          })
        } else {
          Swal.fire({
            icon: 'warning',
            title: result.msg,
            text: result.msg
          })
        }
      });

    } else {
      Swal.fire({
        icon: 'warning',
        title: 'You are not logged in',
        text: "Please log in to the system"
      })
    }
  }
</script>
@endsection