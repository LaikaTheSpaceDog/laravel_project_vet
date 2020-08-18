<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;
use App\Http\Controllers\API\Animals;



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
Route::group(["prefix" => "owners"], function () {
    Route::get("", [Owners::class, "index"]);
    Route::post("", [Owners::class, "store"]);
    Route::group(["prefix" => "{owner}"], function () {
        Route::get("", [Owners::class, "show"]);
        Route::put("", [Owners::class, "update"]);
        Route::delete("", [Owners::class, "destroy"]);
    });
});

Route::group(["prefix" => "animals"], function () {
    Route::get("", [Animals::class, "index"]);
    Route::group(["prefix" => "{animal}"], function () {
        Route::get("", [Animals::class, "show"]);
        Route::put("", [Animals::class, "update"]);
        Route::delete("", [Animals::class, "destroy"]);
    });
});

Route::group(["prefix" => "owners/{owner}/animals"], function () {
    Route::get("", [Owners\Animals::class, "index"]);
    Route::post("", [Owners\Animals::class, "store"]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
