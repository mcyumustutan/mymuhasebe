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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Giderler/liste', 'GiderlerController@liste')->name('GiderlerListesi');
Route::get('/Giderler/ekle', 'GiderlerController@ekle');
Route::post('/Giderler/saveGider', 'GiderlerController@saveGider')->name('saveGider');
Route::get('/Giderler/deleteGider', 'GiderlerController@deleteGider')->name('deleteGider');
