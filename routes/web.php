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

Auth::routes();
