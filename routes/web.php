<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TopPageController@get');

Route::get('/sign-up', 'App\Http\Controllers\SignUpController@get');
Route::post('/sign-up', 'App\Http\Controllers\SignUpController@post');

Route::get('/login', 'App\Http\Controllers\LoginController@get');
Route::post('/login', 'App\Http\Controllers\LoginController@post');

Route::get('/my-page/{id}', 'App\Http\Controllers\MyPageController@get');

Route::get('/chat', 'App\Http\Controllers\ChatController@get');

Route::get('/chat_room', 'App\Http\Controllers\ChatRoomController@get');
