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
  Route::get('vcard/{id}/edit', 'VcardController@edit');
  Route::get('vcard/create/{section?}/{id?}', 'VcardController@create');
  Route::post('vcard/about/store', 'VcardController@store');
  Route::get('vcard/{id}/delete', 'VcardController@destroy');

  //Service Route
  Route::post('vcard/create/service/{id}/store', 'VcardServiceController@store');
  Route::get('service/delete/{id}', 'VcardServiceController@destroy');


  // //gallery route
  Route::post('vcard/create/gallery/{id}/store', 'VcardGalleryController@store');
  Route::get('gallery/delete/{id}', 'VcardGalleryController@destroy');
});


Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});
