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
    #save_customer{
        background: blue;
        margin: 5px;
        padding: 1px;
    }
    
</style>
@endsection

@section('content')
<!-- general form elements -->
<div class="card card-light">
    <div class="card-header text-center">
        <h2> <b>Customer Registration</b> </h2>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form id="cust_reg_frm" class="mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name*</label>
                            <div><input type="text" class="form-control" name="firstName" id="firstName" value="" placeholder="first name" required></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name*</label>
                            <div><input type="text" class="form-control" name="lastName" id="lastName" value="" placeholder="last name" required></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="user_name">User Name</label>
                            <div><input type="text" class="form-control" name="userName" id="userName" value="" minlength="10" maxlength="100" required readonly>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contactNo">Mobile No*</label>
                            <div><input type="text" class="form-control" name="contactNo" id="contactNo" value="" minlength="10" maxlength="10" placeholder="mobile number" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nic">NIC*</label>
                            <div><input type="text" class="form-control" name="nic" id="nic" value="" placeholder="national identity card number" required></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="file_input">Profile Picture: </label>
                            <input type="file" class="form-control" id="file_input" accept="image/*">
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="" placeholder="email address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="location">Location*</label>
                            <div><textarea cols="70" rows="2" class="form-control" name="location" id="location" value="" placeholder="location" required></textarea></div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-md-6">
                            <label for="password_origin">Password*</label>
                            <div><input type="password" class="form-control" name="password_origin" id="password_origin" value="" placeholder="password" required autocomplete="off"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password_confirm">Confirm Password*</label>
                            <div><input type="password" class="form-control" name="password_confirm" id="password_confirm" value="" placeholder="retype password" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <button id="save_customer" type="button" class=" btn btn-dark"><b>Register</b></button>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img class="mt-2" src="./dist/img/reg.png" width="75%" height="auto" />
                </div>
                <!-- /.card-body -->
        </form>
    </div>
</div>
<!-- /.card -->
@endsection

@section('pageScripts')
<script>
    var cust_reg_frm;

    cust_reg_frm = $("#cust_reg_frm").validate({
        errorClass: "invalid",
        rules: {
            tel: {
                valid_lk_phone: true,
            },
            email: {
                valide_email: true,
            },
            password_origin: {
                valide_code: true,
            },
            password_confirm: {
                valide_code: true,
            }
        },
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

    $('#firstName').change(function(){
        let user_name = $(this).val()+'_'+$('#lastName').val();
        $('#userName').val(generateRandomUserName(user_name));
    });

    $('#lastName').change(function(){
        let user_name = $('#firstName').val()+'_'+$(this).val();
        $('#userName').val(generateRandomUserName(user_name));
    });

    $("#save_customer").click(function() {
        $(this).prop('disabled', true);
        var is_valid = $("#cust_reg_frm").valid();
        if (is_valid) {
            var validation_data = {
                email: $('#email').val(),
                nic: $('#nic').val(),
            };
            let object = {
                firstName: $('#firstName').val(),
                lastName: $('#lastName').val(),
                userName: $('#userName').val(),
                contactNo: $('#contactNo').val(),
                address: $('#location').val(),
                email: $('#email').val(),
                nic: $('#nic').val(),
                city: $('#location').val(),
                roll: 2,
                password: $('#password_origin').val(),
                file: $('#file_input').prop('files')[0]
            };
            let url_email_nic = "./api/is_email_nic_exist";

            ajaxRequest("POST", url_email_nic, validation_data, function(resp) {
                if (resp == 1) {
                    $("#save_customer").prop('disabled', false);
                    $('#nic').addClass('has-error');
                    Swal.fire("Failed!", "NIC already exist!", "warning");
                } else if (resp == 2) {
                    $("#save_customer").prop('disabled', false);
                    $('#email').addClass('has-error');
                    Swal.fire("Failed!", "Email already exist!", "warning");
                } else {
                    $("#save_customer").prop('disabled', false);
                    $('#email').removeClass('has-error');
                    $('#nic').removeClass('has-error');
                    if ($('#password_origin').val() == $('#password_confirm').val()) {
                        save_cus_details(object, function() {
                            window.location = "./public/login_cust";
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Password confirmation',
                            text: 'Password confirmation is invalid',
                        });
                    }
                }
            });
        } else {
            $("#save_customer").prop('disabled', false);
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

    jQuery.validator.addMethod("valide_code", function(value, element) {
        return this.optional(element) || /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,9}$/.test(value);
    }, "Please enter a valid password");

    jQuery.validator.addMethod("valid_name", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s\.\&\-()]*$/.test(value);
    }, "Please enter a valid name");

    jQuery.validator.addMethod("valid_date", function(value, element) {
        return this.optional(element) || /^\d{4}\-\d{2}\-\d{2}$/.test(value);
    }, "Please enter a valid date ex. 2017-03-27");


    jQuery.validator.addMethod("valide_email", function(value, element) {
        return this.optional(element) || /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/.test(value);
    }, "Please enter a valid email addresss");


    jQuery.validator.addMethod("valid_lk_phone", function(value, element) {
        return this.optional(element) || /^0[7][0-9]{8}$/.test(value);
    }, "Please enter a valid phone number");

    jQuery.validator.addMethod("valid_year", function(value, element) {
        return this.optional(element) || /^(19|20)\d{2}$/.test(value);
    }, "Please enter a valid year");
</script>
@endsection