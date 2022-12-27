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

Route::prefix('league')->group(function() {
    Route::get('/', 'LeagueController@index');
});

Route::prefix('football_match')->group(function() {
    Route::get('/', 'FootballMatchController@index')->name('football_match.index');
    Route::get('/create', 'FootballMatchController@create')->name('football_match.create');
    Route::post('/store', 'FootballMatchController@store')->name('football_match.store');

});

Route::prefix('team')->group(function() {
    Route::get('/', 'TeamController@index')->name('team.index');
    Route::get('/create', 'TeamController@create')->name('team.create');
    Route::post('/store', 'TeamController@store')->name('team.store');

});