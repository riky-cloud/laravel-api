<?php

namespace App\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;

class PostTransforms extends TransformerAbstract
{
  public function transform(Post $data)
  {
    return [
      'id'        => $data->id,
      'user_id'   => $data->user_id,
      'isi'       => $data->isi,
      'published' => $data->created_at->diffForHumans(),
    ];
  }
}
