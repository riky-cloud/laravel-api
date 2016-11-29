<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    protected $fillable = [
      'user_id', 'isi',
    ];

    public function scopeLatestFirst($query)
    {
      return $query->orderby('id', 'DESC');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
