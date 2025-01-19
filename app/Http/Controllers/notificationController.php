<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class notificationController extends Controller
{
//get all the notification of a specific user
public function userNotifications(User $user,$id){
    $user = $user->find($id);
    $notifications =$user->notifications;

    return response()->json($notifications);
}
}
