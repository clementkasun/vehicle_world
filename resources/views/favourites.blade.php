@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('content')
<div class="card card-success">
  <div class="card-header">Favourites</div>
  <div class="card-body">
    @foreach($user_favourites as $favourite)
      <div class="card card-light">
        <div class="card-header"></div>
        <div class="card-body">
          You have added post titled as <b>{{ $favourite->Post->post_title }}</b> to the favourites <code> at {{ $favourite->created_at }} </code> 
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection

@section('pageScripts')

@endsection