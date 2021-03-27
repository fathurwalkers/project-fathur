<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/administrator'], function () {
    Route::get('/', [AdminController::class, 'index']);
});
