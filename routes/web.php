<?php

use App\Http\Controllers\PhixelnetController;
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

Route::get('/',function(){
    return view('home');
});

//Start routing here


//Route::get('home', 'App\Http\Controllers\PhixelnetController@view');
//Route::get('home','App\Http\Controllers\Auth\PhixelnetController@view')->name('home');
//Route::get('/home', [PhixelnetController::class, 'view']);
//Route::get('home', 'PhixelnetContoller@view');
//Route::get('/home','PhixelnetContoller@view');

