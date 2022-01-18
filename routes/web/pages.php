<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ViewController@index')->name('views.index');
Route::get('/roadmap', 'ViewController@roadmap')->name('views.roadmap');
Route::get('/speedruns', 'ViewController@speedruns')->name('views.speedruns');
Route::get('/records', 'ViewController@records')->name('views.records');
Route::get('/contact', 'ViewController@contact')->name('views.contact');

// Route::get('/main', 'BaseController@index')->name('main');
