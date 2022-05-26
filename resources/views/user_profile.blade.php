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

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    .typeahead,
    .tt-query,
    .tt-hint {
        height: 30px;
        padding: 8px 12px;
        font-size: 24px;
        line-height: 30px;
        border: 2px solid #ccc;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        outline: none;
    }

    .typeahead {
        background-color: #fff;
    }

    .typeahead:focus {
        border: 2px solid #0097cf;
    }

    .tt-query {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-hint {
        color: #999
    }

    .tt-dropdown-menu {
        width: 422px;
        margin-top: 3px;
        padding: 8px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    }

    .tt-suggestion {
        padding: 3px 20px;
        font-size: 18px;
        line-height: 24px;
        color: black;
        background-color: white;
    }

    .tt-suggestion.tt-cursor {
        color: #fff;
        background-color: #0097cf;
    }

    .tt-suggestion p {
        margin: 0;
        font-size: 18px;
        text-align: left;
    }

    .twitter-typeahead {
        width: 100%;
    }

    footer {
        position: fixed;
        padding: 10px 10px 0px 10px;
        bottom: 0;
        width: 100%;
        /* Height of the footer*/
        height: 20em;
        background: grey;
    }
</style>
@endsection
@section('content')
<div class="row card-body box-profile">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <?php
                    $user_path = '';
                    (isset($user_profile_data['profile_photo_path'])) ? $user_path = './storage/' . $user_profile_data['profile_photo_path'] : $user_path = '/dist/img/avtr_emp.jpg';
                    ?>
                    <img src="{{ $user_path}}" class="avatar img-circle img-thumbnail" alt="avatar" width="100em" height="100em">
                </div>

                <h3 class="profile-username text-center">{{$user_profile_data['name']}} {{$user_profile_data['name']}}</h3>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-user mr-1"></i> Full Name</strong>

                <p class="text-muted pl-1"> {{$user_profile_data['name']}} {{$user_profile_data['name']}}</p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted pl-1">{{$user_profile_data['address']}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Mobile No </strong>

                <p class="text-muted pl-1">
                    {{$user_profile_data['contact_no']}}
                </p>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#post" data-toggle="tab">Posts</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="post">
                        <table class="table table-striped" id="user_posts">
                            <thead>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Created Date</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($user_adds as $user_add)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$user_add->post_title}}</td>
                                    <td>{{$user_add->post_type}}</td>
                                    <td>{{$user_add->price}}</td>
                                    <td>{{$user_add->location}}</td>
                                    <td>{{$user_add->created_at}}</td>
                                    <td>
                                        <button class="btn btn-primary del float-left" data-id="{{$user_add->id}}">Delete</buttton>
                                    </td>
                                    <td>
                                        <a href="./post_edit/id/{{$user_add->id}}" class="btn btn-primary edit float-left">Edit Data</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings" data-user-id="{{$user_profile_data['id']}}">
                        <div class="card card-light">
                            <div class="card-body">
                                <form class="form-horizontal" id="user_update_frm">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="firstName" class="col-form-label">First Name</label>
                                            <div>
                                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lastName" class="col-form-label">Last Name</label>
                                            <div>
                                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email" class="col-form-label">Email</label>
                                            <div>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contactNo" class="col-form-label">Contact No</label>
                                            <div>
                                                <input type="tel" class="form-control" id="contactNo" name="contactNo" placeholder="Contact No" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="nic" class="col-form-label">NIC</label>
                                            <div>
                                                <input type="nic" class="form-control" id="nic" name="nic" placeholder="NIC" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="address" class="col-form-label">Address</label>
                                            <div>
                                                <textarea class="form-control" id="address" name="address" placeholder="Address" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <button type="button" class="btn btn-warning" id="update_user_data">Update User Data</button>
                                </div>
                            </div>
                        </div>
                        <div class="card card-light">
                            <div class="card-body">
                                <form class="form-horizontal" id="pass_change_frm">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="user_pass" class="col-form-label">New Password</label>
                                            <div><input type="password" class="form-control" id="user_pass" placeholder="Enter New Password" required></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pass_retype" class="col-form-label">Re-enter Password</label>
                                            <div><input type="password" class="form-control" id="pass_retype" placeholder="Re-Enter Your New Password" required></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <button type="button" class="btn btn-warning" id="change_pass">Change Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

@endsection
@section('pageScripts')
<script>
    $(document).ready(function() {
        var table = $('#user_posts').DataTable({
            responsive: true,
            searching: false,
            paging: false,
            info: false
        });

        new $.fn.dataTable.FixedHeader(table);
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('.del').on('click', function() {
            let id = $(this).data('id');
            ajaxRequest("DELETE", "./api/delete_post/id/" + id, null, function(resp) {
                (resp.status == 1) ? code = 'Success': code = 'Error';
                swal.fire(code, resp.message);
            });
            location.reload();
        });

        $(".file-upload").on('change', function() {
            readURL(this);
        });

        var user_profile;
        user_profile = $("#user_update_frm").validate({
            errorClass: "invalid",
            rules: {
                contactNo: {
                    valid_lk_phone: true,
                },
                email: {
                    valide_email: true,
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

        var user_pass_form;
        user_pass_form = $("#pass_change_frm").validate({
            errorClass: "invalid",
            rules: {
                user_pass: {
                    valide_code: true,
                },
                pass_retype: {
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
    });

    $("#update_user_data").click(function() {
        let is_valid = jQuery("#user_update_frm").valid();
        if (is_valid) {

            let data = $('#user_update_frm').serializeArray();
            let user_id = $('#settings').data('user-id');
            let url = "./api/update_basic_data/id/" + user_id;

            let url_email_nic = "./api/is_email_nic_exist";
            let validation_data = {
                email: $('#email').val(),
                nic: $('#nic').val()
            };
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
                    ajaxRequest("PUT", url, data, function(result) {
                        if (result.status == 1) {
                            $("#user_update_frm")[0].reset;
                            Swal.fire(
                                'Basic user data updation',
                                'Successfully Updated!',
                                'success'
                            );
                        } else {
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
                }
            });
        }
    });

    $('#change_pass').click(function() {
        let is_valid = jQuery("#pass_change_frm").valid();
        if (is_valid) {

            let data = {
                password: $('#user_pass').val()
            };
            let user_id = $('#settings').data('user-id');

            if ($('#user_pass').val() != '' && $('#pass_retype').val() != '') {
                if ($('#user_pass').val() === $('#pass_retype').val() && $('#user_pass').val().length > 5 && $('#pass_retype').val().length > 5) {
                    let url = "./api/change_password/id/" + user_id;

                    ajaxRequest("PUT", url, data, function(result) {
                        if (result.status == 1) {
                            $("#pass_change_frm")[0].reset;
                            Swal.fire(
                                'Password change',
                                'Successfully changed!',
                                'success'
                            );
                        } else {
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
                    Swal.fire(
                        'Password confirmation',
                        'Password confirmation failed!',
                        'error'
                    );
                }
            } else {
                Swal.fire(
                    'Form Validation',
                    'Password and confirmation must completed!',
                    'error'
                );
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
    jQuery.validator.addMethod("valide_code", function(value, element) {
        return this.optional(element) || /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/.test(value);
    }, "Please enter a valid Code");
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
</script>
@endsection