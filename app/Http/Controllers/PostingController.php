<?php

namespace App\Http\Controllers;

use App\Posting;
use Illuminate\Http\Request;
use App\Transformers\PostingTransforms;
use Auth;

class PostingController extends Controller
{

  public function getAll(Posting $data)
  {
        $data = $data->all();

        $response = fractal()
          ->collection($data)
          ->transformWith(new PostingTransforms)
          ->includeLokasi()
          ->toArray();

        return response()->json($response, 201);

  }

  public function getById(Posting $data, $id)
  {
        $data = $data->find($id);

        return fractal()
        ->item($data)
        ->transformWith(new PostingTransforms)
        ->includeJenis()
        ->includeLokasi()
        ->toArray();
  }


}
