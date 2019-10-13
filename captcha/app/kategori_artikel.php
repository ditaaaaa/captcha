<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori_artikel extends Model
{
	use softDeletes;

	protected $table = 'kategori_artikel';
    
    protected $fillable = [
       		'nama', 'users_id',
    ];
    
    protected $casts=[
    	'deleted_at'=>'datetime'
    ];
}
