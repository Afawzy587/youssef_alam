<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show(){
        $services= Service::orderBy('id','asc')->get();
        return view('pages.services',[ 'services'=>$services  ]);
    }
}
