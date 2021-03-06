<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\DrinksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
    Route::post('register', [AuthController::class, 'register']);

    Route::post('login', [AuthController::class, 'login']);

    Route::group(['middleware' => 'auth:sanctum'], function () {
            //查詢所有品牌
            Route::get('brands', [BrandsController::class, 'api_brands']);
            //修改指定品牌
            Route::patch('brands', [BrandsController::class, 'api_update']);
            //刪除指定品牌
            Route::delete('brands', [BrandsController::class, 'api_delete']);
            // 查詢所有飲料
            Route::get('drinks', [DrinksController::class, 'api_drinks']);
            // 修改指定飲料
            Route::patch('drinks', [DrinksController::class, 'api_update']);
            // 刪除指定飲料
            Route::delete('drinks', [DrinksController::class, 'api_delete']);
    });
