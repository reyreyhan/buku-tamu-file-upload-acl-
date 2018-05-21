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

Route::get('/masuk','MasukController@index');
Route::post('/masuk/action','MasukController@action');
Route::get('/masuk/logout','MasukController@logout');

Route::get('/admin','AdminController@index')->middleware('CheckSession','Admin');
Route::post('/admin/store','AdminController@store')->middleware('CheckSession','Admin');
Route::get('/admin/edit/{id}','AdminController@edit')->middleware('CheckSession','Admin');
Route::put('/admin/update/{id}','AdminController@update')->middleware('CheckSession','Admin');
Route::delete('/admin/delete/{id}','AdminController@delete')->middleware('CheckSession','Admin');

Route::get('/profile','ProfileController@index')->middleware('CheckSession');
Route::put('/profile/update/{id}','ProfileController@update')->middleware('CheckSession');

Route::get('/visitor','VisitorController@index')->middleware('CheckSession');
Route::post('/visitor/store','VisitorController@store')->middleware('CheckSession');
Route::get('/visitor/edit/{id}','VisitorController@edit')->middleware('CheckSession');
Route::put('/visitor/update/{id}','VisitorController@update')->middleware('CheckSession');
Route::get('/visitor/detail/{id}','VisitorController@detail')->middleware('CheckSession');
Route::delete('/visitor/delete/{id}','VisitorController@delete')->middleware('CheckSession');
