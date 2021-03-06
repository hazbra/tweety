<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {
    Route::get('/tweets', 'TweetController@index')->name('tweets.index');
    Route::post('/tweets', 'TweetController@store');
    Route::post('/profiles/{user:name}/follow', 'FollowController@store');


});

Route::get('/profiles/{user:name}', 'ProfileController@show')->name('profile');

Auth::routes();
