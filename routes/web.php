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

Route::get('/', function (){
    return view('home');
});

Auth::routes();


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@getIndex')->name('adminHome');

    Route::group(['as' => 'countries.', 'prefix' => 'countries', 'namespace' => 'Countries'], function () {
        Route::get('/', 'CountriesController@getIndex')->name('countries');
    });

});
