<?php

use App\Http\Controllers\notificationController;
use Illuminate\Support\Facades\Route;

Route::get('/user/{id}',[notificationController::class,'userNotifications'])->name('user.notification');
Route::get('/user/read-notifications/{id}',[notificationController::class,'readNotifications'])->name('user.readNotification');
Route::get('/user/unread-notifications/{id}',[notificationController::class,'unreadNotifications'])->name('user.unreadNotification');
Route::delete('/user/delete/{notification_id}/{user_id}',[notificationController::class,'destroy'])->name('notification.destroy');





