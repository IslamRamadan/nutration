<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{

    protected $table = 'social';
    protected $fillable = [
        'link','appearance','img',
    ];
    // protected $guarded=[];





}
