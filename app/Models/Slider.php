<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model 
{

    protected $table = 'sliders';
    public $timestamps = true;
    protected $fillable = array('activity', 'num', 'img',"text");
    protected $appends = [   "img_full_path"] ;


    public function  getImgFullPathAttribute()
    {
        return asset($this->img) ;
    }

}