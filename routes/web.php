<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TopPageController@get');

Route::get('/sign_up', 'App\Http\Controllers\SignUpController@get');
Route::post('/sign_up', 'App\Http\Controllers\SignUpController@post');

Route::get('/login', 'App\Http\Controllers\LoginController@get');
Route::post('/login', 'App\Http\Controllers\LoginController@post');

Route::get('/user_page/{user_id}', 'App\Http\Controllers\UserPageController@get');

Route::get('/search_report', 'App\Http\Controllers\SearchReportController@get');

Route::get('/view_report/{report_id}', 'App\Http\Controllers\ViewReportController@get');

Route::group(['middleware' => ['login.check']], function () {
    Route::get('/delete_user/{user_id}', 'App\Http\Controllers\DeleteUserController@get');
    Route::post('/delete_user/{user_id}', 'App\Http\Controllers\DeleteUserController@post');

    Route::get('/logout', 'App\Http\Controllers\LogoutController@get');

    Route::get('/write_report', 'App\Http\Controllers\WriteReportController@get');
    Route::post('/write_report', 'App\Http\Controllers\WriteReportController@post');

    Route::get('/edit_report/{report_id}', 'App\Http\Controllers\EditReportController@get');
    Route::post('/edit_report/{report_id}', 'App\Http\Controllers\EditReportController@post');

    Route::get('/delete_report/{report_id}', 'App\Http\Controllers\DeleteReportController@get');
    Route::post('/delete_report/{report_id}', 'App\Http\Controllers\DeleteReportController@post');
});
