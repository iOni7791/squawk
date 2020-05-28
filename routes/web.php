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

// Rutas sin logueo
Route::get('/', 'pages@index');
Route::get('/home', 'pages@index');
Route::get('/milogin', 'pages@milogin');
Route::get('/miregister', 'pages@miregister');
Route::post('/miregister', 'pages@index');

Route::get('/faq', 'pages@faq');
Route::get('/contact', 'pages@contact');

// Rutas con logueo
Route::get('/posts', 'pages@posts');
Route::get('/unpost/{mid}', 'pages@unpost');

Route::get('/editpost/{mid}', 'pages@editpost');

Route::post('/addpost', 'pages@addpost');
Route::post('/addcomment', 'pages@addcomment');

Route::get('/addlike/{postid}/{likeid}','pages@addLike')->name('addlike');

Route::get('/nest', 'pages@nest');
Route::get('/profile', 'pages@profile');
Route::get('/profile', 'pages@profile');
Route::get('/friends', 'pages@friends');
Route::get('/logout', 'pages@logout');


Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
