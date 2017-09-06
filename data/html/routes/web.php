<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your applirestoion. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home')->name('home');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your applirestoion. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/restaurants', 'restaurantsController@index')->name('RestoIndex');
Route::get('/restaurants/{id}', 'restaurantsController@show')->name('RestoShow');

Route::get('/clients', 'clientsController@index')->name('CliIndex');
Route::get('/clients/{id}', 'clientsController@show')->name('CliShow');

Route::get('/reservations', 'reservationsController@index')->name('ResIndex');
Route::get('/reservations/{id}', 'reservationsController@show')->name('ResShow');

Route::get('/commentaires', 'commentairesController@index')->name('ComIndex');
Route::get('/commentaires/{id}', 'commentairesController@show')->name('ComShow');


Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {
    Route::get('/clients', 'Admin\clientsController@index')->name('AdminCliIndex');
    Route::get('/clients/{id}', 'Admin\clientsController@show')->name('AdminClisShow');
    Route::get('/clients/{id}/edit', 'Admin\clientsController@edit')->name('AdminCliEdit');
    Route::post('/clients/{id}/update', 'Admin\clientsController@update')->name('AdminCliUpdate');
    Route::get('/clients/{id}/destroy', 'Admin\clientsController@destroy')->name('AdminCliDestroy');
    Route::get('/dashboard', 'Admin\clientsController@dashboard')->name('AdminCliDashboard');

    Route::get('/restaurants', 'Admin\restaurantsController@index')->name('AdminRestoIndex');
    Route::get('/restaurants/create', 'Admin\restaurantsController@create')->name('AdminRestoCreate');
    Route::post('/restaurants/store', 'Admin\restaurantsController@store')->name('AdminRestoStore');
    Route::get('/restaurants/{id}', 'Admin\restaurantsController@show')->name('AdminRestoShow');
    Route::get('/restaurants/{id}/edit', 'Admin\restaurantsController@edit')->name('AdminRestoEdit');
    Route::post('/restaurants/{id}/update', 'Admin\restaurantsController@update')->name('AdminRestoUpdate');
    Route::get('/restaurants/{id}/destroy', 'Admin\restaurantsController@destroy')->name('AdminRestoDestroy');

    Route::get('/reservations', 'Admin\reservationsController@index')->name('AdminResIndex');
    Route::get('/reservations/create', 'Admin\reservationsController@create')->name('AdminResCreate');
    Route::post('/reservations/store', 'Admin\reservationsController@store')->name('AdminResStore');
    Route::get('/reservations/{id}', 'Admin\reservationsController@show')->name('AdminResShow');
    Route::get('/reservations/{id}/edit', 'Admin\reservationsController@edit')->name('AdminResEdit');
    Route::post('/reservations/{id}/update', 'Admin\reservationsController@update')->name('AdminResUpdate');
    Route::get('/reservations/{id}/destroy', 'Admin\reservationsController@destroy')->name('AdminResDestroy');

    Route::get('/commentaires', 'Admin\commentairesController@index')->name('AdminComIndex');
    Route::get('/commentaires/create', 'Admin\commentairesController@create')->name('AdminComCreate');
    Route::post('/commentaires/store', 'Admin\commentairesController@store')->name('AdminComStore');
    Route::get('/commentaires/{id}', 'Admin\commentairesController@show')->name('AdminComShow');
    Route::get('/commentaires/{id}/edit', 'Admin\commentairesController@edit')->name('AdminComEdit');
    Route::post('/commentaires/{id}/update', 'Admin\commentairesController@update')->name('AdminComUpdate');
    Route::get('/commentaires/{id}/destroy', 'Admin\commentairesController@destroy')->name('AdminComDestroy');

    Route::post('/contacts', 'ContactController@send')->name('contact');
});

Auth::routes();
