<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\DrinksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/ ',function (){return redirect('brands');});
Route::get("brands/UScountry",[BrandsController::class,'UScountry'])->name('brands,UScountry');
Route::get("brands/UKcountry",[BrandsController::class,'UKcountry'])->name('brands,UKcountry');
Route::get("brands/TWcountry",[BrandsController::class,'TWcountry'])->name('brands,TWcountry');
Route::resource("drinks", DrinksController::class);
Route::resource("brands", BrandsController::class);
