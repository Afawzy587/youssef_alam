<?php

namespace App\Http\Controllers;

use App\Models\ProductsCategory;
use App\Models\ProductsSubCategory;
use App\Models\SubCategory3;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function categories(){

        $categories =ProductsCategory::orderBy('id','asc')->get();
        return view('pages.products' , ['categories'   => $categories]);
    }

    public function sub_category($id){

        $category =ProductsSubCategory::FindOrfail($id);
        return view('pages.category_products' , ['category'   => $category]);
    }

    public function final_cat($id){
        $category =SubCategory3::FindOrfail($id);
        return view('pages.final_products' , ['category'   => $category]);
    }
}
