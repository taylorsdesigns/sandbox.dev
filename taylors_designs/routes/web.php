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

Route::get('/', 'HomeController@index');

Route::get('/work', 'WorkController@index');

Route::get('/resume', 'ResumeController@index');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::post('/contact', 'ContactController@submit');