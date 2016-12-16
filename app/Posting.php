<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Lokasi;
use App\JenisPosting;

class Posting extends Model
{
    protected $fillable = [
      'id_user', 'title', 'alamat',
    ];
    protected $table = "tbl_posting";

    public function scopeLatestFirst($query)
    {
      return $query->orderby('id', 'DESC');
    }

    public function posts($model)
    {
        if($model == 'App\JenisPosting') {
            return $this->hasOne($model, 'kode', 'kode_jenis');
        } else {
            return $this->hasMany($model);
        }
    }


    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
