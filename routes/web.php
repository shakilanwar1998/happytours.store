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
Route::get('/place', function (){
    return view('layouts.places');
});


Auth::routes();

//
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@getIndex')->name('adminHome');

    Route::group(['as' => 'countries.', 'prefix' => 'countries', 'namespace' => 'Countries'], function () {
        Route::get('/', 'CountriesController@getIndex')->name('countries');
        Route::get('/add', 'CountriesController@getAdd')->name('countriesAdd');
        Route::get('/edit/{id}', 'CountriesController@getEdit')->name('countriesEdit');
        Route::get('/delete/{id}', 'CountriesController@getDelete')->name('countriesDelete');
        Route::post('/add/save', 'CountriesController@create')->name('countriesAddSave');
        Route::post('/edit/{id}/save', 'CountriesController@update')->name('countriesEditSave');
    });

});
