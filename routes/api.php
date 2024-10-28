<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\http\Controllers\Authcontroller;
use App\http\Controllers\DonationsController;
use App\http\Controllers\CategoriesController;
use App\http\Controllers\RequestsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResources([
    'categories'=>CategoriesController::class,
    'donations'=>DonationsController::class,
    'requests'=>RequestsController::class,

]);