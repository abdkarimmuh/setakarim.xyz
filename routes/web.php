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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect(route('home.index'));
});

Route::get('home', function () {
    return redirect(route('home.index'));
});

Route::name('home.')->prefix('/')->group(function () {
    Route::get('/', 'HomeController@index')->name('index');
});

Route::name('blog.')->prefix('/blog')->group(function () {
    Route::get('/', 'BlogController@index')->name('index');
    Route::get('/{id}', 'BlogController@show')->name('show');
    Route::get('/category/{id}', 'BlogController@category')->name('category');
});