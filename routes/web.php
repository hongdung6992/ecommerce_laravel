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

Route::get('login', 'AdminController@getLogin')->name('login');
Route::post('login', 'AdminController@postLogin');
Route::get('register', 'AdminController@register');
Route::get('logout', 'AdminController@logout')->name('logout');


// Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/', 'DashboardController@index')->name('dashboard');
  Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('create', 'UserController@create')->name('user.create');
    Route::post('create', 'UserController@store')->name('user.store');
    Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
    Route::put('edit/{id}', 'UserController@update')->name('user.update');
    Route::delete('delete', 'UserController@destroy')->name('user.delete');
    Route::delete('multiple-delete', 'UserController@multipleDestroy')->name('user.multipleDelete');
  });

  Route::group(['prefix' => 'category'], function () {
    Route::get('/', 'CategoryController@index')->name('category.index');
    // Route::get('create', 'CategoryController@create')->name('category.create');
    Route::post('create', 'CategoryController@store')->name('category.store');
    Route::get('edit', 'CategoryController@edit')->name('category.edit');
    Route::put('edit', 'CategoryController@update')->name('category.update');
    Route::delete('delete', 'CategoryController@destroy')->name('category.delete');
    Route::delete('multiple-delete', 'CategoryController@multipleDestroy')->name('category.multipleDelete');
    Route::put('move', 'CategoryController@move')->name('category.move');
  });
});

Route::get('/home', 'HomeController@index')->name('home');
