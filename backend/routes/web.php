<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CatController;

Route::get('/cats', [CatController::class, 'index']);