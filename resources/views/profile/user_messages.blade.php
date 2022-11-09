@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('content')

<div class="card card-success" style="height: auto">
    <div class="card-header text-center"><h1><b>Meassages</b></h1></div>
    <div class="card-body">
        @forelse($user_msgs as $user_msg)
        <a href="{{ asset('/direct-message/user_id/'. $user_msg->User->id) }}" style="text-decoration: none">
        <div class="alert alert-info" role="alert">
            <div class="row">
                <div class="col-2"><img src="{{ asset('/storage/'.$user_msg->User->profile_photo_path) }}" width="50px" height="50px" style="border-radius: 30px; margin-right: 10px"></div>
                <div class="col-10"><span class="float-right">{{ $user_msg->User->user_name }}</span></div>
            </div>
            <div class="row mt-2">
                <div class="col-12"><h4><span class="text-light">{{ $user_msg->message }}</span></h4></div>
            </div>
        </div>
        </a>
        @empty
        There are no favourite items
        @endforelse
    </div>
</div>
@endsection
@section('pageScripts')

@endsection