<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarListController;

Route::get('/adminDashboard', [AdminController::class, 'adminDashboard']);

Route::get('/carList', function () {
    return view('admin.carList');
});

Route::get('/carList', [CarListController::class, 'create'])->name('carList.create');
Route::post('/carList', [CarListController::class, 'store'])->name('carList.store');
