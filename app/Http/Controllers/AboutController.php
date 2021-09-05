<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\History;
use App\Models\OurValue;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $abouts = About::all();
        $values = OurValue::all();
        $history = History::all();
        $team = Team::orderBy('id','ASC')->get();
        return view('pages.about',[ 'abouts'=>$abouts  ,'values'=>$values ,'histories'=>$history,'team'=>$team  ]);
    }
}
