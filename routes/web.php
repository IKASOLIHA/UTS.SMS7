<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\KitabController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('kehadiran', KehadiranController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kitab', KitabController::class);