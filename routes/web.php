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
Route::get('/create', "Owners@create");
Route::get('/owners/{owner}', "Owners@show");
