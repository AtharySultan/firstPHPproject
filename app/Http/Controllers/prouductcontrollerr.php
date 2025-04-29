<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorise;
use App\Models\products;



class prouductcontrollerr extends Controller
{


    public function GetProuduct(){


        return view('prouducts');

    }

    public function index(){

        $categorise=Categorise::All();
        $products=products::All();



        return view('products.index', [
            'categorise' => $categorise,
            'products' => $products
        ]);
    }

    public function CreateProuduct(Request $request){

        $validate=$request->validate([

            'categ_name'=>'required|string|max:255',
    
            'categ_description'=>'nullable|string|max:255',

            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categorises_id' => 'required|exists:categorises,id', 
            'image' => 'nullable|string|max:255', 
    
           ]);

        $arr=[
            'name'=>$request->categ_name,
            'Description'=>$request->categ_description,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'categorises_id'=>$request->categorises_id,
            'image'=>$request->image,


        ];

        $items=products::create($arr);
        $items->save();

        return redirect()->route('AdmainProuduct.index');

    }


    public function ProductDelete($id){

        $data=products::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('AdmainProuduct.index');
    }

    public function ProductEdit($id) {
        $data = products::find($id);
        $categorise = Categorise::all(); 
    
        return view('products.productEdit', [
            'products' => $data,
            'categorise' => $categorise,
        ]);
    }


    public function ProductUpdate(Request $request, $id) {
        $validate = $request->validate([
            'categ_name'=>'required|string|max:255',
            'categ_description'=>'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categorises_id' => 'required|exists:categorises,id',
            'image' => 'nullable|string|max:255',
        ]);
    
        $product = products::find($id);
    
        if ($product) {
            $product->name = $request->categ_name;
            $product->Description = $request->categ_description;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->categorises_id = $request->categorises_id;
            $product->image = $request->image;  
            $product->save();
        }
    
        return redirect()->route('AdmainProuduct.index')->with('success', 'تم التحديث بنجاح');
    }
    

    









}
