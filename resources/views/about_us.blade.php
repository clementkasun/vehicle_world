@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('pageStyles')
<style>
    body {
        font-family: 'Roboto';
        font-size: 16px;
    }

    .aboutus-section {
        padding: 90px 0;
    }

    .aboutus-title {
        font-size: 30px;
        letter-spacing: 0;
        line-height: 32px;
        margin: 0 0 39px;
        padding: 0 0 11px;
        position: relative;
        text-transform: uppercase;
        color: #000;
    }

    .aboutus-title::after {
        background: #fdb801 none repeat scroll 0 0;
        bottom: 0;
        content: "";
        height: 2px;
        left: 0;
        position: absolute;
        width: 54px;
    }

    .aboutus-text {
        color: #606060;
        font-size: 13px;
        line-height: 22px;
        margin: 0 0 35px;
    }

    a:hover,
    a:active {
        color: #ffb901;
        text-decoration: none;
        outline: 0;
    }

    .aboutus-more {
        border: 1px solid #fdb801;
        border-radius: 25px;
        color: #fdb801;
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0;
        padding: 7px 20px;
        text-transform: uppercase;
    }

    .feature .feature-box .iconset {
        background: #fff none repeat scroll 0 0;
        float: left;
        position: relative;
        width: 18%;
    }

    .feature .feature-box .iconset::after {
        background: #fdb801 none repeat scroll 0 0;
        content: "";
        height: 150%;
        left: 43%;
        position: absolute;
        top: 100%;
        width: 1px;
    }

    .feature .feature-box .feature-content h4 {
        color: #0f0f0f;
        font-size: 18px;
        letter-spacing: 0;
        line-height: 22px;
        margin: 0 0 5px;
    }


    .feature .feature-box .feature-content {
        float: left;
        padding-left: 28px;
        width: 78%;
    }

    .feature .feature-box .feature-content h4 {
        color: #0f0f0f;
        font-size: 18px;
        letter-spacing: 0;
        line-height: 22px;
        margin: 0 0 5px;
    }

    .feature .feature-box .feature-content p {
        color: #606060;
        font-size: 13px;
        line-height: 22px;
    }

    .icon {
        color: #f4b841;
        padding: 0px;
        font-size: 40px;
        border: 1px solid #fdb801;
        border-radius: 100px;
        color: #fdb801;
        font-size: 28px;
        height: 70px;
        line-height: 70px;
        text-align: center;
        width: 70px;
    }

    footer {
        position: fixed;
        padding: 10px 10px 0px 10px;
        bottom: 0;
        width: 100%;
        height: 20em;
        background: grey;
    }
</style>

@endsection
@section('content')
<section class="aboutus-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="aboutus">
                    <h2 class="aboutus-title">About Us</h2>
                    <p class="aboutus-text">We are vehicle sale platform which facilitates the ability to post without any charges.</p>
                    <p class="aboutus-text">Join with us to find and buy profitable assets</p>
                    <a class="aboutus-more" href="/more">read more</a>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="feature">
                    <div class="feature-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon"></span>
                            </div>
                            <div class="feature-content">
                                <h4>Find Vehicles</h4>
                                <p>Find vehicles with our system with growing advertiesments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon"></span>
                            </div>
                            <div class="feature-content">
                                <h4>Analyze vehicle market</h4>
                                <p>Analyze vehicle market and gain your suitable vehicle.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon"></span>
                            </div>
                            <div class="feature-content">
                                <h4>Great support</h4>
                                <p>We support you anytime when you face any issue within our system.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



</html>