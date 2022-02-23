<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $table = 'items';
    public $timestamps = true;
    protected $fillable = array('name', 'description','name_en', 'description_en', 'price', 'over',"over_price","new","popular", 'brand_id', 'made', 'subSubCategory_id','subCategory_id', 'category_id', 'qut', 'pay', 'view', 'tags',"img","num","type","activity","user_id");

    protected $appends = [   "img_full_path", "precentage" ] ;




    public function images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function sizes()
    {
        return $this->hasMany('App\Models\Size');
    }

	 public function colors()
    {
        return $this->hasMany('App\Models\Color');
    }


    public function  getImgFullPathAttribute()
    {
        return asset($this->img) ;
    }

    public function  getPrecentageAttribute()
    {
		if($this->over_price > 0 && $this->price >0  ){
			        return  ceil(100 - ( ( $this->over_price  / $this->price )  * 100) );

		}
		return 1 ;
    }

}
