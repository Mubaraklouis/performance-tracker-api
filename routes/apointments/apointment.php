<?php

use App\Http\Controllers\ApointmentController;
use Illuminate\Support\Facades\Route;


Route::post('create',[ApointmentController::class,'store'])->name('apointment.create');
