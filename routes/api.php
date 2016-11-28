<?php

use Illuminate\Http\Request;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::post('auth/register', 'AuthController@register');
Route::get('user', 'UserController@users');
