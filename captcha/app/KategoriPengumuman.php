<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $table = 'KategoriPengumuman';
    
    protected $fillable = [
       		'nama', 'users_id',
    ];
    
    protected $casts=[

    ];
}
