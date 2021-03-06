<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/test', 'PostController@test');
Route::get('/hello', 'PostController@hello');
// Route::get('/posts', 'PostController@posts')->name('posts');

Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/feed', 'PostFeedController@index')->name('posts.feed');

Route::resource('posts', 'PostController')->only('show');
Route::resource('users', 'UserController')->only('show');

Route::get(
  'newsletter-subscriptions/unsubscribe', 
  'NewsletterSubscriptionController@unsubscribe'
)->name('newsletter-subscriptions.unsubscribe');
