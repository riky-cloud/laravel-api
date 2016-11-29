<?php

namespace App\Transforms;

use App\Post;
use League\Fractal\TransformerAbstract;

class PostTransforms extends TransformerAbstract
{
  public function transform(Post $post)
  {
    return [
      'id'        => $post->id,
      'user_id'   => $post->user_id,
      'isi'       => $post->isi,
      'published' => $post->created_at->diffForHumans(),
    ];
  }
}
