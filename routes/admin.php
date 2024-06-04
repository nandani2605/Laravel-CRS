<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/adminDashboard', [AdminController::class, 'adminDashboard']);
