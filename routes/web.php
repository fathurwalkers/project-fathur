<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/administrator'], function () {
    Route::get('/', [AdminController::class, 'index']);
});
