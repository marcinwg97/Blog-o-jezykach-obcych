<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('/logout', 'UserController@logout');

Route::get('posts', 'PostController@index');
Route::post('posts', 'PostController@store');
Route::post('post/delete/{id}', 'PostController@destroy');
Route::post('post/{id}', 'PostController@update');
Route::get('/post/{id}', 'PostController@details');

Route::get('categories', 'CategoryController@index');
Route::get('ctgrs', 'CategoryController@listWithoutPagination');
Route::post('categories', 'CategoryController@store');
Route::post('category/delete/{id}', 'CategoryController@destroy');
Route::post('category/{id}', 'CategoryController@update');
Route::get('/category/{id}', 'CategoryController@details');

Route::get('static-sites', 'StaticSiteController@index');
Route::get('stc-sts', 'StaticSiteController@listWithoutPagination');
Route::post('static-sites', 'StaticSiteController@store');
Route::post('static-site/delete/{id}', 'StaticSiteController@destroy');
Route::post('static-site/{id}', 'StaticSiteController@update');
Route::get('/static-site/{id}', 'StaticSiteController@details');

Route::get('users', 'UserController@index');
Route::get('usrs', 'UserController@listWithoutPagination');
Route::post('users', 'UserController@store');
Route::post('user/delete/{id}', 'UserController@destroy');
Route::post('user/{id}', 'UserController@update');
Route::get('/user/{id}', 'UserController@details');

Route::get('messages', 'FormContactController@index');
Route::post('messages', 'FormContactController@store');
Route::post('message/delete/{id}', 'FormContactController@destroy');

Route::get('/category/{id}/{name}', 'CategoryController@getAllPostsByCategory');
