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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('dBConfigs', 'DBConfigController');

Route::resource('models', 'ModelController');

Route::resource('fields', 'FieldController');

Route::resource('menus', 'MenuController');

Route::resource('dBConfigs', 'DBConfigController');

Route::resource('dtConfigs', 'DtConfigController');

Route::resource('cRUDConfigs', 'CRUDConfigController');

Route::resource('dTConfigs', 'DTConfigController');

Route::resource('relations', 'RelationController');

Route::resource('langs', 'LangController');

Route::resource('translationFiles', 'TranslationFileController');

Route::resource('translations', 'TranslationController');