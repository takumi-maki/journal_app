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


Route::get('/welcome', function(){
    return view('welcome');
});

// 記事一覧ページを表示
Route::get('/','PostsController@index');

Auth::routes();

Route::get('/home', 'PostsController@index');


Route::get('/users/edit', 'UsersController@edit');

Route::post('/users/update', 'UsersController@update');

Route::get('/users/{user_id}', 'UsersController@show');


// post_typeを選択する画面を表示
Route::get('/posts/select', 'PostsController@selectType');

// post_type別の投稿画面を表示
Route::get('/posts/new/movie', 'PostsController@newMovie');

Route::get('/posts/new/book', 'PostsController@newBook');

// 確認ページでセッションに$postを保持
Route::post('/posts/confirm', 'PostsController@confirm');

// 確認ページで$postを保存
Route::post('/posts/send', 'PostsController@send');

// 投稿完了ページを表示
Route::get('/posts/thanks', 'PostsController@complete');

// 投稿記事を削除する
Route::get('/postsdelete/{post_id}', 'PostsController@destroy');

// 記事の詳細ページを表示
Route::resource('posts', 'PostsController', ['only' => ['show']]);

// likeを押す
Route::get('/posts/{post_id}/likes', 'LikesController@store');

// likeを消す
Route::get('/likes/{like_id}', 'LikesController@destroy');