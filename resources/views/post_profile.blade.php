@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')

@section('content')
<!-- Profile Image -->
<div class="card card-success" style="padding: 0">
    <div class="card-header">
        <h4><b>{{ $post_data->post_title}}</b></h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-7">
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
            <div class="col-12 col-md-5">
                <div class="card card-success pb-4 w-100">
                    <div class="card-header">
                        <b>Seller Contact Details</b>
                    </div>
                    <div class="card-body">
                        @if($post_data->phone_number != null)
                        <div class="row">
                            <div class="col-md-4"><b>Tel No:</b></div>
                            <div class="col-md-8">{{$post_data->phone_number}}</div>
                        </div>
                        @endif
                        @if($post_data->email != null)
                        <div class="row">
                            <div class="col-md-4"><b>Email:</b></div>
                            <div class="col-md-8">{{$post_data->email}}</div>
                        </div>
                        @endif
                        @if($post_data->seller_location != null)
                        <div class="row">
                            <div class="col-md-4"><b>Address:</b></div>
                            <div class="col-md-8">{{$post_data->seller_location}}</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-success pb-4 w-100">
                    <div class="card-header">
                        <b>Vehicle Details</b>
                    </div>
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
                                <span>{{$post_data->location}}</span>
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
                                <label class="bg-success" style="border-radius: 5px; padding-left: 5px; padding-right: 5px">Sold</label><br>
                                @endif
                                @if($post_data->status == 0)
                                <label class="bg-primary" style="border-radius: 5px; padding-left: 5px; padding-right: 5px">Not Yet</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="bg-white">
  <div class="pt-6">
    <nav aria-label="Breadcrumb">
      <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <li>
          <div class="flex items-center">
            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Men</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>

        <li>
          <div class="flex items-center">
            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Clothing</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>

        <li class="text-sm">
          <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Basic Tee 6-Pack</a>
        </li>
      </ol>
    </nav>

    <!-- Image gallery -->
    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
      <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden rounded-lg lg:block">
        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
      </div>
      <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
        <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
        </div>
        <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
        </div>
      </div>
      <div class="aspect-w-4 aspect-h-5 sm:overflow-hidden sm:rounded-lg lg:aspect-w-3 lg:aspect-h-4">
        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
      </div>
    </div>

    <!-- Product info -->
    <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Basic Tee 6-Pack</h1>
      </div>

      <!-- Options -->
      <div class="mt-4 lg:row-span-3 lg:mt-0">
        <h2 class="sr-only">Product information</h2>
        <p class="text-3xl tracking-tight text-gray-900">$192</p>

        <!-- Reviews -->
        <div class="mt-6">
          <h3 class="sr-only">Reviews</h3>
          <div class="flex items-center">
            <div class="flex items-center">
              <!--
                Heroicon name: mini/star

                Active: "text-gray-900", Default: "text-gray-200"
              -->
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>

              <!-- Heroicon name: mini/star -->
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>

              <!-- Heroicon name: mini/star -->
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>

              <!-- Heroicon name: mini/star -->
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>

              <!-- Heroicon name: mini/star -->
              <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
            </div>
            <p class="sr-only">4 out of 5 stars</p>
            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
          </div>
        </div>

        <form class="mt-10">
          <!-- Colors -->
          <div>
            <h3 class="text-sm font-medium text-gray-900">Color</h3>

            <fieldset class="mt-4">
              <legend class="sr-only">Choose a color</legend>
              <div class="flex items-center space-x-3">
                <!--
                  Active and Checked: "ring ring-offset-1"
                  Not Active and Checked: "ring-2"
                -->
                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                  <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                  <span id="color-choice-0-label" class="sr-only"> White </span>
                  <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                </label>

                <!--
                  Active and Checked: "ring ring-offset-1"
                  Not Active and Checked: "ring-2"
                -->
                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                  <input type="radio" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                  <span id="color-choice-1-label" class="sr-only"> Gray </span>
                  <span aria-hidden="true" class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                </label>

                <!--
                  Active and Checked: "ring ring-offset-1"
                  Not Active and Checked: "ring-2"
                -->
                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">
                  <input type="radio" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                  <span id="color-choice-2-label" class="sr-only"> Black </span>
                  <span aria-hidden="true" class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                </label>
              </div>
            </fieldset>
          </div>

          <!-- Sizes -->
          <div class="mt-10">
            <div class="flex items-center justify-between">
              <h3 class="text-sm font-medium text-gray-900">Size</h3>
              <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
            </div>

            <fieldset class="mt-4">
              <legend class="sr-only">Choose a size</legend>
              <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-gray-50 text-gray-200 cursor-not-allowed">
                  <input type="radio" name="size-choice" value="XXS" disabled class="sr-only" aria-labelledby="size-choice-0-label">
                  <span id="size-choice-0-label">XXS</span>

                  <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                    <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                      <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                    </svg>
                  </span>
                </label>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                  <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                  <span id="size-choice-1-label">XS</span>

                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                  <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                  <span id="size-choice-2-label">S</span>

                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                  <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                  <span id="size-choice-3-label">M</span>

                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                  <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                  <span id="size-choice-4-label">L</span>

                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                  <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                  <span id="size-choice-5-label">XL</span>

                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                  <input type="radio" name="size-choice" value="2XL" class="sr-only" aria-labelledby="size-choice-6-label">
                  <span id="size-choice-6-label">2XL</span>

                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                  <input type="radio" name="size-choice" value="3XL" class="sr-only" aria-labelledby="size-choice-7-label">
                  <span id="size-choice-7-label">3XL</span>

                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>
              </div>
            </fieldset>
          </div>

          <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
        </form>
      </div>

      <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
        <!-- Description and details -->
        <div>
          <h3 class="sr-only">Description</h3>

          <div class="space-y-6">
            <p class="text-base text-gray-900">The Basic Tee 6-Pack allows you to fully express your vibrant personality with three grayscale options. Feeling adventurous? Put on a heather gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need to add an extra pop of color to your outfit? Our white tee has you covered.</p>
          </div>
        </div>

        <div class="mt-10">
          <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

          <div class="mt-4">
            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
              <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>

              <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>

              <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>

              <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
            </ul>
          </div>
        </div>

        <div class="mt-10">
          <h2 class="text-sm font-medium text-gray-900">Details</h2>

          <div class="mt-4 space-y-6">
            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
          </div>
        </div>
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
                            <div class='col-12 col-md-4'>
                                <div class="card card-light mt-2 w-100" style="border-width: 2px; border-color: black">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <img src="{{asset(''.$post->main_image)}}" style="height: 8em;" class="w-100" alt='main_img' />
                                            </div>
                                            <div class="col-7">
                                                <a href="/public/api/get_post_profile/id/{{$post->id}}"><b style="font-size: 14px" class="text-success">{{$post->post_title}}</b></br></a>
                                                <span style="font-size: 12px" class="text-dark"><b>Price: </b> {{$post->price}} </span>
                                                <span style="font-size: 12px" class="text-dark"><b>Location: </b> {{$post->location}} </span>
                                                <span style="font-size: 12px" class="text-dark"><b>Condition: </b> {{$post->condition}} </span>
                                                <span style="font-size: 12px" class="text-dark"><b>Millage: </b> {{$post->millage}} </span>
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
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
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