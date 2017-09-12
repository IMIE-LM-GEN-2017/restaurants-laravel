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

Route::get('/client', 'clientController@index')->name('CliIndex');
Route::get('/client/{id}', 'clientController@show')->name('CliShow');

Route::get('/reservation', 'reservationController@index')->name('ResIndex');
Route::get('/reservation/{id}', 'reservationController@show')->name('ResShow');

Route::get('/commentaire', 'commentaireController@index')->name('ComIndex');
Route::get('/commentaire/{id}', 'commentaireController@show')->name('ComShow');

/*Page par restaurant*/

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
    Route::get('/client', 'Admin\clientController@index')->name('AdminCliIndex');
    Route::get('/client/{id}', 'Admin\clientController@show')->name('AdminClisShow');
    Route::get('/client/{id}/edit', 'Admin\clientController@edit')->name('AdminCliEdit');
    Route::post('/client/{id}/update', 'Admin\clientController@update')->name('AdminCliUpdate');
    Route::get('/client/{id}/destroy', 'Admin\clientController@destroy')->name('AdminCliDestroy');
    Route::get('/dashboard', 'Admin\clientController@dashboard')->name('AdminCliDashboard');

    Route::get('/restaurant', 'Admin\restaurantController@index')->name('AdminRestoIndex');
    Route::get('/restaurant/{id}', 'Admin\restaurantController@show')->name('AdminRestoShow');
    Route::get('/restaurant/{id}/edit', 'Admin\restaurantController@edit')->name('AdminRestoEdit');
    Route::post('/restaurant/{id}/update', 'Admin\restaurantController@update')->name('AdminRestoUpdate');
    Route::get('/restaurant/{id}/destroy', 'Admin\restaurantController@destroy')->name('AdminRestoDestroy');
    Route::get('/dashboard', 'Admin\restaurantController@dashboard')->name('AdminRestoDashboard');



    Route::get('/restaurant', 'Admin\PlanchaGourmandeController@index')->name('AdminRestoIndex');
    
    
    Route::get('/PlanchaGourmande/create', 'Admin\PlanchaGourmandeController@create')->name('AdminPlanchaCreate');
    Route::post('/PlanchaGourmande/store', 'Admin\PlanchaGourmandeController@store')->name('AdminPlanchaStore');
    Route::get('/PlanchaGourmande/{id}', 'Admin\PlanchaGourmandeController@show')->name('AdminPlanchaShow');
    Route::get('/PlanchaGourmande/{id}/edit', 'Admin\PlanchaGourmandeController@edit')->name('AdminPlanchaEdit');
    Route::post('/PlanchaGourmande/{id}/update', 'Admin\PlanchaGourmandeController@update')->name('AdminPlanchaUpdate');
    Route::get('/PlanchaGourmande/{id}/destroy', 'Admin\PlanchaGourmandeController@destroy')->name('AdminPlanchaDestroy');

    Route::get('/reservation', 'Admin\reservationController@index')->name('AdminResIndex');
    Route::get('/reservation/create', 'Admin\reservationController@create')->name('AdminResCreate');
    Route::post('/reservation/store', 'Admin\reservationController@store')->name('AdminResStore');
    Route::get('/reservation/{id}', 'Admin\reservationController@show')->name('AdminResShow');
    Route::get('/reservation/{id}/edit', 'Admin\reservationController@edit')->name('AdminResEdit');
    Route::post('/reservation/{id}/update', 'Admin\reservationController@update')->name('AdminResUpdate');
    Route::get('/reservation/{id}/destroy', 'Admin\reservationController@destroy')->name('AdminResDestroy');

    Route::get('/commentaire', 'Admin\commentaireController@index')->name('AdminComIndex');
    Route::get('/commentaire/create', 'Admin\commentaireController@create')->name('AdminComCreate');
    Route::post('/commentaire/store', 'Admin\commentaireController@store')->name('AdminComStore');
    Route::get('/commentaire/{id}', 'Admin\commentaireController@show')->name('AdminComShow');
    Route::get('/commentaire/{id}/edit', 'Admin\commentaireController@edit')->name('AdminComEdit');
    Route::post('/commentaire/{id}/update', 'Admin\commentaireController@update')->name('AdminComUpdate');
    Route::get('/commentaire/{id}/destroy', 'Admin\commentaireController@destroy')->name('AdminComDestroy');

    Route::post('/contacts', 'ContactController@send')->name('contact');
});

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
