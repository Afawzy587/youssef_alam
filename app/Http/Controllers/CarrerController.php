<?php

namespace App\Http\Controllers;

use App\Models\CarrerPage;
use App\Models\Job;
use Illuminate\Http\Request;

class CarrerController extends Controller
{
    function show(){
        $page = CarrerPage::find(1);
        $jobs =  Job::orderBy('id','asc')->get();
        return view('pages.carrer' ,['carrer'  =>$page, 'jobs'  =>$jobs  ]);
    }
}
