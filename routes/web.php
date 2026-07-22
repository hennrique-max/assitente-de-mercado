<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gbrain', [App\Http\Controllers\gbrain::class, 'index']);