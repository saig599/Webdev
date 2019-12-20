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
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/view_post', 'PostsController@show')->name('showPost');
Route::get('/create', function () {
    return view('post');
});
Route::post('/post','PostsController@store')->name('post');
Route::post('/comment','CommentsController@store')->name('comment');


Route::get('/', function () {
    return redirect()->route('login');
});
