<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
Route::resource('offers', OfferController::class);

Route::group(['prefix' => 'auth'], function ($router) {

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/me', [AuthController::class, 'me']);

});

Route::get('/userget', function () {
    return auth()->check()? auth()->user(): null;
})->name('userget');
