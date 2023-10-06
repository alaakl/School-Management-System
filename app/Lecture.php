<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public $translatable = ['Name'];
    public $timestamps = true;


    public $guarded=['Name'];
}
