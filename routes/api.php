<?php

use Illuminate\Http\Request;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('user', 'UserController@users');
Route::get('user/profile', 'UserController@profile')->middleware('auth:api');
Route::get('posting', 'PostController@posting')->middleware('auth:api');
Route::get('user/profile/{id}', 'UserController@profileById')->middleware('auth:api');
Route::post('add', 'PostController@add')->middleware('auth:api');
Route::put('put/{post}', 'PostController@update')->middleware('auth:api');
Route::delete('delete/{post}', 'PostController@delete')->middleware('auth:api');
