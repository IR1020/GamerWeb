<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TopPageController@get');

Route::get('/touroku', 'App\Http\Controllers\TourokuController@get');
Route::post('/touroku', 'App\Http\Controllers\TourokuController@post');

Route::get('/login', 'App\Http\Controllers\LoginController@get');
Route::post('/login', 'App\Http\Controllers\LoginController@post');

Route::get('/mypage', 'App\Http\Controllers\MyPageController@get');

Route::get('/chat', 'App\Http\Controllers\ChatController@get');

Route::get('/chat_room', 'App\Http\Controllers\ChatRoomController@get');
