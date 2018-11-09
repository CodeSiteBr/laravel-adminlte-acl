<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index');

    Route::get('/dashboard', 'HomeController@dashboard');
});

Route::get('meu-perfil', 'ProfileController@edit')->name('profile.edit');
Route::post('atualizar-perfil', 'ProfileController@update')->name('profile.update');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Auth::routes();
