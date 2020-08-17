<?php

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

Route::get('/owners', "Owners@index");
Route::get('/', "Home@index");


Route::group(["prefix" => 'owners'], function() {
    Route::get('/create', "Owners@create");
    Route::post('/create', "Owners@createPost");
    Route::get('/search', "Owners@search");
    Route::get('/{owner}', "Owners@show");
    Route::get('/{owner}/edit', "Owners@edit");
    Route::post('/{owner}/edit', "Owners@editPost");
});
