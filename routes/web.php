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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['auth']], function () {
  Route::get('vcard', 'VcardController@index');
  Route::get('vcard/create/{section?}/{id?}', 'VcardController@create');
  Route::post('vcard/about/store', 'VcardController@store');
});


Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});


 
