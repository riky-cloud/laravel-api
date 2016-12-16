<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transformers\UserTransforms;
use Auth;

class UserController extends Controller
{
    public function users(User $user)
    {
      $users = $user->all();
      // return response()->json($users);
      return fractal()
        ->collection($users)
        ->transformWith(new UserTransforms)
        ->toArray();
    }

    public function profile(User $user)
    {
      $user = $user->find(Auth::user()->id);

      return fractal()
        ->item($user)
        ->transformWith(new UserTransforms)
        ->includePosts()
        ->toArray();
    }

    public function profileById(User $user, $id)
    {
      $user = $user->find($id);

      return fractal()
        ->item($user)
        ->transformWith(new UserTransforms)
        ->includeidentitas()
        ->toArray();
    }
}
