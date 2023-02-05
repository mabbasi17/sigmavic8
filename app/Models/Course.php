<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasTranslations;
    public $translatable = ['name'];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }



    public function subject()
    {
        return $this->belongsTo('App\Models\Subject', 'subject_id');
    }


    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }


    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom', 'classroom_id');
    }


    public function view()
    {
        return $this->hasMany('App\Models\View');
    }
}
