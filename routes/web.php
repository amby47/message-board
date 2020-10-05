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

Route::get('/messages', 'App\Http\Controllers\MessageController@get');
Route::post('/message', 'App\Http\Controllers\MessageController@create');

Route::get('/message/{messageId}/replies', 'App\Http\Controllers\MessageRepliesController@get');
Route::post('/message/{messageId}/reply', 'App\Http\Controllers\MessageRepliesController@create');
