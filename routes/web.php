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

Route::group(['prefix' => 'swagger'], function () {
    Route::get('json', 'SwaggerController@getJSON');
    Route::get('my-data', 'SwaggerController@getMyData');
    Route::get('my-name', 'SwaggerController@getName');
    Route::get('my-age', 'SwaggerController@getAge');
    Route::post('login', 'SwaggerController@login');
});

Auth::routes();

Route::get('/', 'SwaggerController@getJSON');
