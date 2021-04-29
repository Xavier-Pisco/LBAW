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
// Home
Route::get('/', 'Auth\HomeController@home')->name('home');

//Users
Route::get('user/{id}', 'UserController@show');
Route::post('api/user', 'UserController@getUserInfo');
Route::put('api/user', 'UserController@create');
Route::delete('api/user/{id}', 'UserController@delete');
//Route::get('users', 'UserController@search');

//Links
Route::get('api/link', 'LinkController@showUserLinks');
Route::post('api/link', 'LinkController@create');

//Posts
Route::get('post/{id}', 'PostController@show');
Route::get('api/post', 'PostController@showPostInfo');
Route::post('api/post', 'PostController@create');
Route::delete('api/post/{id}', 'PostController@delete');
Route::put('api/post/{id}', 'PostController@update');
//Route::get('posts', 'PostController@search');

//Likes
Route::get('api/like/{id}', 'LikeController@getLikesDislikes');
Route::put('api/like/{id}', 'LikeController@likeDislike');
Route::delete('api/like/{id}', 'LikeController@delete');

//Reports
Route::post('api/post/report/{id}', 'ReportController@reportPost');
Route::post('api/comment/report/{id}', 'ReportController@reportComment');

//Comments
Route::get('api/comment', 'CommentController@showCommentsFromPost');
Route::post('api/comment', 'CommentController@create');
Route::delete('api/comment/{id}', 'CommentController@delete');
Route::put('api/comment/{id}', 'CommentController@update');

//Groups
Route::get('group/{id}', 'GroupController@getInfo');
Route::get('group', 'GroupController@show');
Route::get('api/group', 'GroupController@getUserGroups');
Route::post('api/group', 'GroupController@create');
//Route::get('groups', 'GroupController@search');
/*
// Cards
Route::get('cards', 'CardController@list');
Route::get('cards/{id}', 'CardController@show');

// API
Route::put('api/cards', 'CardController@create');
Route::delete('api/cards/{card_id}', 'CardController@delete');
Route::put('api/cards/{card_id}/', 'ItemController@create');
Route::post('api/item/{id}', 'ItemController@update');
Route::delete('api/item/{id}', 'ItemController@delete');
*/
// Static pages
Route::get('about', 'StaticController@about')->name('about');
Route::get('faq', 'StaticController@faq')->name('faq');

// Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');