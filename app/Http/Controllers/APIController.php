<?php

namespace App\Http\Controllers;

use App\Models\products;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getProducts()			
    {			
    $products = products::all();			
    return response()->json($products);			
    }			
    public function getOneProduct($id)			
    {			
    $product = products::find($id);			
    return response()->json($product);			
    }		
    
    
}
