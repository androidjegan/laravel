<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dash', function () {
    return [
        'message' => 'Welcome to the dashboard',
        'status' => 'success'
    ];
});
