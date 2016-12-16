<?php

namespace App\Transformers;

use App\Lokasi;
use League\Fractal\TransformerAbstract;

class LokasiTransforms extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Lokasi $data)
    {
        return [
            'id'    => $data->id,
            'lat'   => $data->lat,
            'long'  => $data->long,
        ];
    }
}
