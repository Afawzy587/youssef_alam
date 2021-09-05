<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Event;
use App\Models\MediaSlider;
use App\Models\News;
use App\Models\Video;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function show(){
        $sliders=MediaSlider::orderBy('id','asc')->get();
        $videos=Video::orderBy('id','asc')->get();
        $awards=Award::orderBy('id','asc')->get();
        $events=Event::orderBy('id','asc')->get();
        $news=News::orderBy('id','asc')->get();
        return view('pages.media' , [ 'sliders' => $sliders ,'videos' => $videos  ,'awards' => $awards ,'events' => $events ,'news' => $news  ]);
    }
}
