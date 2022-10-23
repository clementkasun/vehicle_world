@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('content')
<div class="card card-success" style="height: 45em">
    <div class="card-header">Notifications</div>
    <div class="card-body">

        <?php $notifications = auth()->user()->unreadNotifications; ?>
        @forelse($notifications as $notification)
        <div class="alert alert-info" role="alert">
            <div class="row">
                <div class="col-7">
                    {{ $notification->created_at }} User {{ $notification['data']['user_name'] }} ({{ $notification['data']['email'] }}) {{ $notification['data']['action'] }}.
                </div>
                <div class="col-5">
                    <a href="{{ $notification->markAsRead() }}" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                        Mark as read
                    </a>
                </div>
            </div>
        </div>

        @if($loop->last)
        <a href="{{ $notifications->markAsRead() }}" id="mark-all" class="btn btn-danger">
            Mark all as read
        </a>
        @endif
        @empty
        There are no new notifications
        @endforelse
    </div>
</div>
@endsection

@section('pageScripts')

@endsection