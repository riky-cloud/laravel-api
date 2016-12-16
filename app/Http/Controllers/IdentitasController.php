<?php

namespace App\Http\Controllers;

use App\Identitas;
use App\Transformers\IdentitasTransforms;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    public function getAll(Identitas $data)
    {
        $data = $data->all();

        $response = fractal()
            -> collection($data)
            ->transformWith(new IdentitasTransforms)
            ->toArray();

        return response()->json($response, 201);
    }
}
