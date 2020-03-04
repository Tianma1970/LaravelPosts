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
    Route::get('/categories/{category}', 'CategoryController@show');
    Route::post('/categories', 'CategoryController@store');
    Route::post('/categories/delete', 'CategoryController@deleteMany');

    Route::post('/motto', 'MottoController@store');
    Route::get('/motto/create', 'MottoController@edit');

    Route::post('/location/', 'LocationController@store');
    Route::get('/locations/create', 'LocationController@edit');

    //uploading files
    Route::get('/upload', 'PagesController@index');
    Route::post('/uploadFile', 'PagesController@uploadFile');



    Route::group(['middleware'  => 'App\Http\Middleware\MemberMiddleware'], function() {
        Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');
        Route::get('/comments/', 'CommentController@index');
    });

    Route::group(['middleware'  => 'App\Http\Middleware\AdminMiddleware'], function() {
        Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
    });

    Route::group(['middleware'  => 'App\Http\Middleware\SuperAdminMiddleware'], function() {
        Route::match(['get', 'post'], '/superAdminOnlyPage/', 'HomeController@super_admin');
        Route::post('comments/', 'CommentController@store');
        Route::get('/comments/{comment}', 'CommentController@create');
    });
});
