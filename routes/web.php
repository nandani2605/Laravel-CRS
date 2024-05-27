<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/CarShortlist', function () {
    return view('car_shortlist');
});

Route::get('/SignUp', function () {
    return view('sign_up');
});
