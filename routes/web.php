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
Route::get('/', 'PageController@index');
Route::get('/home', 'PageController@index');
Route::get('/milogin', 'PageController@milogin');
Route::get('/miregister', 'PageController@miregister');
Route::post('/miregister', 'PageController@index');

Route::get('/faq', 'PageController@faq');
Route::get('/contact', 'PageController@contact');

// Rutas con logueo
Route::get('/posts', 'PostsController@posts');
Route::get('/unpost/{mid}', 'PostsController@unpost');

Route::get('/editpost/{mid}', 'PostsController@editpost');

Route::post('/addpost', 'PostsController@addpost');
Route::post('/addcomment', 'PostsController@addcomment');

Route::get('/addlike/{postid}/{likeid}','PostsController@addLike')->name('addlike');

Route::get('/nest', 'UsersController@nest');
Route::get('/nest/{id}', 'UsersController@nest');
Route::get('/profile', 'UsersController@profile');
Route::post('/editdata', 'UsersController@editdata');
Route::get('/passreset', 'UsersController@passreset');
Route::get('/logout', 'UsersController@logout');

Route::get('/friends/{id?}', 'FriendsController@friends');
Route::get('/addfriend/{id?}', 'FriendsController@add');
Route::get('/delfriend/{id?}', 'FriendsController@del');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
