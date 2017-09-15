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
/*Pages principales*/

Route::get('/restaurant', 'restaurantController@index')->name('RestoIndex');
Route::get('/restaurant/{id}', 'restaurantController@show')->name('RestoShow');

Route::get('/users', 'userController@index')->name('UserIndex');
Route::get('/users/{id}', 'userController@show')->name('UserShow');

Route::get('/reservation', 'reservationController@index')->name('ResIndex');
Route::get('/reservation/{id}', 'reservationController@show')->name('ResShow');

Route::get('/commentaire', 'commentaireController@index')->name('ComIndex');
Route::get('/commentaire/{id}', 'commentaireController@show')->name('ComShow');

/*Modification/Ajouts/Suppression*/

Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {
    Route::get('/users', 'Admin\userController@index')->name('AdminUserIndex');
    Route::get('/users', 'Admin\userController@index')->name('AdminUserStore');
    Route::get('/users/{id}', 'Admin\userController@show')->name('AdminUsersShow');
    Route::get('/users/{id}/edit', 'Admin\userController@edit')->name('AdminUserEdit');
    Route::post('/users/{id}/update', 'Admin\userController@update')->name('AdminUserUpdate');
    Route::get('/users/{id}/destroy', 'Admin\userController@destroy')->name('AdminUserDestroy');
    Route::get('/dashboard', 'Admin\userController@dashboard')->name('AdminUserDashboard');

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
