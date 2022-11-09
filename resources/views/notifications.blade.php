@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('pageStyles')
<style>
    .mark-as-read,
    .mark-all-as-read {
        background: orange;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 5px;
        padding-right: 5px;
    }
</style>
@endsection
@section('content')
<div class="card card-success" style="height: auto">
    <div class="card-header text-center"><h1><b>Notifications</b></h1></div>
    <div class="card-body" id="notes">

        <?php $notifications = auth()->user()->unreadNotifications; ?>
        @forelse($notifications as $notification)
        <div class="alert alert-info" role="alert" id="{{ $notification->id }}">
            <div class="row">
                <div class="col-7">
                    {{ $notification->created_at }} {{ $notification['data']['action'] }}.
                </div>
                <div class="col-5">
                    <button class="float-right mark-as-read fa fa-mark-as-read btn btn-warning" data-id="{{ $notification->id }}">Mark as read</button>
                </div>
            </div>
        </div>

        @if($loop->last)
        <a href="{{ $notifications->markAsRead() }}" class="btn btn-warning float-right mark-all-as-read">
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
<script>
    $('.mark-as-read ').click(function() {
        let id = $(this).data('id');
        let element_count = $('#notes').length;
        $('#' + id).addClass('d-none');
        if (element_count == 1) {
            $('.mark-all-as-read').addClass('d-none');
        }
    });
</script>
@endsection