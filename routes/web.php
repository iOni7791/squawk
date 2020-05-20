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
Route::get('/login', 'pages@login');
Route::get('/register', 'pages@register');
Route::get('/faq', 'pages@faq');
Route::get('/contact', 'pages@contact');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

