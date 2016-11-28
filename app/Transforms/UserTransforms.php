<?php

namespace App\Transforms;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransforms extends TransformerAbstract
{
  public function transform(User $user)
  {
    return[
      'name'  => $user->name,
      'email'  => $user->email,
      'registered'  => $user->created_at->diffForHumans()
    ];
  }
}
