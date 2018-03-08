<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable =[
    	'title', 'date', 'time', 'project_id'
	];

    protected $table = 'tasks';
    protected $dates = ['deleted_at'];
}
