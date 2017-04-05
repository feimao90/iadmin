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
Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::group(['namespace' => 'Admin', 'middleware'=>'auth.admin:admin'], function () {
    //后台首页
    Route::get('/', 'HomeController@index')->name('admin.home');

    //菜单管理
    Route::resource('sys/menus', 'MenusController');
    //权限管理
    Route::resource('sys/permissions', 'PermissionsController');
    //管理员管理
    Route::resource('sys/admins', 'AdminsController');
    Route::put('sys/admins/{id}/active', 'AdminsController@active')->name('admins.active');
    //网站设置
    Route::resource('sys/settings', 'SettingsController');
    //角色管理
    Route::resource('sys/roles', 'RolesController', ['only' => ['index', 'store', 'destroy']]);
    Route::get('sys/roles/{id}/permissions', 'RolesController@permissions')->name('roles.permissions');
    Route::post('sys/roles/{id}/permissions', 'RolesController@perm')->name('roles.perm.store');
    Route::get('sys/roles/{id}/users', 'RolesController@users')->name('roles.users');

    //我的
    Route::get('admin/{id}/history', 'HomeController@loginHistory')->name('admin.login.history');

});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
