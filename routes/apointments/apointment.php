<?php

use App\Http\Controllers\ApointmentController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ApointmentController::class,'index'])->name('apointment.name');
Route::post('/create',[ApointmentController::class,'store'])->name('apointment.create');
Route::put('/aprove/{id}',[ApointmentController::class,'aprove'])->name('apointment.aprove');
Route::put('/decline/{id}',[ApointmentController::class,'decline'])->name('apointment.decline');
Route::delete('/delete/{id}',[ApointmentController::class,'destroy'])->name('apointment.delete');

