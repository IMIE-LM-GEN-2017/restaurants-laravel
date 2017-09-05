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

Route::get('/', 'PagesController@home')->name('homesdfsdf');



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

Route::get('/restaurants', 'restaurantController@index')->name('restoIndex');
Route::get('/restaurant/{id}', 'restaurantController@show')->name('restoShow');

Route::get('/clients', 'clientController@index')->name('clientIndex');
Route::get('/client/{id}', 'clientController@show')->name('clientShow');

Route::get('/reservations', 'reservationController@index')->name('reservationIndex');
Route::get('/reservation/{id}', 'reservationController@show')->name('reservationShow');

Route::get('/commentaires', 'commentaireController@index')->name('commentaireIndex');
Route::get('/commentaire/{id}', 'commentaireController@show')->name('commentaireShow');


Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {
    Route::get('/clients', 'Admin\clientController@index')->name('AdminclientIndex');
    Route::get('/client/{id}', 'Admin\clientController@show')->name('AdminclientShow');
    Route::get('/client/{id}/edit', 'Admin\clientController@edit')->name('AdminclientEdit');
    Route::commentaire('/client/{id}/update', 'Admin\clientController@update')->name('AdminclientUpdate');
    Route::get('/client/{id}/destroy', 'Admin\clientController@destroy')->name('AdminclientDestroy');
    Route::get('/dashboard', 'Admin\clientController@dashboard')->name('AdminclientDashboard');

    Route::get('/restaurants', 'Admin\restaurantController@index')->name('AdminrestoIndex');
    Route::get('/restaurant/create', 'Admin\restaurantController@create')->name('AdminrestoCreate');
    Route::commentaire('/restaurant/store', 'Admin\restaurantController@store')->name('AdminrestoStore');
    Route::get('/restaurant/{id}', 'Admin\restaurantController@show')->name('AdminrestoShow');
    Route::get('/restaurant/{id}/edit', 'Admin\restaurantController@edit')->name('AdminrestoEdit');
    Route::commentaire('/restaurant/{id}/update', 'Admin\restaurantController@update')->name('AdminrestoUpdate');
    Route::get('/restaurant/{id}/destroy', 'Admin\restaurantController@destroy')->name('AdminrestoDestroy');

    Route::get('/reservations', 'Admin\reservationController@index')->name('AdminreservationIndex');
    Route::get('/reservation/create', 'Admin\reservationController@create')->name('AdminreservationCreate');
    Route::commentaire('/reservation/store', 'Admin\reservationController@store')->name('AdminreservationStore');
    Route::get('/reservation/{id}', 'Admin\reservationController@show')->name('AdminreservationShow');
    Route::get('/reservation/{id}/edit', 'Admin\reservationController@edit')->name('AdminreservationEdit');
    Route::commentaire('/reservation/{id}/update', 'Admin\reservationController@update')->name('AdminreservationUpdate');
    Route::get('/reservation/{id}/destroy', 'Admin\reservationController@destroy')->name('AdminreservationDestroy');

    Route::get('/commentaires', 'Admin\commentaireController@index')->name('AdmincommentaireIndex');
    Route::get('/commentaire/create', 'Admin\commentaireController@create')->name('AdmincommentaireCreate');
    Route::commentaire('/commentaire/store', 'Admin\commentaireController@store')->name('AdmincommentaireStore');
    Route::get('/commentaire/{id}', 'Admin\commentaireController@show')->name('AdmincommentaireShow');
    Route::get('/commentaire/{id}/edit', 'Admin\commentaireController@edit')->name('AdmincommentaireEdit');
    Route::commentaire('/commentaire/{id}/update', 'Admin\commentaireController@update')->name('AdmincommentaireUpdate');
    Route::get('/commentaire/{id}/destroy', 'Admin\commentaireController@destroy')->name('AdmincommentaireDestroy');
});

Auth::routes();
