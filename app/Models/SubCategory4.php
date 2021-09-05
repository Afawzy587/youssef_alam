<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SubCategory4 extends Model
{
    use HasFactory;
    protected  $table="sub_category_4";
    use Translatable;
    protected $translatable = ['name'];
    public function  categories(){
        return $this->belongsTo(SubCategory3::class,'sub_category3_id');
    }

    public function  products(){
        return $this->hasMany(Product::class);
    }
}
