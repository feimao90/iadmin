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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('test', 'HomeController@index')->name('admin.test');

    Route::resource('sys/menus', 'MenusController');
    Route::resource('sys/permissions', 'PermissionsController');
    Route::resource('sys/admins', 'AdminsController');
    Route::resource('sys/settings', 'SettingsController');

    Route::resource('sys/roles', 'RolesController', ['only' => ['index', 'store', 'destroy']]);
    Route::get('sys/roles/{id}/permissions', 'RolesController@permissions')->name('roles.permissions');
    Route::get('sys/roles/{id}/users', 'RolesController@users')->name('roles.users');

//    Route::get('sys/menus/test', 'MenusController@test');
});