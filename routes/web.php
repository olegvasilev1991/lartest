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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/','PostController@getIndex');
//Route::get('/posts/{post}','PostController@getShow');
//Route::get('/posts/{post}','PagesController@Show');


//Route::controller('/pages','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit', 'EdituserController@edit');
Route::get('/pages/{post}', 'PagesController@show');
//Route::get('/addpost', 'PostController@addPost');

Route::resource('/', 'PagesController');

Route::group(['middleware' => ['auth'], 'prefix' => 'profile', 'as' => 'profile.'], function() {

    Route::get('/','AccountController@Index')->name('account');
    Route::post('/','AccountController@Edit')->name('accountedit');
    Route::get('/pages/{post}', 'PagesController@show')->name('page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
