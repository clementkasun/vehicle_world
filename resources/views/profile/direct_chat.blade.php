@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('pageStyles')
 <style>
    #send_msg {
        background: black;
        padding-top: 5px;
        padding-bottom: 5px;
    }
 </style>
@endsection
@section('content')
<!-- DIRECT CHAT SUCCESS -->
<div class="card card-success card-outline direct-chat direct-chat-success">
    <div class="card-header">
        <h3 class="card-title">Direct Chat</h3>

        <div class="card-tools">
            <span title="3 New Messages" class="badge bg-success">{{ $msg_count }}</span>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                <i class="fas fa-comments"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="direct-chat-messages" style="height: auto">
            <!-- Conversations are loaded here -->
            @foreach($user_to_msgs as $user_to_msg)
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">{{ $user_to_msg->User->user_name }}</span>
                    <span class="direct-chat-timestamp float-right">{{ $user_to_msg->created_at }}</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="{{ asset('/storage/'.$user_to_msg->User->profile_photo_path) }}" alt="Message User Image" width="50px" height="50px" style="border-radius: 30px;">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text" style="margin-left: 55px; height: 70px">
                    {{ $user_to_msg->message }}
                </div>
                <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->
            @endforeach
            @foreach($user_from_msgs as $user_from_msg)
            <!-- Message to the right -->
            <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">You</span>
                    <span class="direct-chat-timestamp float-left">{{ $user_from_msg->created_at }}</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="{{ asset('/storage/'.$user_from_msg->User->profile_photo_path) }}" alt="Message User Image" width="50px" height="50px" style="border-radius: 30px; margin-right: 10px">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text" style="margin-right: 55px; height: 70px">
                    {{ $user_from_msg->message }}
                </div>
                <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->
            @endforeach
        </div>
        <!--/.direct-chat-messages-->

        <!-- Contacts are loaded here -->
        <!-- <div class="direct-chat-contacts">
            <ul class="contacts-list">
                <li>
                    <a href="#">
                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                            <span class="contacts-list-name">
                                Count Dracula
                                <small class="contacts-list-date float-right">2/28/2015</small>
                            </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                        </div> -->
        <!-- /.contacts-list-info -->
        <!-- </a>
                </li> -->
        <!-- End Contact Item -->
        <!-- </ul> -->
        <!-- /.contatcts-list -->
        <!-- </div> -->
        <!-- /.direct-chat-pane -->
        <!-- </div> -->
        <!-- /.card-body -->
        <div class="card-footer mt-0 pt-0 mb-5">
            <form action="/send-message/user_from/{{ $logged_user }}/user_to/{{ $sent_user }}" method="post">
                <div class="input-group">
                    @csrf
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control" required>
                    <span class="input-group-append">
                        <button type="submit" class="btn btn-success" id="send_msg">Send</button>
                    </span>
                </div>
            </form>
        </div>
        <!-- /.card-footer-->
    </div>
    <!--/.direct-chat -->
    @endsection