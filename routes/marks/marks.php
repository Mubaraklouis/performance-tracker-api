<?php

use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;

Route::post('/create',[MarkController::class,'store'])->name('marks.store');
Route::put('/update/{id}',[MarkController::class,'update'])->name('marks.store');
Route::post('/grade-catOne',[MarkController::class,'gradeCatOne']);

