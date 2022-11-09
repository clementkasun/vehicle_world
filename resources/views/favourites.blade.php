@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('content')
<div class="card card-success" style="height: auto">
    <div class="card-header text-center"><h1><b>Favourites</b></h1></div>
    <div class="card-body">
        @forelse($user_favourites as $favourite)
        <div class="alert alert-info" role="alert">
            <div class="row">
                <div class="col-7">
                You have added post of <br> <b> {{ $favourite->Post->post_title }} </b> <br> to your favourites <br> <code> {{ $favourite->created_at }} </code>
                </div>
                <div class="col-5">
                    <a href="{{ asset('/api/delete-user-favourite/id/'. $favourite->id.'') }}'"  onclick="return false;" class="float-right">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            </div>
        </div>

        @empty
        There are no favourite items
        @endforelse
    </div>
</div>
@endsection

@section('pageScripts')

@endsection