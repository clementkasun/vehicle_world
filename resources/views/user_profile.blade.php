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

    .error {
        color: red;
    }

    .btn-warning {
        background-color: orange;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        color: cornsilk;
    }

    .btn-danger {
        background-color: brown;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        color: white;
    }

    .btn-primary {
        background-color: blue;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        color: white;
    }
</style>
@endsection
@section('content')
<?php
function gen_star($star_count)
{
    $stars = '';

    for ($i = 0; $i < 5; $i++) {
        if ($i < $star_count) {
            $stars .= '<span class="fa fa-star checked text-warning"></span>';
        } else {
            $stars .= '<span class="fa fa-star"></span>';
        }
    }

    return $stars;
}
?>
<div class="row card-body box-profile">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <?php
                    $user_path = '';
                    (isset($user_profile_data['profile_photo_path'])) ? $user_path = './storage/' . $user_profile_data['profile_photo_path'] : $user_path = '/public/dist/img/avtr_emp.jpg';
                    ?>
                    <img src="{{ $user_path}}" class="avatar img-circle" alt="avatar" width="100em" height="100em">
                </div>

                <h3 class="profile-username text-center">{{$user_profile_data['name']}} {{$user_profile_data['last_name']}}</h3>
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

                <p class="text-muted pl-1"> {{$user_profile_data['name']}} {{$user_profile_data['last_name']}}</p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted pl-1">{{$user_profile_data['address']}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Email </strong>

                <p class="text-muted pl-1">
                    {{$user_profile_data['email']}}
                </p>

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
                    <li class="nav-item"><a class="nav-link" href="#favourite" data-toggle="tab">Favourites</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="post">
                        <table class="table table-striped" id="user_posts">
                            <thead>
                                <th></th>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Ratings/Review Count/Views</th>
                                <th>Location</th>
                                <th>Created Date</th>
                            </thead>
                            <tbody>
                                @foreach($user_adds as $user_add)
                                <tr>
                                    <td>
                                        @if($user_add->status != '1')
                                        <button class="btn btn-warning ch-sold" data-id="{{$user_add->id}}"><i class="fa fa-usd" aria-hidden="true" alt="sell"></i></i></button>
                                        <a href="{{ asset('/post_edit/id/'.$user_add->id) }}" class="btn btn-primary edit"><i class='fa fa-edit'></i></a>
                                        @else
                                        <button class="btn btn-warning ch-sold" disabled><i class="fa fa-usd" aria-hidden="true" alt="sold"></i></button>
                                        <a href="#" class="btn btn-primary edit"><i class='fa fa-edit' style="pointer-events: none; cursor: default; opacity: .4;"></i></a>
                                        @endif
                                        <button class="btn btn-danger del" data-id="{{$user_add->id}}"><i class='fa fa-trash'></i></button>
                                    </td>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td><a href="/get_post_profile/id/{{$user_add->id}}">{{ $user_add->post_title }}</a></td>
                                    @if(isset($user_add->vehicle))
                                    <td>{{ $user_add->vehicle->vehicle_type }}</td>
                                    @elseif(isset($user_add->SparePart))
                                    <td>{{ $user_add->SparePart->part_category }}</td>
                                    @else
                                    <td>-</td>
                                    @endif
                                    <td>{{$user_add->price}}</td>
                                    <td> <span><?php print gen_star(round($user_add->user_ratings)) ?> </span>/ <span> {{ $user_add->review_count }} </span> / <span> {{ $user_add->view_count }} </span></td>
                                    <td>{{$user_add->location}}</td>
                                    <td>{{$user_add->created_at}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="favourite">
                        <table class="table table-striped" id="user_favourites">
                            <thead>
                                <th></th>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Created Date</th>
                            </thead>
                            <tbody>
                                @foreach($user_favoured_posts as $user_favoured_post)
                                <tr>
                                    <td>
                                        <a href="{{ asset('/api/delete-user-favourite/id/'. $user_favoured_post->id.'') }}'" onclick="return false;" class="float-right">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $user_favoured_post->Post->post_title }}</td>
                                    <td>{{ $user_favoured_post->Post->post_type }}</td>
                                    <td>{{ $user_favoured_post->Post->created_at}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="settings" data-user-id="{{$user_profile_data['id']}}">
                        <div class="row">
                            <div class="card card-light col-12 col-md-8">
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
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
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
                        </div>
                        <div class="row">
                            <div class="card card-light col-12 col-md-8">
                                <div class="card-body">
                                    <form class="form-horizontal" id="pass_change_frm">
                                        @csrf
                                        <!-- Equivalent to... -->
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="user_pass" class="col-form-label">New Password</label>
                                                <div><input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Enter New Password" required autocomplete="off"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="pass_retype" class="col-form-label">Re-enter Password</label>
                                                <div><input type="password" class="form-control" id="pass_retype" name="pass_retype" placeholder="Re-Enter Your New Password" required autocomplete="off"></div>
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
            fixedHeader: true,
            responsive: true,
            searching: false,
            paging: true,
            info: false,
            pageLength: 10,
        });

        // new $.fn.dataTable.FixedHeader(table);
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
            Swal.fire({
                title: 'Are you sure?',
                text: "Record will be deleted",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!',
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.value) {
                    let id = $(this).data('id');
                    ajaxRequest("DELETE", "{{ asset('/api/delete_post/id/') }}/" + id, null, function(resp) {
                        if (resp.status == 1) {
                            swal.fire('Post Deletion', 'Successfully deleted the post', 'success');
                            location.reload();
                        } else {
                            swal.fire('Post Deletion', 'Post deletion was unsuccessful', 'error');
                        }
                    });
                }
            });
        });

        $('.ch-sold').on('click', function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Record will be changed as sold item",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!',
                showLoaderOnConfirm: true,
            }).then((result) => {
                // console.log(result.isConfirmed);
                if (result.value) {
                    let id = $(this).data('id');
                    ajaxRequest("PUT", "{{ asset('/api/sold_post_as_sold/id/') }}/" + id + "", null, function(resp) {
                        if (resp.status == 1) {
                            swal.fire('Post status change', 'Successfully changed the post status', 'success');
                            location.reload();
                        } else {
                            swal.fire('Post status change', 'Post status changing was unsuccessful', 'error');
                        }
                    });
                }
            });
        });

        $(".file-upload").on('change', function() {
            readURL(this);
        });

        var form_validation;
        form_validation = $(".form-horizontal").validate({
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
        $(this).prop('disabled', true);
        let is_valid = jQuery("#user_update_frm").valid();
        if (is_valid) {

            let data = $('#user_update_frm').serializeArray();
            let user_id = $('#settings').data('user-id');
            let url = "{{ asset('/api/update_basic_data/id/') }}/" + user_id;

            let url_email_nic = "{{ asset('/api/is_email_nic_exist') }}";
            let validation_data = {
                email: $('#email').val(),
                nic: $('#nic').val()
            };
            ajaxRequest("POST", url_email_nic, validation_data, function(resp) {
                if (resp == 1) {
                    $("#update_user_data").prop('disabled', false);
                    $('#nic').addClass('has-error');
                    Swal.fire("Failed!", "NIC already exist!", "warning");
                } else if (resp == 2) {
                    $("#update_user_data").prop('disabled', false);
                    $('#email').addClass('has-error');
                    Swal.fire("Failed!", "Email already exist!", "warning");
                } else {
                    $("#update_user_data").prop('disabled', false);
                    $('#email').removeClass('has-error');
                    $('#nic').removeClass('has-error');
                    ajaxRequest("PUT", url, data, function(result) {
                        if (result.status == 1) {
                            $("#user_update_frm").trigger("reset");
                            $("#update_user_data").prop('disabled', false);
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
        } else {
            $("#update_user_data").prop('disabled', false);
        }
    });

    $('#change_pass').click(function() {
        $(this).prop('disabled', true);
        let is_valid = jQuery("#pass_change_frm").valid();
        if (is_valid) {

            let data = {
                password: $('#user_pass').val()
            };
            let user_id = $('#settings').data('user-id');
            if ($('#user_pass').val() === $('#pass_retype').val()) {
                let url = "{{ asset('/api/change_password/id/') }}/" + user_id;

                ajaxRequest("PUT", url, data, function(result) {
                    if (result.status == 1) {
                        $("#pass_change_frm").trigger("reset");
                        $('#change_pass').prop('disabled', false);
                        Swal.fire(
                            'Password change',
                            'Successfully changed!',
                            'success'
                        );
                        window.location.href = "{{ asset('/logout') }}";
                    } else if (result.status == 2) {
                        $('#change_pass').prop('disabled', false);
                        $('#user_pass').addClass('has-error');
                        $('#pass_retype').addClass('has-error');
                        Swal.fire({
                            icon: 'error',
                            title: 'Password change',
                            text: 'Password already exists!'
                        })
                    } else if (result.status == 0) {
                        $('#change_pass').prop('disabled', false);
                        Swal.fire({
                            icon: 'error',
                            title: 'Password change',
                            text: 'Password change was unsuccessful!'
                        })
                    } else {
                        $('#change_pass').prop('disabled', false);
                        Swal.fire({
                            icon: 'error',
                            title: 'Password change',
                            text: 'Unexpected error!'
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
                    'Please retype the same password you have entered!',
                    'error'
                );
            }

        } else {
            $('#change_pass').prop('disabled', false);
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
</script>
@endsection