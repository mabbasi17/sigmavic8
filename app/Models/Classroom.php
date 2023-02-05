<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{

    use HasTranslations;
    public $translatable = ['Name_Class'];


    protected $table = 'Classrooms';
    public $timestamps = true;
    protected $fillable=['Name_Class','Grade_id'];


    // علاقة بين الصفوف المراحل الدراسية لجلب اسم المرحلة في جدول الصفوف

    public function Grades()
    {
        return $this->belongsTo('App\Models\Grade', 'Grade_id');
    }
    public function section()
    {
        return $this->belongsTo('App\Models\Grade', 'Class_id');
    }

        // علاقة المراحل الدراسية لجلب الاقسام المتعلقة بكل مرحلة
        public function Sections()
        {
            return $this->hasMany('App\Models\Section', 'Class_id');
        }

}
