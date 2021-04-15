<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['middleware' => ['akses:manager']], function() {
        Route::resource('/user', 'UserController');
    });

    Route::group(['middleware' => ['akses:admin']], function() {
        Route::resource('/distributor', 'DistributorController');
        Route::resource('/buku', 'BukuController');
        Route::resource('/pasok', 'PasokController');
    });
});
