<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_lazada;

class APILazadaController extends Controller
{
    // đẩy dữ liệu lên json serve
    public function getLazada()			
    {			
    $lazada = t_lazada::all();			
    return response()->json($lazada);			
    }	
    public function getOneLazada($id)			
    {			
    $lazada = t_lazada::find($id);			
    return response()->json($lazada);			
    }

    public function addProduct(Request $request)
    {
        $product = t_lazada::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'shopower' => $request->input('shopower')
        ]);
        
        $product->save();
        return $product;
    }
    // public function uploadImage(Request $request)
    // {
    //     // process image							
    //     if ($request->hasFile('uploadImage')) {
    //         $file = $request->file('uploadImage');
    //         $fileName = $file->getClientOriginalName();

    //         $file->move('source/image/product', $fileName);

    //         return response()->json(["message" => "ok"]);
    //     } else return response()->json(["message" => "false"]);
    // }

}
