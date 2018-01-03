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

Route::get('/', 'HomeController@getHome')->name('home');

Route::get('/login', 'HomeController@getLogin')->name('login');
Route::post('/login', 'HomeController@postLogin')->name('login');
Route::get('/logout', 'HomeController@getLogOut')->name('logout');

Route::get('/productos/listado', 'ProductosController@getProductos')
        ->name('prod.listado')
        ->middleware('auth');
