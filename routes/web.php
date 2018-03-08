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
Route::get('/tasks', 'TasksController@index')->name('tasks');
Route::get('/projects','ProjectsController@index')->name('projects');
Route::get('/categories','CategoriesController@index')->name('categories');
Route::get('/reports','ReportsController@index')->name('reports');
