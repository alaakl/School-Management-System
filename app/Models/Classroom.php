<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{

    use HasTranslations;
    public $translatable = ['Name'];


    protected $table = 'Classrooms';
    public $timestamps = true;
    protected $fillable=['Name','Grade_id'];


    // علاقة بين الصفوف المراحل الدراسية لجلب اسم المرحلة في جدول الصفوف

    public function Grades()
    {
        return $this->belongsTo('App\Models\Grade', 'Grade_id');
    }


    public function Sections()
    {
        return $this->hasMany('App\Models\Section', 'Class_id');
    }

    public function Branches()
    {
        return $this->hasMany('App\Models\Branche', 'Class_id');
    }

}
