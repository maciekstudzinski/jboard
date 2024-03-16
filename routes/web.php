<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;


Route::resource('ads', AdController::class)->only(['index']);