<?php

namespace App\Http\Controllers;

use App\Models\Csr;
use Illuminate\Http\Request;

class CsrController extends Controller
{
    public function show(){
        $csrs=Csr::orderBy('id','asc')->get();
        return view('pages.csr' , [ 'csrs'  => $csrs ]);
    }
}
