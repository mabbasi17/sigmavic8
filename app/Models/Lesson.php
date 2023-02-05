<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function Course()
    {
        return $this->belongsTo('App\Models\Course');
        
    }
}
