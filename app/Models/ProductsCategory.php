<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ProductsCategory extends Model
{
    use HasFactory;
    protected  $table="products_categories";
    use Translatable;
    protected $translatable = ['name'];

    function  sub_categoris(){
        return $this->hasMany(ProductsSubCategory::class);
    }
}
