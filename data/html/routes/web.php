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

Route::get('/restaurants', 'restaurantsController@index')->name('RestoIndex');
Route::get('/restaurants/{id}', 'restaurantsController@show')->name('RestoShow');

Route::get('/clients', 'clientsController@index')->name('CliIndex');
Route::get('/clients/{id}', 'clientsController@show')->name('CliShow');

Route::get('/reservations', 'reservationsController@index')->name('ResIndex');
Route::get('/reservations/{id}', 'reservationsController@show')->name('ResShow');

Route::get('/commentaires', 'commentairesController@index')->name('ComIndex');
Route::get('/commentaires/{id}', 'commentairesController@show')->name('ComShow');

/*Page par restaurants*/

Route::get('/PlanchaGourmande', 'laPlanchaGourmandeController@index')->name('PlanchaIndex');
Route::get('/PlanchaGourmande/{id}', 'laPlanchaGourmandeController@show')->name('PlanchaShow');

Route::get('/AubergeDeBagatelle', 'AubergeDeBagatelle@index')->name('BagatelleIndex');
Route::get('/AubergeDeBagatelle/{id}', 'AubergeDeBagatelle@show')->name('BagatelleShow');

Route::get('/TablierDeJaures', 'TablierDeJaures@index')->name('JauresIndex');
Route::get('/TablierDeJaures/{id}', 'TablierDeJaures@show')->name('JauresShow');

Route::get('/NezRouge', 'NezRouge@index')->name('NezIndex');
Route::get('/NezRouge/{id}', 'NezRouge@show')->name('NezShow');

Route::get('/UnDesSens', 'UnDesSens@index')->name('SensIndex');
Route::get('/UnDesSens/{id}', 'UnDesSens@show')->name('SensShow');

Route::get('/VieillePorte', 'VieillePorte@index')->name('VPorteIndex');
Route::get('/VieillePorte/{id}', 'VieillePorte@show')->name('VPorteShow');

Route::get('/Bellifontain', 'Bellifontain@index')->name('BelliIndex');
Route::get('/Bellifontain/{id}', 'Bellifontain@show')->name('BelliShow');

Route::get('/BistrotDesGourmets', 'BistrotDesGourmets@index')->name('BistrotIndex');
Route::get('/BistrotDesGourmets/{id}', 'BistrotDesGourmets@show')->name('BistrotShow');

Route::get('/GrenierASel', 'GrenierASel@index')->name('GrenierIndex');
Route::get('/GrenierASel/{id}', 'GrenierASel@show')->name('GrenierShow');

Route::get('/Lisboa', 'Lisboa@index')->name('LisboaIndex');
Route::get('/Lisboa/{id}', 'Lisboa@show')->name('LisboaShow');

Route::get('/ParvisSaintHilaire', 'ParvisSaintHilaire@index')->name('ParvisIndex');
Route::get('/ParvisSaintHilaire/{id}', 'ParvisSaintHilaire@show')->name('ParvisShow');

Route::get('/FontaineDesSaveurs', 'FontaineDesSaveurs@index')->name('FontaineIndex');
Route::get('/FontaineDesSaveurs/{id}', 'FontaineDesSaveurs@show')->name('FontaineShow');

/*Modification/Ajouts/Suppression*/

Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {
    Route::get('/clients', 'Admin\clientsController@index')->name('AdminCliIndex');
    Route::get('/clients/{id}', 'Admin\clientsController@show')->name('AdminClisShow');
    Route::get('/clients/{id}/edit', 'Admin\clientsController@edit')->name('AdminCliEdit');
    Route::post('/clients/{id}/update', 'Admin\clientsController@update')->name('AdminCliUpdate');
    Route::get('/clients/{id}/destroy', 'Admin\clientsController@destroy')->name('AdminCliDestroy');
    Route::get('/dashboard', 'Admin\clientsController@dashboard')->name('AdminCliDashboard');

    Route::get('/restaurants', 'Admin\PlanchaGourmandeController@index')->name('AdminRestoIndex');
    
    
    Route::get('/PlanchaGourmande/create', 'Admin\PlanchaGourmandeController@create')->name('AdminPlanchaCreate');
    Route::post('/PlanchaGourmande/store', 'Admin\PlanchaGourmandeController@store')->name('AdminPlanchaStore');
    Route::get('/PlanchaGourmande/{id}', 'Admin\PlanchaGourmandeController@show')->name('AdminPlanchaShow');
    Route::get('/PlanchaGourmande/{id}/edit', 'Admin\PlanchaGourmandeController@edit')->name('AdminPlanchaEdit');
    Route::post('/PlanchaGourmande/{id}/update', 'Admin\PlanchaGourmandeController@update')->name('AdminPlanchaUpdate');
    Route::get('/PlanchaGourmande/{id}/destroy', 'Admin\PlanchaGourmandeController@destroy')->name('AdminPlanchaDestroy');

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
