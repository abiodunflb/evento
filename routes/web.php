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

Auth::routes();
// Route::get('logout', 'LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('shows', 'ShowController@index')->name('shows.index');
// Route::get('shows/create', 'ShowController@create')->name('shows.create');
// Route::post('shows', 'ShowController@store')->name('shows.store');
// Route::get('shows/{$id}/edit', 'ShowController@edit')->name('shows.edit');
// Route::post('shows/{$id}', 'ShowController@update')->name('shows.update');
// Route::post('shows/{$id}', 'ShowController@destroy')->name('shows.destroy');
// Route::get('shows/{$id}', 'ShowController@show')->name('shows.show');
Route::get('/downloadPDF/{id}','ShowController@downloadPDF');

Route::resource('shows', 'ShowController');
Route::get('/test', function(){
    return view('test');
});



