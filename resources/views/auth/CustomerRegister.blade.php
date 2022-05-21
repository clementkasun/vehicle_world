<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>VEHIAUTO.COM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/yearpicker/yearpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/jqpaginator/jqpaginator.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .add-font {
            font-size: 14px;
            color: #003e80;
        }

        .current {
            color: green;
        }

        .w-5 {
            display: none;
        }

        .yearpicker {
            background-color: white;
        }

        @font-face {
            font-family: myFirstFont;
            src: url(sansation_light.woff);
        }

        div {
            font-family: myFirstFont;
            font-size: 14px;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-208237465-1">
    </script>
</head>

<body>
    <!-- End Header -->

    <main id="main">
        <!-- general form elements -->
        <div class="card card-light">
            <div class="card-header text-center">
                <h1> <b>Customer Registration</b> </h1>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <form id="cust_reg_frm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">First Name*</label>
                                <div><input type="text" class="form-control" name="firstName" id="firstName" value="" placeholder="FIRST NAME" required></div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name*</label>
                                <div><input type="text" class="form-control" name="lastName" id="lastName" value="" placeholder="LAST NAME" required></div>
                            </div>
                            <div class="form-group">
                                <label for="contactNo">Mobile No*</label>
                                <div><input type="text" class="form-control" name="contactNo" id="contactNo" value="" minlength="10" maxlength="10" placeholder="TELPHONE" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nic">NIC*</label>
                                <div><input type="text" class="form-control" name="nic" id="nic" value="" placeholder="NIC" required></div>
                            </div>
                            <label>Profile Picture: <input type="file" class="form-control" id="file_input" accept="image/*"></label>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="EMAIL">
                            </div>
                            <div class="form-group">
                                <label for="location">Location*</label>
                                <textarea cols="70" rows="2" class="form-control" name="location" id="location" value="" placeholder="Location" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="password_origin">Password*</label>
                                <div><input type="password" class="form-control" name="password_origin" id="password_origin" value="" placeholder="PASSWORD" required></div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirm">Confirm Password*</label>
                                <div><input type="password" class="form-control" name="password_confirm" id="password_confirm" value="" placeholder="CONFIRM PASSWORD" required>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                </form>
            </div>
            <div class="card-footer">
                <button id="save_customer" type="button" class=" btn btn-lg btn-primary"><b>Register</b></button>
                <a href="/login" class="btn btn-lg btn-success"><b>Login</b></a>
            </div>
            <!-- /.card -->
        </div>
    </main><!-- End #main -->
    <footer id="footer">
        <div class="container">
            <h3>VEHIAUTO.COM</h3>
            <p>MAKE YOUR DREAM VEHICLE REALITY. ENGAGE WITH US TO PROSPEROUS FUTURE.</p>
            <div class="social-links">
                <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/kasunclement/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instergram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://google-plus.com" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.classifield.qa.mkesell.com">VEHIAUTO.COM</a></strong>
            </div>
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </footer>
    <!-- Page script -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="../../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./../../../dist/js/demo.js"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--Component Js -->
    <script src="{{ asset('/js/combo.js') }}"></script>
    <!--Data Tables -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <!--Tosts-->
    <script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>
    <!-- Toastr -->
    <!-- SweetAlert2 -->
    <script src="{{ asset('/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('/dist/js/demo.js') }}"></script>

    <!--commen functions-->
    <script src="{{ asset('/js/commenFunctions/functions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/commenFunctions/file_upload.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/registrationJs/registration.js') }}" type="text/javascript"></script>
    <!-- validation -->
    <script src="{{ asset('/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <script>
        var cust_reg_frm;

        cust_reg_frm = jQuery("#cust_reg_frm").validate({
            errorClass: "invalid",
            rules: {
                tel: {
                    valid_lk_phone: true,
                },
                email: {
                    valide_email: true,
                },
                password_origin: {
                    valide_pass: true,
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

        $("#save_customer").click(function() {
            var is_valid = jQuery("#cust_reg_frm").valid();
            if (is_valid) {
                var validation_data = {
                    email: $('#email').val(),
                    nic: $('#nic').val(),
                };
                let object = {
                    firstName: $('#firstName').val(),
                    lastName: $('#lastName').val(),
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
                        $('#nic').addClass('has-error');
                        Swal.fire("Failed!", "NIC already exist!", "warning");
                    } else if (resp == 2) {
                        $('#email').addClass('has-error');
                        Swal.fire("Failed!", "Email already exist!", "warning");
                    } else {
                        $('#email').removeClass('has-error');
                        $('#nic').removeClass('has-error');
                        if ($('#password_origin').val() == $('#password_confirm').val()) {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "Record will be Saved",
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes!'
                            }).then((result) => {
                                if (result.value) {
                                    save_cus_details(object, function() {
                                        window.location = "./login_cust";
                                    });
                                }
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
            return this.optional(element) || /^[a-zA-Z\s\d\_\-()]{1,100}$/.test(value);
        }, "Please enter a valid Code");

        jQuery.validator.addMethod("valide_pass", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s\d\_\-()]{6,10}$/.test(value);
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

</body>

</html>