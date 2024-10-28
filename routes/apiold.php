<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\CategoriesController;
use App\http\Controllers\Authcontroller;
use App\http\Controllers\DonationsController;
use App\http\Controllers\Requestscontroller;

Route::post ('/register', [Authcontroller::class, 'register']);
Route::post ('/login', [Authcontroller::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 
Route::middleware(['auth:sanctum'])->group(function() {
    Route::apiResources([
        'categories'=>CategoriesController::class,
        'donations'=>DonationsController::class,
        'requests'=>Requestscontroller::class,

    ]);

    Route::get('/getDonations/{id}',[Donationscontroller::class, 'getDonations']);
});