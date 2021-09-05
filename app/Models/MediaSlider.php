<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class MediaSlider extends Model
{
    use HasFactory;
    protected  $table ='media_sliders';
    use Translatable;
    protected $translatable = ['title','content',];
}
