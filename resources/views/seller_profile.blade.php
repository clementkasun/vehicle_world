@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('pageStyles')

<link rel="stylesheet" href="../../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<!--<link rel="stylesheet" href="../../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">-->
<!-- Theme style -->
<!--<link rel="stylesheet" href="../../../dist/css/adminlte.min.css">-->
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="../../../plugins/sweetalert2/sweetalert2.min.css">
<link rel="stylesheet" href="../../../plugins/w3/w3.css">
<!-- sweet alert -->

<style>
    .invalid {
        color: #FF0000;
    }

    .mySlides {
        display:none;
    }


</style>
@endsection
@section('content')

<!-- Content Header (Page header) -->
<section class=" content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 text-center">
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="card card-secondary">
                    <div class="card-header text-center">                
                        <h4 class="text-light"><b> Seller Profile </b></h4>
                    </div>
                    <div class="card-body">
                        
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('pageScripts')
<!-- Page script -->

<!-- Select2 -->
<script src="../../../plugins/select2/js/select2.full.min.js"></script>
<!-- sweetalert -->
<script src="../../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- validation -->
<script src="../../../plugins/jquery-validation/jquery.validate.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./../../../dist/js/demo.js"></script>
<script src="../../../js/userjs/submit.js"></script>
<script src="../../../js/registrationJs/registration.js"></script>
<script src="../../../js/registrationJs/GraducateProfileJS.js"></script>
<script src="../../../js/commenFunctions/file_upload.js"></script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
}
</script>
@endsection