<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SubCategory2 extends Model
{
    use HasFactory;
    protected  $table="sub_category_2";
    use Translatable;
    protected $translatable = ['name'];
    public function  categories(){
        return $this->belongsTo(ProductsSubCategory::class);
    }

    public function  sub_categories(){
        return $this->hasMany(SubCategory3::class,'sub_category2_id');
    }

    public function  products(){
        return $this->hasMany(Product::class);
    }
}
