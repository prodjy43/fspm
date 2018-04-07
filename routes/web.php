<?php

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

Route::get('/', 'PagesController@index')->name('Index');
Route::get('/presentation','PagesController@presentation')->name('Presentation');
Route::get('/comite','PagesController@comite')->name('Comite');
Route::get('/section','SectionController@index')->name('Section');
Route::get('/section/{id}','SectionController@section')->name('Sous-Section');
Route::get('/status', 'PagesController@statuts')->name('Statuts');
Route::get('/partenaire', 'PagesController@partenaire')->name('Partenaire');
Route::get('/maitrise',  'PagesController@maitrise')->name('Maitrise');
Route::get('/afcmt', 'PagesController@afcmt')->name('AFCMT');
Route::get('/polymecanicien', 'PagesController@polymecanicien')->name('Polymecanicien');
Route::get('/offre-d-emplois', 'PagesController@offreEmplois')->name('Offre emplois');
Route::get('/apprentissage', 'PagesController@apprentissage')->name('Apprentissages');
Route::get('/shop', 'PagesController@shop')->name('Shop');
Route::get('/post', 'PagesController@post')->name('News');
Route::get('/journaux', 'PagesController@journaux')->name('Jounaux');
Route::get('/revue', 'PagesController@revue')->name('Revue');
Route::get('/experts', 'PagesController@experts')->name('Experts examens');
Route::get('/agenda', 'PagesController@agenda')->name('Agenda');
Route::get('/publicite', 'PagesController@publicite')->name('Publicite');
Route::get('/contact', 'PagesController@contact')->name('Contact');
Route::get('/social', 'PagesController@social')->name('Social');
Auth::routes();
