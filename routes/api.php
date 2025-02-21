<?php

use App\Http\Controllers\General\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function (){
    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);
});

Route::prefix('app')->middleware('auth:api')->group(function (){

    Route::post('/change-password',[AuthController::class,'changePassword']);
});
