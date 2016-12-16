<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPosting extends Model
{
    protected $fillable = [
      'kode', 'jenis', 'keterangan',
    ];
    protected $table = "tbl_jenis_posting";

    public function scopeLatestFirst($query)
    {
      return $query->orderby('id', 'DESC');
    }
}
