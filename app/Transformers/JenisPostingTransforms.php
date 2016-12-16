<?php

namespace App\Transformers;

use App\JenisPosting;
use League\Fractal\TransformerAbstract;

class JenisPostingTransforms extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(JenisPosting $data)
    {
        return [
            'id'            => $data->id,
            'kode'          => $data->kode,
            'jenis'         => $data->jenis,
            'keterangan'    => $data->keterangan,
        ];
    }
}
