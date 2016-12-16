<?php

namespace App\Transformers;

use App\Identitas;
use League\Fractal\TransformerAbstract;

class IdentitasTransforms extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Identitas $data)
    {
        return [
            'id' => $data->id,
            'nama identitas' => $data->nama,
            'kode identitas' => $data->kode,
        ];
    }
}
