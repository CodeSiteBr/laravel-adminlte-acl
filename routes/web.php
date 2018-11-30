<?php

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function () {
        $this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::resource('users', 'UserController');
            Route::resource('roles', 'RoleController');
            Route::resource('permissions', 'PermissionController');

            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/home', 'HomeController@index');
        });

        Route::get('meu-perfil', 'Admin\ProfileController@edit')->name('profile.edit');
        Route::post('meu-perfil', 'Admin\ProfileController@update')->name('profile.update');

        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/home', 'HomeController@index');

        Auth::routes();
    }
);

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
