<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarListController;

Route::get('/adminDashboard', [AdminController::class, 'adminDashboard']);

Route::get('/carList', [CarListController::class, 'viewCarList'])->name('viewCarList');
Route::post('/carList', [CarListController::class, 'addCarList'])->name('addCarList');
