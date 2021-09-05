<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PmacController extends Controller
{
    public function show(){
        $courses = Course::orderBy('id','asc')->get();
        $galleries= Gallery::orderBy('id','asc')->get();
        return view('pages.print_media_acadamy',[ 'courses'=>$courses , 'galleries'=>$galleries ]);
    }
}
