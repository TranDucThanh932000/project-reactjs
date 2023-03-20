<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\Authentication;
use App\Http\Controllers\api\v1\BlogController;
use App\Http\Controllers\api\v1\BlogLikeController;
use App\Http\Controllers\api\v1\LuckyNumberController;

Route::post('/login', [Authentication::class, 'login']);
Route::post('/refresh-token', [Authentication::class, 'refreshToken']);
Route::post('/check-token', [Authentication::class, 'checkToken']);
Route::get('/lucky-number-today', [LuckyNumberController::class, 'getLuckyNumberToday']);
Route::get('/lucky-number-latest', [LuckyNumberController::class, 'getLatestLuckyNumber']);

Route::group([
    'middleware' => ['jwt.auth']
], function() {
    Route::post('/logout', [Authentication::class, 'logout']);
    Route::resource('blogs', BlogController::class);
    Route::resource('bloglikes', BlogLikeController::class);
});
