<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifications;

class UserNotificationController extends Controller
{
    public function markAsRead($id){
       $notification = Notifications::find($id);
       $notification->read_at = now();
    }
}
