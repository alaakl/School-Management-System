<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Nationalitie extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $table = 'nationalities';
    protected $fillable =['Name'];
    //protected $guarded =[];


    public function my__parents()
    {
        return $this->hasMany('App\Models\My_Parent', 'Nationality_parents_id');
    }
}
