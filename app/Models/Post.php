<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('img', 'title_en', 'title_ar', 'brief_en', 'brief_ar', 'content_en', 'content_ar');

}
