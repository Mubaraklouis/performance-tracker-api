<?php

use App\Http\Controllers\ApointmentController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ApointmentController::class,'index'])->name('apointment.name');
Route::post('create',[ApointmentController::class,'store'])->name('apointment.create');
