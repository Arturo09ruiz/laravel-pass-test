<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect('/', 'inicio-de-sesion', 301);

Route::get('inicio-de-sesion', 'Web\LoginController@index')->name('login-sesion');

Route::get('panel-administrativo', 'Admin\IndexController@index')->name('admin-panel');

Route::resource('usuarios', 'Admin\UsersController');

