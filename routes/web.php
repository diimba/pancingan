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

Route::get('/', function () {
     return view('pages.home');
 })->middleware('checklog');
 

Route::get('home/{user_id}', 'HomeController@index')->name('home')->middleware('checklog');

Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('login', 'LoginController@showLogin')->name('login');

Route::post('register', 'LoginController@register')->name('register');

Route::post('auth', 'LoginController@authenticate')->name('auth');

Route::get('soal/{subtest}/{nomor}', 'SoalController@index')->name('view_soal')->middleware('checklog');

Route::post('store', 'JawabanController@store')->name('insert_jwb')->middleware('checklog');

Route::get('hitung/{user_id}', 'HasilController@hitung')->name('hitung_hasil')->middleware('checklog');

Route::get('hasil/{user_id}', 'RuleController@matching')->name('working_mem')->middleware('checklog');
