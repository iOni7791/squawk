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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'pages@index');
Route::get('/milogin', 'pages@milogin');
Route::get('/miregister', 'pages@miregister');
Route::get('/faq', 'pages@faq');
Route::get('/contact', 'pages@contact');
//Route::get('/newPost', 'pages@contact');
Route::get('/posts', 'pages@posts');
Route::get('/friends', 'pages@friends');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

