<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorise;


class categoriesController extends Controller
{
    public function index(){

        $get_items=Categorise::All();




        return view('categories.index',['catitems'=>$get_items]);
    }

    public function create(Request $request){

        $validate=$request->validate([

            'categ_name'=>'required|string|max:255',
    
            'categ_description'=>'nullable|string|max:255'
    
           ]);

        $arr=[
            'name'=>$request->categ_name,
            'Description'=>$request->categ_description


        ];

        $items=Categorise::create($arr);
        $items->save();

        return redirect()->route('categories.index');

    }

    public function delete($id){

        $data=Categorise::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('categories.index');
    }


    public function Edit($id) {
        $category = Categorise::find($id);
        
        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'الفئة غير موجودة');
        }
    
        return view('categories.Edit', ['category' => $category]);
    }
    
    
    public function update(Request $request, $id) {
        $validate = $request->validate([
            'categ_name' => 'required|string|max:255',
            'categ_description' => 'nullable|string|max:255',
        ]);
    
        $category = Categorise::find($id);
    
        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'الفئة غير موجودة');
        }
    
        
        $category->name = $request->categ_name;
        $category->Description = $request->categ_description;
        $category->save();
    
        return redirect()->route('categories.index')->with('success', 'تم التحديث بنجاح');
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
