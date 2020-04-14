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

// Auth::routes(['verify' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
    'uses' => 'PagesController@index',
    'as'   => 'main'
]);

Route::get('/about', [
    'uses' => 'PagesController@about',
    'as'   => 'about'
]);

Route::get('/contact', [
    'uses' => 'PagesController@contact',
    'as'   => 'contact'
]);


Route::get('/blog/{post}', [
    'uses' => 'BlogController@show',
    'as'   => 'blog.show'
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as'   => 'blog.comments'
]);

Route::get('/category/{category}', [
    'uses' => 'BlogController@category',
    'as'   => 'category'
]);

Route::get('/author/{author}', [
    'uses' => 'BlogController@author',
    'as'   => 'author'
]);
Route::resource('/categories', 'CategoryController', ['as' => 'backend']);

Route::resource('/blogs', 'BlogController', ['as' => 'backend']);
Route::get('/blgs', 'BlogController@blogs')->name('blgs');