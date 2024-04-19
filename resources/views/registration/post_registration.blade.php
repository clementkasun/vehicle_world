@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('pageStyles')
<style>
    .has-error {
        color: red;
    }

    #save_post {
        background: black;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    #update_post {
        background: black;
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>
@endsection

@section('content')
<div class="card card-primary mt-2 mb-5 pb-5">
    <div class="card-header bg-success text-light">
        <h3 class="card-title text-center">Advertiesment Registration form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form id='post_registration'>
            <div class="row">
                <div id="post_section" class="col-12 col-md-6" data-post-id="{{(isset($post_data)) ? $post_data['id'] : null;}}">
                    <div class="card card-light">
                        <div class="card-body">
                            <input type="text" id="user_id" name="user_id" value="{{ Auth::id() }}" hidden>
                            <div class="row">
                                <div class="form-group col-12 col-md-6 col-lg-3">
                                    <label for="post_type">Post Type</label>
                                    <div>
                                        <select class="form-control" id="post_type" name="post_type" data-post-type="{{ (isset($post_data)) ? $post_data['post_type'] : null; }}" required>
                                            <option value="">Not Selected</option>
                                            <option value="VEHI">Vehicle</option>
                                            <option value="SPARE">Spare Part</option>
                                            <option value="WAN">Wanted</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="vehicle_type_group" class="form-group col-12 col-md-6 col-lg-3">
                                    <label for="vehicle_type">Vehicle type</label>
                                    <div>
                                        <select id="vehicle_type" name="vehicle_type" class="form-control" data-vehi-type="{{ (isset($post_data)) ? $post_data['vehicle_type'] : null; }}" required>
                                            <option value="">Select</option>
                                            <option value="Car">Car</option>
                                            <option value="Van">Van</option>
                                            <option value="SUV">SUV</option>
                                            <option value="Crew Cab">Crew Cab</option>
                                            <option value="Wagon">Wagon</option>
                                            <option value="Pickup">Pickup</option>
                                            <option value="Bus">Bus</option>
                                            <option value="Lorry">Lorry</option>
                                            <option value="Three Wheel">Three Wheel</option>
                                            <option value="Tractor">Tractor</option>
                                            <option value="Heavy-Duty">Heavy-Duty</option>
                                            <option value="Other">Other</option>
                                            <option value="Motorcycle">Motorcycle</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="start_type_group" class="form-group col-12 col-md-6 col-lg-3">
                                    <label for="start_type">Start type</label>
                                    <div>
                                        <select id="start_type" name="start_type" class="form-control" data-start-type="{{ (isset($post_data)) ? $post_data['start_type'] : null; }}" required>
                                            <option value="">Select the start type</option>
                                            <option value="Manual">Manual</option>
                                            <option value="Self">Self start</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-3">
                                    <label for="condition">Condition</label>
                                    <div>
                                        <select class="form-control" id="condition" name="condition" data-condition="{{ (isset($post_data)) ? $post_data['condition'] : null; }}" required>
                                            <option value="">Not Selected</option>
                                            <option value="Used">Used</option>
                                            <option value="New">Brand New</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="post_title">Post Title</label>
                                <div>
                                    <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter the post title" maxlength="45" data-title="{{ (isset($post_data)) ? $post_data['post_title'] : null; }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="make_id">Make</label>
                                <div>
                                    <select class="form-control makes" id="make_id" name="make_id" data-make-id="{{ (isset($post_data)) ? $post_data['make_id'] : null; }}" required>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <div>
                                    <input type="number" class="form-control" name="price" id="price" placeholder='Enter the price' max="199999999" data-price="{{ (isset($post_data)) ? $post_data['price'] : null; }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="location">City</label>
                                <div>
                                    <select id="location" name="cmb_city" class="form-control" data-location="{{ (isset($post_data)) ? $post_data['location'] : null; }}" required>
                                        <option value=""> Any City </option>
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
                            <div class="form-group">
                                <label for="address">Address</label>
                                <div>
                                    <textarea id="address" name="address" class="form-control" placeholder="Enter the address" maxlength="255" data-address="{{ (isset($post_data)) ? $post_data['address'] : null; }}" autocomplete="on" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="additional_info">Description</label>
                                <div>
                                    <textarea id="additional_info" name="additional_info" class="form-control" maxlength="255" placeholder="Enter the description" data-add-info="{{ (isset($post_data)) ? $post_data['additional_info'] : null; }}" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card card-light vehicle-sec">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="model"> Model *</label>
                                <div><input type="text" class="form-control" name="model" id="model" placeholder="Enter the model name" data-model="{{ (isset($post_data)) ? $post_data['model'] : null; }}" required></div>
                            </div>
                            <div class="form-group self-start d-none">
                                <label for="start_type">Start Type</label>
                                <div>
                                    <select class="form-control" name="start_type" id="start_type" data-start-type="{{ (isset($post_data)) ? $post_data['condition'] : null; }}" required>
                                        <option value="">Select the Start type</option>
                                        <option value="Manual">Self Start</option>
                                        <option value="Automatic">Kikstart</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="manufactured_year">Manufactured Year</label>
                                <div><input type="number" class="form-control" name="manufactured_year" id="manufactured_year" placeholder="Please enter the manufactured year" data-man-year="{{ (isset($post_data)) ? $post_data['manufactured_year'] : null; }}" required></div>
                            </div>
                            <div class="form-group">
                                <label for="transmission">Transmission</label>
                                <div>
                                    <select class="form-control" name="transmission" id="transmission" data-transmission="{{ (isset($post_data)) ? $post_data['transmission'] : null; }}" required>
                                        <option value="">Select the Start type</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Automatic">Automatic</option>
                                    </select>
                                </div>
                            </div>
                            <!-- radio -->
                            <div class="form-group">
                                <label for="fuel_type">Fuel Type</label>
                                <div>
                                    <select name="fuel_type" id="fuel_type" class="form-control" data-fuel-type="{{ (isset($post_data)) ? $post_data['fuel_type'] : null; }}" required>
                                        <option value="">Select Fuel Type</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Petrol">Petrol</option>
                                        <option value="Electric">Electric</option>
                                        <option value="Hybrid">Hybrid</option>
                                        <option value="Gas">Gas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="engine_capacity">Engine Capacity</label>
                                <div><input type="number" class="form-control" name="engine_capacity" id="engine_capacity" data-en-cap="{{ (isset($post_data)) ? $post_data['engine_capacity'] : null; }}" required></div>
                            </div>
                            <div class="form-group">
                                <label for="millage">Millage</label>
                                <div>
                                    <input type="number" class="form-control" name="millage" id="millage" data-millage="{{ (isset($post_data)) ? $post_data['millage'] : null; }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-light mt-1 vehicle-sec">
                        <div id="four_wheel_features" class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-3">
                                    <label for="isAc">AC</label>
                                    <div>
                                        <input type="checkbox" name="isAc" id="isAc" data-ac="{{ (isset($post_data['isAc'])) ? $post_data['isAc'] : null;}}">
                                    </div>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="isPowerSteer">Power Steer</label><br>
                                    <div>
                                        <input type="checkbox" name="isPowerSteer" id="isPowerSteer" data-power-steer="{{ (isset($post_data)) ? $post_data['isPowerSteer'] : null;}}">
                                    </div>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="isPowerMirroring">Power Mirroring</label>
                                    <div>
                                        <input type="checkbox" name="isPowerMirroring" id="isPowerMirroring" data-power-mirror="{{ (isset($post_data)) ? $post_data['isPowerMirroring'] : null;}}">
                                    </div>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="isPowerWindow">Power Window</label>
                                    <div>
                                        <input type="checkbox" name="isPowerWindow" id="isPowerWindow" data-power-window="{{  (isset($post_data)) ? $post_data['isPowerWindow'] : null;}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-3">
                                    <label for="on_going_lease">On Going Lease</label>
                                    <div>
                                        <input type="checkbox" name="on_going_lease" id="on_going_lease" data-ongoing-lease="{{  (isset($post_data)) ? $post_data['on_going_lease'] : null;}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="spare_part_sec" class="d-none col-12 col-md-6">
                    <div class="card card-light">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="part_category">Part Category</label>
                                <div>
                                    <select id="part_category" name="part_category" class="form-control" data-part-cat="{{ (isset($post_data)) ? $post_data['part_category'] : null; }}" required>
                                        <option value="">Select</option>
                                        <option value="Air Conditioning &amp; Heating">Air Conditioning &amp; Heating
                                        </option>
                                        <option value="Air Intake &amp; Fuel Delivery">Air Intake &amp; Fuel Delivery
                                        </option>
                                        <option value="Axles &amp; Axle Parts">Axles &amp; Axle Parts</option>
                                        <option value="Battery">Battery</option>
                                        <option value="Brakes">Brakes</option>
                                        <option value="Car Audio Systems">Car Audio Systems</option>
                                        <option value="Car DVR">Car DVR</option>
                                        <option value="Car Tuning &amp; Styling">Car Tuning &amp; Styling</option>
                                        <option value="Carburetor">Carburetor</option>
                                        <option value="Chassis">Chassis</option>
                                        <option value="Electrical Components">Electrical Components</option>
                                        <option value="Emission Systems">Emission Systems</option>
                                        <option value="Engine Cooling">Engine Cooling</option>
                                        <option value="Engines &amp; Engine Parts">Engines &amp; Engine Parts</option>
                                        <option value="Exhausts &amp; Exhaust Parts">Exhausts &amp; Exhaust Parts
                                        </option>
                                        <option value="External &amp; Body Parts">External &amp; Body Parts</option>
                                        <option value="External Lights &amp; Indicators">External Lights &amp;
                                            Indicators</option>
                                        <option value="Footrests, Pedals &amp; Pegs">Footrests, Pedals &amp; Pegs
                                        </option>
                                        <option value="Freezer">Freezer</option>
                                        <option value="Gauges, Dials &amp; Instruments">Gauges, Dials &amp; Instruments
                                        </option>
                                        <option value="Generator">Generator</option>
                                        <option value="GPS &amp; In-Car Technology">GPS &amp; In-Car Technology</option>
                                        <option value="Handlebars, Grips &amp; Levers">Handlebars, Grips &amp; Levers
                                        </option>
                                        <option value="Helmets, Clothing &amp; Protection">Helmets, Clothing &amp;
                                            Protection</option>
                                        <option value="Interior Parts &amp; Furnishings">Interior Parts &amp;
                                            Furnishings</option>
                                        <option value="Lighting &amp; Indicators">Lighting &amp; Indicators</option>
                                        <option value="Mirrors">Mirrors</option>
                                        <option value="Oils, Lubricants &amp; Fluids">Oils, Lubricants &amp; Fluids
                                        </option>
                                        <option value="Other">Other</option>
                                        <option value="Reverse Camera">Reverse Camera</option>
                                        <option value="Seating">Seating</option>
                                        <option value="Service Kits">Service Kits</option>
                                        <option value="Silencer">Silencer</option>
                                        <option value="Starter Motors">Starter Motors</option>
                                        <option value="Stickers">Stickers</option>
                                        <option value="Suspension, Steering &amp; Handling">Suspension, Steering &amp;
                                            Handling</option>
                                        <option value="Transmission &amp; Drivetrain">Transmission &amp; Drivetrain
                                        </option>
                                        <option value="Turbos &amp; Superchargers">Turbos &amp; Superchargers</option>
                                        <option value="Wheels, Tyres &amp; Rims">Wheels, Tyres &amp; Rims</option>
                                        <option value="Windscreen Wipers &amp; Washers">Windscreen Wipers &amp; Washers
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--</div>-->
            </div>
            <div class="row">
                <div class="card card-light col-12">
                    <div class="card-body row">
                        <div  class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="main_image">Main Image</label>
                                <div>
                                    <input type="file" class="form-control" id="main_image" name="main_image" accept="image/*" {{ (!isset($post_data)) ? 'required' : null; }}>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="image_one">Image 1</label>
                                <div>
                                    <input type="file" class="form-control" id="image_one" name="image_one" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                         <div class="form-group">
                                <label for="image_two">Image 2</label>
                                <div>
                                    <input type="file" class="form-control" id="image_two" name="image_two" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="image_three">Image 3</label>
                                <div>
                                    <input type="file" class="form-control" id="image_three" name="image_three" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="image_four">Image 4</label>
                                <div>
                                    <input type="file" class="form-control" id="image_four" name="image_four" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                             <div class="form-group">
                                <label for="image_five">Image 5</label>
                                <div>
                                    <input type="file" class="form-control" id="image_five" name="image_five" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer row">
        <button id="save_post" type="button" class="btn btn-primary col-12 col-md-1 d-none">Save Post</button>
        <button id="update_post" type="button" class="btn btn-primary col-12 col-md-1 d-none">Update Post</button>
    </div>
    <!-- /.card -->
</div>
<!-- /.row -->
@endsection
@section('pageScripts')
<script>
    $(document).ready(function() {
        if ($('#post_section').data('post-id') != '') {
            $('#save_post').addClass('d-none');
            $('#update_post').removeClass('d-none');
            load_update_form();
        } else {
            $('#save_post').removeClass('d-none')
            $('#update_post').addClass('d-none')
            loadMakesCombo();
            $('#make_id').select2();
            $('#location').select2();
        }
        
        $('#post_type').change(function() {
            if ($(this).val() == 'VEHI' || $(this).val() == 'WAN') {
                $('#spare_part_sec').addClass('d-none');
                $('.vehicle-sec').removeClass('d-none');
                $('#start_type_group').removeClass('d-none');
            }
            if ($(this).val() == 'SPARE') {
                $('#spare_part_sec').removeClass('d-none');
                $('.vehicle-sec').addClass('d-none');
                $('#start_type_group').addClass('d-none');
            }
            if ($(this).val() == '') {
                $('.vehicle-sec').addClass('d-none');
                $('#spare_part_sec').addClass('d-none');
            }
        });
        
        $('#vehicle_type').change(function() {
            ($(this).val() != 'Motorcycle') ? $('#four_wheel_features').removeClass('d-none'): $('#four_wheel_features').addClass('d-none');
        });
        
    }); //onready
    
    $("#save_post").click(function() {
        $(this).prop('disabled', true);
        let object1 = getPostFormData();
        let is_valid = jQuery("#post_registration").valid();
        // let object = getPostFormData();
        
        let img_main_status = validate_image_size('main image', object1.main_image);
        let img_one_status = validate_image_size('image one', object1.image_one);
        let img_two_status = validate_image_size('image two', object1.image_two);
        let img_three_status = validate_image_size('image three', object1.image_three);
        let img_four_status = validate_image_size('image four', object1.image_four);
        let img_five_status = validate_image_size('image five', object1.image_five);
        
        if (img_main_status == false || img_one_status == false || img_two_status == false || img_three_status == false || img_four_status == false || img_five_status == false) {
            return false;
        }
        
        if (is_valid) {

            let url = "{{ asset('/api/save_post') }}";
            ulploadFileWithData(url, object1, function(result) {
                if (result.status == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Post Registration',
                        text: 'Successfully post registered!'
                    })
                    $("#save_post").prop('disabled', false);
                    window.location.href = "{{ asset('/user_profile') }}";
                } else {
                    $("#save_post").prop('disabled', false);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.msg
                    })
                }
                if (typeof callBack !== 'undefined' && callBack != null && typeof callBack ===
                "function") {
                    callBack(result);
                }
            });
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Post Registration',
                text: 'Required fields are missing!'
            });
            
            $("#save_post").prop('disabled', false);
        }
    });
    
    $("#update_post").click(function(object) {
        $(this).prop('disabled', true);
        let object2 = getPostFormData();
        let is_valid = jQuery("#post_registration").valid();
        // let object = getPostFormData();
        
        let img_main_status = ($('#post_section').data('post-id') != '') ? validate_image_size('main image', object2.main_image) : true;
        let img_one_status = ($('#post_section').data('post-id') != '') ? validate_image_size('image one', object2.image_one) : true;
        let img_two_status = ($('#post_section').data('post-id') != '') ? validate_image_size('image two', object2.image_two) : true;
        let img_three_status = ($('#post_section').data('post-id') != '') ? validate_image_size('image three', object2.image_three) : true;
        let img_four_status = ($('#post_section').data('post-id') != '') ? validate_image_size('image four', object2.image_four) : true;
        let img_five_status = ($('#post_section').data('post-id') != '') ? validate_image_size('image five', object2.image_five) : true;
        
        if (img_main_status == false || img_one_status == false || img_two_status == false || img_three_status == false || img_four_status == false || img_five_status == false) {
            return false;
        }
        
        if (is_valid) {
            
            let url = "{{ asset('/api/update_post/id/') }}/" + $('#post_section').data('post-id');
            ulploadFileWithData(url, object2, function(result) {
                if (result.status == 1) {
                    Swal.fire(
                        'Post Registration',
                        'Successfully updated!',
                        'success'
                    );
                    $("#update_post").prop('disabled', false);

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.msg
                    });
                    $("#update_post").prop('disabled', false);

                }
                if (typeof callBack !== 'undefined' && callBack != null && typeof callBack ===
                    "function") {
                    callBack(result);
                }
            });
        } else {
            Swal.fire(
                'Post Registration',
                'Required fields are missing or fields formats are invalid, please cheack again!',
                'warning'
            );
            $("#update_post").prop('disabled', false);
        }
    });

    var post_registration;
    post_registration = $("#post_registration").validate({
        errorClass: "invalid",
        highlight: function(element) {
            $(element).parent().addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).parent().removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'validation-error-message help-block form-helper bold',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    jQuery.validator.setDefaults({
        errorElement: "span",
        ignore: ":hidden:not(select.chosen-select)",
        errorPlacement: function(error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");
            if (element.prop("type") === "checkbox") {
                //                error.insertAfter(element.parent("label"));
                error.appendTo(element.parents("validate-parent"));
            } else if (element.is("select.chosen-select")) {
                error.insertAfter(element.siblings(".chosen-container"));
            } else if (element.prop("type") === "radio") {
                error.appendTo(element.parents("div.validate-parent"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass) {
            jQuery(element).parents(".validate-parent").addClass("has-error").removeClass("has-success");
        },
        unhighlight: function(element, errorClass, validClass) {
            jQuery(element).parents(".validate-parent").removeClass("has-error");
        }
    });
</script>
@endsection