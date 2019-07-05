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

Route::get('/', 'pagescontroller@index');

Route::get('/monthely', 'pagescontroller@month');

Route::resource('/fix', 'fixcontroller');

Route::resource('/accedant','accedantcontroller');

Route::resource('/departments','departscontroller');

Route::resource('/credit','creditcontroller');


