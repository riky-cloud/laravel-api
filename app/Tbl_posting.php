<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Tbl_posting extends Model
{
    protected $fillable = [
      'id_user', 'title', 'alamat',
    ];
    protected $table = "tbl_posting";

    public function scopeLatestFirst($query)
    {
      return $query->orderby('id', 'DESC');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
