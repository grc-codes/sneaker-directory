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

// Static Pages

Route::get('/', 'StaticPagesController@home');
Route::get('/collection', 'StaticPagesController@collection');
Route::get('/product', 'StaticPagesController@product');
Route::get('/brand', 'StaticPagesController@brand');