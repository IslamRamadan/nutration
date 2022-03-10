<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'name','type','age','height','weight','content','phone','email','boquet_id'
    ];
    public function boquet(){
        return $this->belongsTo('App\Models\Boquet' , 'boquet_id' , 'id');
    }
}
