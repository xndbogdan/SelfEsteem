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
    if(!Auth::check()) {
        return view('welcome');
    }
    else
    {
        return redirect(route('chatter.home'));
    }
});

Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
