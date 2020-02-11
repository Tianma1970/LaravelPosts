<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function() {

    Route::get('/countries', 'CountryController@index');
    Route::get('/countries/{country}', 'CountryController@show');
    // Route::get('/categories', 'CategoryController@index');
    // Route::get('/categories/{category}', 'CategoryController@show');
    // Route::post('/categories', 'CategoryController@create');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/posts', 'PostController');

});
