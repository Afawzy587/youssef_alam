<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function contact(){
        $branches = Branch::orderBy('id','asc')->get();
        return view('pages.contact',['branches'=>$branches]);
    }
    public function job_contact(Request  $request)
    {
        if($request->hasFile('file')) {
            $file = $request->file('file');

            //you also need to keep file extension as well
            $filename = Str::random(12);;

            $path =   '/' . date('y-m-d') . '/';

            $full_path = $path . $filename . '.' . $file->getClientOriginalExtension();
            $path = Storage::put(config('voyager.storage.subfolder') . $full_path, (string)$file, 'public');
//           $path = $request->file($request->file)->storeAs(config('voyager.storage') . $path, $filename. '.' . $file->getClientOriginalExtension());
            dd($full_path);


        }
    }
}
