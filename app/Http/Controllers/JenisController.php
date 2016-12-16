<?php

namespace App\Http\Controllers;

use App\JenisPosting;
use App\Transformers\JenisPostingTransforms;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function getAll(JenisPosting $data)
    {
        $data = $data->all();

        $response = fractal()
          ->collection($data)
          ->transformWith(new JenisPostingTransforms)
          ->toArray();

        return response()->json($response, 201);
    }
}
