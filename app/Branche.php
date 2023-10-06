<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasTranslations;

    public $translatable = ['Name'];


    protected $table = 'branches';
    public $timestamps = true;
    // protected $fillable=['Name_Class','Grade_id'];
    protected $guarded=[];



 // علاقة بين الصفوف المراحل الدراسية لجلب اسم المرحلة في جدول الصفوف
 // علاقة بين الشعب و تلصفوف و المراحل الدراسية لجلب الاسماء

public function My_classs()
{
    return $this->belongsTo('App\Models\Classroom', 'Class_id');
}

public function teachers()
    {
        return $this->belongsToMany('App\Models\Teacher','teacher_Branche');
    }

public function Grades()
{
    return $this->belongsTo('App\Models\Grade', 'Grade_id');
}




}
