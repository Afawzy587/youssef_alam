<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Csr extends Model
{
    use HasFactory;
    protected  $table ='csr';
    use Translatable;
    protected $translatable = ['title','content',];
}
