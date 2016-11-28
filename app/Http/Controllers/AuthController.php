<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transforms\UserTransforms;

class AuthController extends Controller
{
    public function register(Request $request, User $user)
    {
      $this->validate($request,[
        'name'      => 'required',
        'email'     => 'required|email|unique:users',
        'password'  => 'required|min:6',
      ]);

      $users = $user->create([
        'name'      => $request->name,
        'email'     => $request->email,
        'password'  => bcrypt($request->password),
        'api_token' => bcrypt($request->email),
      ]);

      $response = fractal()
        ->item($users)
        ->transformWith(new UserTransforms)
        ->toArray();

      return response()->json($response, 201);
    }
}
