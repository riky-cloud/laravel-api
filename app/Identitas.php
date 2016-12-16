<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $fillable = [
        'id_user', 'nama', 'kode', 'keterangan'
    ];

    protected $table = 'tbl_identitas';
    
}
