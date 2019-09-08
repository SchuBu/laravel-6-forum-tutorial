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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/thread/how-to-make-a-forum', function () {
    return view('thread');
})->name('thread');

Route::get('/profile', function () {
    return view('my-profile');
})->name('my-profile');

Route::get('/profile/peter', function () {
    return view('user-profile');
})->name('user-profile');

Route::get('/design', function () {
    return view('design');
})->name('design');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

