<?php

use Illuminate\Support\Facades\Route;

require base_path('routes/web/pages.php');

Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('/', 'BaseController@index')->name('management.ranks')->middleware(['auth', 'role:ADMIN']);

//Route::post('/management/ranks/new', 'Management\RankController@create')->name('management.ranks.create')->middleware(['auth', 'role:ADMIN']);
