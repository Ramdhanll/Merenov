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

Auth::routes();
Route::get('/', function () {
    return view('home');
});

Route::get('/service/{service}', 'ServiceController@create');
Route::post('/service', 'ServiceController@store')->name('service.store');
Route::get('/success', function() {
    return view('success');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/index');
    });
    Route::get('/service', 'AdminController@service');
    Route::get('/service/${id}', 'AdminController@show')->name('service.show');
    Route::delete('/service/${id}', 'AdminController@destroy')->name('service.destroy');
});


// Route::get('/home', 'HomeController@index')->name('home');
