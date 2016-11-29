<?php

namespace App\Transforms;

use App\User;
use League\Fractal\TransformerAbstract;
use App\Transforms\PostTransforms;

class UserTransforms extends TransformerAbstract
{

  protected $availableIncludes = ['posts'];

  public function transform(User $user)
  {
    return[
      'id'          => $user->id,
      'name'        => $user->name,
      'email'       => $user->email,
      'registered'  => $user->created_at->diffForHumans()
    ];
  }

  public function includePosts(User $user)
  {
    $posts = $user->posts()->latestFirst()->get();

    return $this->collection($posts, new PostTransforms);
  }
}
