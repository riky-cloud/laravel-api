<?php

use Illuminate\Http\Request;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

// login and register
Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');

// user
Route::get('user', 'UserController@users');
Route::get('user/profile', 'UserController@profile')->middleware('auth:api');
Route::get('user/profile/{id}', 'UserController@profileById')->middleware('auth:api');

// posting
Route::get('posting', 'PostingController@getAll')->middleware('auth:api');
Route::get('posting/{id}', 'PostingController@getById')->middleware('auth:api');

// jenis posting
Route::get('jenisposting', 'JenisController@getAll')->middleware('auth:api');

// Lokasi
Route::get('lokasi', 'LokasiController@getAll')->middleware('auth:api');

// identitas
Route::get('identitas', 'IdentitasController@getAll')->middleware('auth:api');

// coba
Route::post('add', 'PostController@add')->middleware('auth:api');
Route::put('put/{post}', 'PostController@update')->middleware('auth:api');
Route::delete('delete/{post}', 'PostController@delete')->middleware('auth:api');
//
