<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KehadiranController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('kehadiran', KehadiranController::class);
