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

//get all the read notifiactions

public function readNotifications(User $user,$id){
    $user= $user->find($id);
    $readNotifications = $user->readNotifications;
    return response()->json($readNotifications);
}


//get all the unread notifiactions

public function unreadNotifications(User $user,$id){
    $user= $user->find($id);
    $readNotifications = $user->unreadNotifications;
    return response()->json($readNotifications);
}

//get all the unread notifiactions

public function destroy(User $user,$notification_id,$user_id){
    $user= $user->find($user_id);
   $user->notifications->find($notification_id)->delete();
    return response()->json(["message"=>"notification deleted"]);
}

}
