<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TopPageController@get');

Route::get('/sign_up', 'App\Http\Controllers\SignUpController@get');
Route::post('/sign_up', 'App\Http\Controllers\SignUpController@post');

Route::get('/login', 'App\Http\Controllers\LoginController@get');
Route::post('/login', 'App\Http\Controllers\LoginController@post');

Route::get('/user_page/{page_id}', 'App\Http\Controllers\UserPageController@get');

Route::get('/write_report', 'App\Http\Controllers\WriteReportController@get');
Route::post('/write_report', 'App\Http\Controllers\WriteReportController@post');

Route::get('/view_report/{report_id}', 'App\Http\Controllers\ViewReportController@get');


Route::get('/chat', 'App\Http\Controllers\ChatController@get');

Route::get('/chat_room', 'App\Http\Controllers\ChatRoomController@get');
