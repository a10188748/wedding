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

Route::get('/', 'IndexController@index');

Route::get('/about', 'AboutController@index');

Route::get('/events_1', 'EventsController@wedding');
Route::get('/events_2', 'EventsController@selfwedding');
Route::get('/events_3', 'EventsController@overwedding');
Route::get('/events_4', 'EventsController@pregnancy');
Route::get('/events_5', 'EventsController@baby');



Route::get('/events_get', 'EventsController@get_event');

Route::get('/gallery', 'GalleryController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/service_1', 'ServiceController@serwedding');
Route::get('/service_2', 'ServiceController@serselfwedding');
Route::get('/service_3', 'ServiceController@seroverwedding');
Route::get('/service_4', 'ServiceController@serpregnancy');
Route::get('/service_5', 'ServiceController@serbaby');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
