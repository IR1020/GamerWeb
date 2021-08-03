<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TopPageController@get');

Route::get('/sign_up', 'App\Http\Controllers\SignUpController@get');
Route::post('/sign_up', 'App\Http\Controllers\SignUpController@post');

Route::get('/login', 'App\Http\Controllers\LoginController@get');
Route::post('/login', 'App\Http\Controllers\LoginController@post');

Route::get('/my_page', 'App\Http\Controllers\MyPageController@get');
// Route::get('/my_page/{user_id}', 'App\Http\Controllers\MyPageController@get');

Route::get('/chat', 'App\Http\Controllers\ChatController@get');

Route::get('/chat_room', 'App\Http\Controllers\ChatRoomController@get');
