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

Route::middleware(['auth'])->group(function () {
    Route::get('/','ToDoController@index');
    Route::get('/editar{id}','ToDoController@editar')->name('editar');
    Route::get('/borrar{id}','ToDoController@borrar')->name('borrar');
    Route::post('/update{id}','ToDoController@update')->name('update');
    Route::post('/store','ToDoController@store')->name('store');
});



Auth::routes();

