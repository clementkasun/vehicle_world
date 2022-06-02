@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('content')
<section class="aboutus-section">
    <div class="row">
        <div class="col-12">
            <div class="card card-dark" style="height: 30em">
                <div class="card-body text-center bg-dark">
                    <h1 class="mt-5">About us</h1>
                    <p class="mt-5">
                    <h4>We are aspiring team to connect the vehicle buyers more engaging with a vehicle market. <br> We support them to do their job done as they wish.</h4>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-light" style="height: 25em">
                <div class="card-body text-center">
                    <h5 class="mt-5 text-success">We support you</h5>
                    <p class="mt-5">
                    <h6>We care and support you for your vehicle needs</h6>
                    <i class="fa-solid fa-headset fa-5x mt-2 text-success"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-light" style="height: 25em">
                <div class="card-body text-center">
                    <h5 class="mt-5 text-success">We giving you access to latest technologies around the world</h5>
                    <p class="mt-5">
                    <h6>We are run on latest technology and standards</h6>
                    <i class="fa-solid fa-microchip fa-5x mt-2 text-warning"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-light" style="height: 25em">
                <div class="card-body text-center">
                    <h5 class="mt-5 text-success">We innovate things when it neccessary</h5>
                    <p class="mt-5">
                    <h6>We are innovative and young team who are working toward success</h6>
                    <i class="fa-solid fa-compass-drafting fa-5x mt-2 text-primary"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection