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

    #send_mail {
        background: black;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 10px;
        padding-right: 10px;
    }

    .has-error {
        color: red;
    }
</style>
@endsection

@section('content')
<section>
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-5">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-5 text-center d-flex align-items-center justify-content-center">
                                <div>
                                    <h2>Vehiauto.com</h2>
                                    <p class="lead mb-5">Kurunegala, Srilanka<br>
                                        Phone: 0763993288
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <form id="contact_form">
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <div>
                                            <input type="text" id="inputName" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSubject">Subject</label>
                                        <div>
                                            <input type="text" id="inputSubject" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMessage">Message</label>
                                        <div>
                                            <textarea id="inputMessage" class="form-control" rows="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="button" class="btn btn-primary" id="send_mail" value="Send message">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
@endsection
@section('pageScripts')
<script>
    $('#send_mail').click(function() {
        let is_valid = jQuery("#contact_form").valid();
        if (is_valid) {
            $(this).prop('disabled', true);
            let mail_url = "./api/send_mail";
            let details = {
                'title': $('#inputSubject').val(),
                'body': $('#inputMessage').val(),
                'user_name': $('#inputName').val()
            };
            ajaxRequest("POST", mail_url, details, function(result) {

                if (result.status == 1) {
                    $(this).prop('disabled', true);
                    $('#contact_form')[0].reset();
                    $('#send_mail').prop('disabled', false);
                    swal.fire('success', 'Successfully sent the mail!', 'success');
                } else {
                    $(this).prop('disabled', true);
                    $('#send_mail').prop('disabled', false);
                    swal.fire('error', 'Email sending was unsuccessful!', 'error');
                }

            });
        }

    });

    var contact_form;
    contact_form = $("#contact_form").validate({
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