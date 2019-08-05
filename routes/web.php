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

Route::get('/', function () {
  return view('welcome');
});

// Route::get('login', 'AdminController@login');
Route::get('login', 'AdminController@getLogin')->name('login');
Route::post('login', 'AdminController@postLogin');
Route::get('register', 'AdminController@register');
Route::get('logout', 'AdminController@logout')->name('logout');


// Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/', 'DashboardController@index')->name('dashboard');
  Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index');
    Route::get('create', 'UserController@create');
    Route::post('create', 'UserController@store')->name('user.store');
    Route::get('edit/{id}', 'UserController@edit');
    Route::put('edit/{id}', 'Usercontroller@update')->name('user.update');
    Route::delete('delete/{id}', 'UserController@destroy');
  });
});

Route::get('/home', 'HomeController@index')->name('home');
