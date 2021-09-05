<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SubCategory3 extends Model
{
    use HasFactory;
    protected  $table="sub_category_3";
    use Translatable;
    protected $translatable = ['name'];
    public function  categories(){
        return $this->belongsTo(SubCategory2::class,'sub_category_2_id');
    }

    public function  FinalCategories(){
        return $this->hasMany(SubCategory4::class,'sub_category3_id');
    }
}
