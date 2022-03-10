<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boquet extends Model
{

    protected $table = 'boquets';
    protected $fillable = [
        'title_en'  , 'title_ar' , 'description_en','description_ar',
        'appearance','img',
    ];
    protected $guarded=[];





}
