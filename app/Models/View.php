<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }


    public function Course()
    {
        return $this->belongsTo('App\Models\Course', 'Course_id');
    }
}
