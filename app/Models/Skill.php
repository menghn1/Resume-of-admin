<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	
    use SoftDeletes;

    protected $table = 'skill';
    
}
