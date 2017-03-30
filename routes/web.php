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

Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');

Route::group(['namespace' => 'Admin', 'middleware'=>'auth.admin:admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');
    Route::resource('sys/menus', 'MenusController');
    Route::resource('sys/permissions', 'PermissionsController');
    Route::resource('sys/admins', 'AdminsController');
    Route::put('sys/admins/{id}/active', 'AdminsController@active')->name('admins.active');
    Route::resource('sys/settings', 'SettingsController');

    Route::resource('sys/roles', 'RolesController', ['only' => ['index', 'store', 'destroy']]);
    Route::get('sys/roles/{id}/permissions', 'RolesController@permissions')->name('roles.permissions');
    Route::post('sys/roles/{id}/permissions', 'RolesController@perm')->name('roles.perm.store');
    Route::get('sys/roles/{id}/users', 'RolesController@users')->name('roles.users');

});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
