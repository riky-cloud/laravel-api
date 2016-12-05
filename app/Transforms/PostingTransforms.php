<?php

namespace App\Transforms;

use App\Tbl_posting;
use League\Fractal\TransformerAbstract;

class PostingTransforms extends TransformerAbstract
{
  public function transform(Tbl_posting $post)
  {
    return [
      'title'     => $post->title,
    ];
  }
}
