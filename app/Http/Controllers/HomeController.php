<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomeAbout;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $sliders       = Slider::orderBy('id','asc')->get();
        $categories = Category::orderBy('id','asc')->get();
        $abouts      = HomeAbout::orderBy('id','asc')->get();
        return view('pages.home',['sliders'=>$sliders,'categories'=>$categories,'abouts'=>$abouts]);
    }
}
