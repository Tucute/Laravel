<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\products;
use App\Models\slide;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getIndex() {
        $slide = slide::all();
        $newProduct = products::where('new',1)->get();
        $topProduct = products::where('promotion_price', '>' , 1000 ) -> get();
        return view('master', compact('slide','newProduct', 'topProduct'));
    }
    public function getDetails(Request $request) {
        $sanpham = products::where('id', $request->id) ->first();
        $splienquan = products::where('id', '<>', $sanpham->id, 'and' , 'id_type','=',$sanpham->id_type,)->paginate(3);
        $comments = comments::where('id_product',$request->id)->get();
        return view('component.details', compact('sanpham','splienquan','comments'));
    }

}
