<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;

Route::get('', fn() => to_route('ads.index'));

Route::resource('ads', AdController::class)->only(['index', 'show']);