<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $fillable = [
      'id_posting', 'lat', 'long',
    ];
    protected $table = "tbl_lokasi";

    public function scopeLatestFirst($query)
    {
      return $query->orderby('id', 'DESC');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
