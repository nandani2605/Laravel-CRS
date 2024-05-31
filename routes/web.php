<?php

use App\Http\Controllers\UserDetailController;
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

Route::get('/Services', function () {
    return view('services');
});

Route::get('/Ride', function () {
    return view('ride');
});

Route::get('/About', function () {
    return view('about');
});

Route::get('/Reviews', function () {
    return view('reviews');
});
// Route::get('/SignUp', function () {
//     return view('sign-up');
// });

// Route::get('/SignIn', function () {
//     return view('sign-in');
// });

Route::get('/SignUp',[UserDetailController::class, 'viewSignUp'] )->name('viewSignUp');
Route::post('/registerUser',[UserDetailController::class, 'registerUser'] )->name('registerUser');
Route::get('/SignIn',[UserDetailController::class, 'viewSignIn'] )->name('viewSignIn');

Route::post('/user-login', [UserDetailController::class, 'userLogin'])->name('userLogin');