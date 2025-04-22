<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorise;


class categoriesController extends Controller
{
    public function index(){
        return view('categories.index');
    }

    public function create(Request $request){

        $arr=[
            'name'=>$request->categ_name,
            'Description'=>$request->categ_description


        ];

        $items=Categorise::create($arr);
        $items->save();

    
    }

    public function callUs(){
        return view('CallUs');
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function product(){
        return view('products');
    }




}
