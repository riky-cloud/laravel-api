<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;
use App\Transformers\PostTransforms;
use App\Transformers\IdentitasTransforms;

class UserTransforms extends TransformerAbstract
{

  protected $availableIncludes = ['posts', 'identitas'];

  public function transform(User $data)
  {
    return[
      'id'          => $data->id,
      'name'        => $data->name,
      'email'       => $data->email,
      'registered'  => $data->created_at->diffForHumans()
    ];
  }

  public function includePosts(User $user)
  {
    $posts2 = $user->posts()->latestFirst()->get();
    $dataarr = array(
        'isi2' => 'baru'
    );

    // return $dataarr;
    return $this->collection($posts2, new PostTransforms);
  }

  public function includeidentitas(User $user)
  {
    $data = $user->identitas()->get();

    return $this->collection($data, new IdentitasTransforms);
  }
}
