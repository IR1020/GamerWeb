<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['login.check01']], function () {
    Route::get('/', 'App\Http\Controllers\TopPageController@get');

    Route::get('/sign-up', 'App\Http\Controllers\SignUpController@get');
    Route::post('/sign-up', 'App\Http\Controllers\SignUpController@post');

    Route::get('/login', 'App\Http\Controllers\LoginController@get');
    Route::post('/login', 'App\Http\Controllers\LoginController@post');
});

Route::get('/user-page/{user_id}', 'App\Http\Controllers\UserPageController@get')->name('user_page');

Route::get('/search-report', 'App\Http\Controllers\SearchReportController@get');

Route::get('/view-report/{report_id}', 'App\Http\Controllers\ViewReportController@get');

Route::group(['middleware' => ['login.check02']], function () {
    Route::get('/delete-user/{user_id}', 'App\Http\Controllers\DeleteUserController@get');
    Route::post('/delete-user/{user_id}', 'App\Http\Controllers\DeleteUserController@post');

    Route::get('/logout', 'App\Http\Controllers\LogoutController@get');

    Route::get('/write-report', 'App\Http\Controllers\WriteReportController@get');
    Route::post('/write-report', 'App\Http\Controllers\WriteReportController@post');

    Route::get('/edit-report/{report_id}', 'App\Http\Controllers\EditReportController@get');
    Route::post('/edit-report/{report_id}', 'App\Http\Controllers\EditReportController@post');

    Route::get('/delete-report/{report_id}', 'App\Http\Controllers\DeleteReportController@get');
    Route::post('/delete-report/{report_id}', 'App\Http\Controllers\DeleteReportController@post');
});
