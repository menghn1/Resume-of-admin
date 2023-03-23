<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
	
    use SoftDeletes;

    protected $table = 'work_experience';
    
}
