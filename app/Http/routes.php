<?php

Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');

Route::get('login', 'Auth\AuthController@getLogin')->name('login.get');
Route::post('login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout.get');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('tasks', 'TasksController', ['only' => ['create', 'store', 'destroy', 'show', 'edit', 'update']]);
});

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController', ['only' => ['index']]);