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

Route::get('todo', 'testcontroller@index')->name("home");
Route::get('todo/{id}/details', 'testcontroller@getById')->name("getbyid");
Route::get('todo/finished', 'testcontroller@finishedtodo')->name("finished_todo");
Route::get('todo/new', 'testcontroller@new')->name("new_todo");
Route::post('todo/new', 'testcontroller@add')->name("add_todo");
Route::get('todo/{id}/edit', 'testcontroller@edit')->name("edit_todo");
Route::post('todo/{id}/edit', 'testcontroller@update')->name("update_todo");
Route::get('todo/{id}/delete', 'testcontroller@delete')->name("delete_todo");