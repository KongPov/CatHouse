<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CatController;

Route::get('/cat', [CatController::class, 'index']);