<?php

use App\Http\Controllers\AdApplicationController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('', fn() => to_route('ads.index'));

Route::resource('ads', AdController::class)->only(['index', 'show']);

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::resource('auth', AuthController::class)->only(['create', 'store']);

// log out routes
Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])->name('auth.destroy');

Route::middleware('auth')->group(function() {
    Route::resource('ad.application', AdApplicationController::class)->only(['create', 'store']);
});