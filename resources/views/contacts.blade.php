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
        <div class="card-body pb-0">
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
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">E-Mail</label>
                                    <input type="email" id="inputEmail" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="inputSubject">Subject</label>
                                    <input type="text" id="inputSubject" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="inputMessage">Message</label>
                                    <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Send message">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</section>
@endsection