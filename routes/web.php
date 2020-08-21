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
    Route::group(["middleware" => "auth"], function() {
        Route::get('/create', "Owners@create");
        Route::post('/create', "Owners@createPost");
        Route::post('/{owner}', "Owners@addAnimal");
        Route::get('/{owner}/edit', "Owners@edit");
        Route::post('/{owner}/edit', "Owners@editPost");
    });
    Route::get('/search', "Owners@search");
    Route::get('/{owner}', "Owners@show");
});

Route::get('/animals', "Animals@index");
Route::get('/animals/{animal}', "Animals@show");
Route::get('/animals/{animal}/edit', "Animals@edit");
Route::post('/animals/{animal}/edit', "Animals@editPost");


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
