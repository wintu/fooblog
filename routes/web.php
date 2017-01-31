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

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Posts;

Route::get('/','PostsController@index');
Route::get('/post/{id}', function($id) { return view('posts.pages', ['post' => Posts::find($id)]); });

Route::get('/admin','AdminController@index');
Route::get('/admin/create_post', 'AdminController@createPage');
Route::post('/admin/create', 'AdminController@create');
Route::get('/admin/delete/{id}', 'AdminController@delete');
Route::get('/admin/edit/{id}', 'AdminController@editPage');
Route::post('/admin/edit', 'AdminController@edit');

Route::get('/auth/login', function() { return view('auth.index'); });
Route::post('/auth/login', 'AuthController@login');
Route::get('/auth/logout', 'AuthController@logout');
