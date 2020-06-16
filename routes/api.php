<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Categories;
use App\Http\Controllers\API\Competitors;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// CATEGORIES
Route::group(["prefix" => "/categories"], function () {

    // list all categories
    Route::get('', [Categories::class, "index"]);

    // list sports belonging to a specific category
    Route::group(["prefix" => "/{category}"], function () {

        Route::get('/sports', 'API\\Categories\\sports@show');
    });
});


Route::group(["prefix" => "/competitors"], function () {

    // list single competitor
    Route::get('/{competitor}', "API\\Competitors@show");
});

Route::group(["prefix" => "/{sport}"], function () {

    // list single competitor
    Route::get('/competitors', "API\\Sports\\Competitors@show");
});

