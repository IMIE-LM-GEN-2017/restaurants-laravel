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
Route::get('/restaurants/{id}/store', 'restaurantController@store')->name('RestoStore');
Route::get('/restaurants/{id}', 'restaurantController@show')->name('RestoShow');
Route::get('/restaurants/create', 'restaurantController@create')->name('RestoCreate');
Route::get('/restaurants/{id}', 'restaurantController@show')->name('RestoShow');
Route::get('/restaurants/{id}/edit', 'restaurantController@edit')->name('RestoEdit');
Route::post('/restaurants/{id}/update', 'restaurantController@update')->name('RestoUpdate');
Route::get('/restaurants/{id}/destroy', 'restaurantController@destroy')->name('RestoDestroy');

Route::get('/users', 'userController@index')->name('UserIndex');
Route::get('/users/{id}', 'userController@show')->name('UserShow');

Route::get('/reservation', 'reservationController@index')->name('ResIndex');
Route::get('/reservation/{id}', 'reservationController@show')->name('ResShow');

Route::get('/commentaire', 'commentaireController@index')->name('ComIndex');
Route::get('/commentaire/{id}', 'commentaireController@show')->name('ComShow');

/*Modification/Ajouts/Suppression*/

Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {
    Route::get('/user', 'Admin\userController@index')->name('AdminUserIndex');
    Route::get('/users', 'Admin\userController@index')->name('AdminUserStore');
    Route::get('/users/{id}', 'Admin\userController@show')->name('AdminUsersShow');
    Route::get('/users/{id}/edit', 'Admin\userController@edit')->name('AdminUserEdit');
    Route::post('/users/{id}/update', 'Admin\userController@update')->name('AdminUserUpdate');
    Route::get('/users/{id}/destroy', 'Admin\userController@destroy')->name('AdminUserDestroy');
    Route::get('/dashboard', 'Admin\userController@dashboard')->name('AdminUserDashboard');

    Route::get('/restaurants', 'Admin\restaurantController@index')->name('AdminRestoIndex');
    Route::get('/restaurants/create', 'Admin\restaurantController@create')->name('AdminRestoCreate');
    Route::post('/restaurants/store', 'Admin\restaurantController@store')->name('AdminRestoStore');
    Route::get('/restaurants/{id}', 'Admin\restaurantController@show')->name('AdminRestoShow');
    Route::get('/restaurants/{id}/edit', 'Admin\restaurantController@edit')->name('AdminRestoEdit');
    Route::post('/restaurants/{id}/update', 'Admin\restaurantController@update')->name('AdminRestoUpdate');
    Route::get('/restaurants/{id}/destroy', 'Admin\restaurantController@destroy')->name('AdminRestoDestroy');

    Route::get('/reservations', 'Admin\reservationController@index')->name('AdminResIndex');
    Route::get('/reservations/create', 'Admin\reservationController@create')->name('AdminResCreate');
    Route::post('/reservations/store', 'Admin\reservationController@store')->name('AdminResStore');
    Route::get('/reservations/{id}', 'Admin\reservationController@show')->name('AdminResShow');
    Route::get('/reservations/{id}/edit', 'Admin\reservationController@edit')->name('AdminResEdit');
    Route::post('/reservations/{id}/update', 'Admin\reservationController@update')->name('AdminResUpdate');
    Route::get('/reservations/{id}/destroy', 'Admin\reservationController@destroy')->name('AdminResDestroy');

    Route::get('/commentaires', 'Admin\commentaireController@index')->name('AdminComIndex');
    Route::get('/commentaires/create', 'Admin\commentaireController@create')->name('AdminComCreate');
    Route::post('/commentaires/store', 'Admin\commentaireController@store')->name('AdminComStore');
    Route::get('/commentaires/{id}', 'Admin\commentaireController@show')->name('AdminComShow');
    Route::get('/commentaires/{id}/edit', 'Admin\commentaireController@edit')->name('AdminComEdit');
    Route::post('/commentaires/{id}/update', 'Admin\commentaireController@update')->name('AdminComUpdate');
    Route::get('/commentaires/{id}/destroy', 'Admin\commentaireController@destroy')->name('AdminComDestroy');

    Route::post('/contacts', 'ContactController@send')->name('contact');
});

Auth::routes();
