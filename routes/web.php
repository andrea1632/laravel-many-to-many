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

//Route::get('/', function () {
//    return view('guest.home');
//});

Auth::routes();

Route::get('/admin', 'Admin\HomeController@index')->name('home')->middleware('auth')->name('admin.home');

Route::middleware('auth')
->prefix('admin')
->name('admin.')
->namespace('Admin')
->group( function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});


Route::get('{any?}', function(){
    return view('guest.home');
} )->where("any", ".*");
