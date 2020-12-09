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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teacher', 'HomeController@teacher')->name('teacher');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController')->middleware('permission:role-create', ['only' => ['create','store']]);
    Route::resource('products','ProductController');
    Route::get('/users/{id}/fees', 'UserController@fees')->name('users.fee');
});