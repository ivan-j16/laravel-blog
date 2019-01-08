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


Route::get('/','PagesController@getHome');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');



//Messages
Route::get('/messages','MessagesController@getMessages');
Route::post('/contact/submit','MessagesController@submit');

//User and admin auth routes
Auth::routes();

//User dashboard
Route::get('/dashboard', 'DashboardController@index');

//User profile pages
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

//Resource controller for the posts
Route::get('posts/search','PostsController@search');
Route::resource('posts','PostsController');
Route::get('posts/downloadPDF/{id}','PostsController@downloadPDF');




//Admin
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::delete('/deletePost/{id}','AdminController@destroyPost');
    Route::delete('/deleteUser/{id}','AdminController@destroyUser');
    Route::get('/exportEXC', 'AdminController@exportExcel');
    Route::get('/exportCSV', 'AdminController@exportCSV');
});


