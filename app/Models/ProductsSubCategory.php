<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ProductsSubCategory extends Model
{
    use HasFactory;
    protected  $table="products_sub_categories";
    use Translatable;
    protected $translatable = ['name'];

    public function  categories(){
        return $this->belongsTo(ProductsCategory::class);
    }
    public function  subcategories(){
        return $this->hasMany(SubCategory2::class);
    }
}
