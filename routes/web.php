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
Route::group(['middleware' => ['auth.admin']], function() {
    Route::get('/admin', 'admin\AdminTopController@show');
    Route::post('/admin/logout', 'admin\AdminLogoutController@logout');
    Route::get('/admin/user_list', 'admin\ManageUserController@showUserList');
    Route::get('/admin/user/{id}', 'admin\ManageUserController@showUserDetail');
});

Route::get('/admin/login', 'admin\AdminLoginController@showLoginForm');
Route::post('/admin/login', 'admin\AdminLoginController@login');

Route::get('/','PostsController@index');
Auth::routes();

Route::get('/users/edit', 'UsersController@edit');
Route::post('/users/update', 'UsersController@update');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{user_id}', 'UsersController@show');
