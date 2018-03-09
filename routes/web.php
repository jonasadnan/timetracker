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

Auth::routes();

Route::get('/', 'HomeController@index')->name('root');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('tasks')->middleware('auth')->group(function () {
    Route::get('/', 'TasksController@index')->name('tasks.index');
	Route::get('create', 'TasksController@create')->name('tasks.create');
	Route::get('{task}/edit', 'TasksController@edit')->name('tasks.edit');
	Route::post('store', 'TasksController@store')->name('tasks.store');
	Route::post('{task}/update', 'TasksController@update')->name('tasks.update');
	Route::post('{task}/delete', 'TasksController@destroy')->name('tasks.delete');
});

Route::prefix('projects')->middleware('auth')->group(function () {
    Route::get('/','ProjectsController@index')->name('projects.index');
});

Route::prefix('categories')->middleware('auth')->group(function () {
    Route::get('/','CategoriesController@index')->name('categories.index');
});

Route::prefix('reports')->middleware('auth')->group(function () {
    Route::get('/','ReportsController@index')->name('reports.index');
});

Route::prefix('users')->middleware('auth')->group(function () {
    Route::get('/', 'UsersController@index')->name('users.index');
    Route::get('create', 'UsersController@create')->name('users.create');
    Route::get('{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::post('store', 'UsersController@store')->name('users.store');
    Route::post('{user}/update', 'UsersController@update')->name('users.update');
    Route::post('{user}/delete', 'UsersController@destroy')->name('users.delete');
});





