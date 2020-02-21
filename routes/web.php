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

Route::get('/Allposts', 'AllpostsController@index');
Route::get('/Allposts/{post}', 'AllpostsController@show');
Route::get('/Allcategories/{category}', 'AllcategoriesController@show');

Route::middleware(['auth'])->group(function() {
    Route::resource('/posts', 'PostController');

    Route::get('/categories', 'CategoryController@index');
    Route::get('/categories/create', 'CategoryController@create');
    Route::post('/categories', 'CategoryController@store');
    Route::post('/categories/delete', 'CategoryController@deleteMany');

    Route::post('/motto', 'MottoController@store');
    Route::get('/motto/create', 'MottoController@edit');

    Route::post('/location/', 'LocationController@store');
    Route::get('/locations/create', 'LocationController@edit');

});
