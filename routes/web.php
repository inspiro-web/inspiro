<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'FrontController@index')->name('front.index');

Route::post('/sendfeedback', 'FrontController@sendFeedback')->name('front.sendFeedback');

Auth::routes();

Route::get('/cabinet', 'HomeController@index')->name('front.cabinet');
