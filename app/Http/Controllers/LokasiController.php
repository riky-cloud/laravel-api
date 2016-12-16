<?php

namespace App\Http\Controllers;

use App\Lokasi;
use Illuminate\Http\Request;
use App\Transformers\LokasiTransforms;

class LokasiController extends Controller
{
    public function getAll(Lokasi $data)
    {
      $data = $data->all();

      $response = fractal()
        ->collection($data)
        ->transformWith(new LokasiTransforms)
        ->toArray();

      return response()->json($response, 201);
    }
}
