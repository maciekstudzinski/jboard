<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('', fn() => to_route('ads.index'));

Route::resource('ads', AdController::class)->only(['index', 'show']);

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::resource('auth', AuthController::class)->only(['create', 'store']);