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
    Route::post('store', 'UsersController@store')->name('users.store');
});





