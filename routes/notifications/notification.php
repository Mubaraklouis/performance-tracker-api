<?php

use App\Http\Controllers\notificationController;
use Illuminate\Support\Facades\Route;

Route::get('/user/{id}',[notificationController::class,'userNotifications'])->name('user.notification');


