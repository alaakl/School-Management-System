<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekly_Programme extends Model
{
    public $translatable = ['Name'];

    protected $guarded=[];

    // protected $table = 'Grades';


    public function lectures()
    {
        return $this->belongsTo('App\Lecture', 'lecture_id');
    }


    public function My_classs()
    {
        return $this->belongsTo('App\Models\Classroom', 'Class_id');
    }


    public function branches()
    {
        return $this->belongsTo('App\Models\Branche', 'branch_id');
    }


    public function subjects()
    {
        return $this->belongsTo('App\Models\Subject', 'subject_id');
    }


    public function teachers()
        {
            return $this->belongsToMany('App\Models\Teacher','teacher_id');
        }



}
