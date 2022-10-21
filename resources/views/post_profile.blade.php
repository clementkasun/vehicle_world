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
    padding: 0.5em 0.5em;
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

  .fa {
    font-size: 25px;
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
</style>

@endsection
@section('content')
<?php
if (auth()->check() == true) {
  $user_id = auth()->user()->id;
} else {
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
          <button class="like btn btn-default" type="button" id="btn-favourite"><span class="fa fa-heart"></span></button>
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

    <span class="heading">User Ratings</span><br>
    <span id="avg_stars"></span>
    <p> Average <span id="avg_star"></span> based on <span id="review_count"></span> reviews.</p>
    <hr style="border:3px solid #f1f1f1">

    <div class="row">
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
    @if($user_id != null)
    <div id="user_review" class="card card-light mt-2">
      <div class="card-header">
        Review this post
      </div>
      <div class="card-body">
        <div class="row mt-2 pl-2">
          <label class="pl-0 ml-2">Rate:</label>
          <div class="col-1">
            <input type="checkbox" name="chk_one" id="chk_one" />
          </div>
          <div class="col-1">
            <input type="checkbox" name="chk_two" id="chk_two" />
          </div>
          <div class="col-1">
            <input type="checkbox" name="chk_three" id="chk_three" />
          </div>
          <div class="col-1">
            <input type="checkbox" name="chk_four" id="chk_four" />
          </div>
          <div class="col-1">
            <input type="checkbox" name="chk_five" id="chk_five" />
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
            <button id="save_review" name="save_review" class="btn bg-primary pl-2 pr-2 pt-1 pb-1 mt-2">Save Review</button>
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="row">
      <div id="review_warn" class="card card-light">
        <div class="card-header">

        </div>
        <div class="card-body">
          <h2>Please! log in to the system for review this post. <span><a class="text-primary" href="{{ asset('/login') }}">login</a></span></h2>
        </div>
      </div>
    </div>
    @endif
    <div class="row mt-2">
      <div class="col-12">
        <div class="card card-light">
          <div class="card-header">
            <h3><b>Reviews</b></h3>
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

  var post_id = $('#post_id').data('post-id');

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
    let stars = calculateStars();

    if (stars > 0 && $('#user_review_input').val() != '') {
      let data = {
        'user_id': $('#user_id').data('user-id'),
        'post_id': post_id,
        'user_review': $('#user_review_input').val(),
        'user_star': stars
      };

      let url = "../../../public/api/create-post-review";
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
    let url = "../../../public/api/get-post-reviews/id/" + post_id;
    let Method = "get";
    ajaxRequest(Method, url, null, function(result) {
      let html = '';
      $.each(result, (index, item) => {
        stars = generateStars(item.user_star);
        html += '<div class="card card-light">';
        html += '<div class="card-header"><b>User : ' + item.user.name + ' ' + stars + '</b></div>';
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

  function calculateStars() {
    var count = 0;
    const checkboxes = ["chk_one", "chk_two", "chk_three", "chk_four", "chk_five"];

    $.each(checkboxes, (index, item) => {
      if ($('#' + item).prop('checked') == true) {
        count += 1;
      }
    });

    return count;
  }

  function getPostReviewAnalytics(post_id) {
    let url = "../../../public/api/get-post-review-analytics/id/" + post_id;
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
      $('#review_count').html(result.review_count);

      let avg_stars = generateStars(result.avg_star);
      $('#avg_stars').html(avg_stars);
    });
  }

  $('#btn-favourite').click(function() {
    save_favourite();
  });

  function save_favourite() {
    console.log($('#user_id').data('user-id'));
    let url = "../../../public/api/create-user-favourite";
    let Method = "post";
    let data = {
      'user_id': $('#user_id').data('user-id'),
      'post_id': post_id
    };

    if ($('#user_id').data('user-id') != '') {
      ajaxRequest(Method, url, data, function(result) {
        if (result.status == 1) {
          Swal.fire({
            icon: 'success',
            title: 'Successfully saved',
            text: 'You must select one or more stars and type description field to save as a review'
          })
        } else {
          Swal.fire({
            icon: 'warning',
            title: 'Failed the operation',
            text: "Couldn't save your favourite itemr"
          })
        }
      });

    } else {
      Swal.fire({
        icon: 'warning',
        title: 'Not loged in to system',
        text: "You must loged in to the system to add favourites"
      })
    }
  }
</script>
@endsection