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
                                <div class="">
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
                                        <input type="text" id="inputName" class="form-control" />
                                    </div>
                                    <!-- <div class="form-group">
                                    <label for="inputEmail">E-Mail</label>
                                    <input type="email" id="inputEmail" class="form-control" />
                                </div> -->
                                    <div class="form-group">
                                        <label for="inputSubject">Subject</label>
                                        <input type="text" id="inputSubject" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMessage">Message</label>
                                        <textarea id="inputMessage" class="form-control" rows="4"></textarea>
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
        $(this).prop('disabled', true);
        let mail_url = "./api/send_mail";
        let details = {
            'title': $('#inputSubject').val(),
            'body': $('#inputMessage').val(),
            'user_name': $('#inputName').val()
        };
        ajaxRequest("POST", mail_url, details, function(result) {

            if (result.status == 1) {
                $('#contact_form')[0].reset();
                $('#send_mail').prop('disabled', false);
                swal.fire('success', 'Successfully sent the mail!', 'success');
            } else {
                $('#send_mail').prop('disabled', false);
                swal.fire('error', 'Email sending was unsuccessful!', 'error');
            }

        });
    });
</script>
@endsection