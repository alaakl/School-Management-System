<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class My_Parent extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    protected $table = 'my__parents';
    protected $guarded=[];

    public function nationalities()
    {
        return $this->belongsTo('App\Models\Nationalitie', 'Nationality_parents_id');
    }

}
