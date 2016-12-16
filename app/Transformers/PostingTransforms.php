<?php

namespace App\Transformers;

use App\Posting;
use League\Fractal\TransformerAbstract;
use App\Transformers\LokasiTransforms;
use App\Transformers\JenisPostingTransforms;

class PostingTransforms extends TransformerAbstract
{

    protected $availableIncludes = ['lokasi', 'jenis'];

    public function transform(Posting $data)
    {
        return [
          'id'        => $data->id,
          'title'     => $data->title,
          'alamat'    => $data->alamat,
        ];
    }

    public function includeLokasi(Posting $data)
    {
        $data = $data->posts('App\Lokasi')->get();
        return $this->collection($data, new LokasiTransforms);
    }

    public function includeJenis(Posting $data)
    {
        $data = $data->posts('App\JenisPosting')->get();
        return $this->collection($data, new JenisPostingTransforms);
    }

}
