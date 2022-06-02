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
                    <h1 class="mt-5">Services</h1>
                    <p class="mt-5">
                    <h4>We provide you services needs for srilankan vehicle marketplace. <br> You can experience the service of us with engaging this portifolio.</h4>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-light" style="height: 25em">
                <div class="card-body text-center">
                    <h5 class="mt-5 text-success">You can find vehicles</h5>
                    <p class="mt-5">
                    <h6>We gave you access to vehicle data of registered under our site</h6>
                    <i class="fa-solid fa-car fa-5x mt-2"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-light" style="height: 25em">
                <div class="card-body text-center">
                    <h5 class="mt-5 text-success">You can sell and promote vehicles to the market</h5>
                    <p class="mt-5">
                    <h6>Provide an oppertunity to sell and market vehicles at free cost on our site.</h6>
                    <i class="fa-solid fa-money-bill-1 fa-5x mt-2"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-light" style="height: 25em">
                <div class="card-body text-center">
                    <h5 class="mt-5 text-success">Can analyze the market</h5>
                    <p class="mt-5">
                    <h6>You can analyze market to buy or sell vehicle with our site using a various features introduced and other features yet to come on future.</h6>
                    <i class="fa-solid fa-person-chalkboard fa-5x mt-2"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection