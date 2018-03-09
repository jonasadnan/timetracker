<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable =[

    	'title', 'category_id',
	];

    protected $table = 'projects';
    protected $dates = ['deleted_at'];

}
