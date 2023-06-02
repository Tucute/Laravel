<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\products;
use App\Models\slide;
use App\Models\type_products;
use App\Models\bill_detail;
use Illuminate\Http\Request;

class pageController extends Controller
{
    
    public function getIndex() {
        $slide = slide::all();
        $newProduct = products::where('new',1)->get();
        $topProduct = products::where('promotion_price', '>' , 1000 ) -> get();
        return view('component.home', compact('slide','newProduct', 'topProduct'));
    }
    public function getLoaiSp($type){
        $type_product = type_products::all();
        $sp_theoloai = products::where('id_type',$type)->get();
        $sp_khac = products::where('id_type','<>',$type)->paginate(3);
        return view('component.product_type', compact('sp_theoloai', 'type_product', 'sp_khac'));
    }
    public function getDetails(Request $request) {
        $sanpham = products::where('id', $request->id) ->first();
        $splienquan = products::where('id', '<>', $sanpham->id, 'and' , 'id_type','=',$sanpham->id_type,)->paginate(3);
        $comments = comments::where('id_product',$request->id)->get();
        return view('component.details', compact('sanpham','splienquan','comments'));
    }
    public function getIndexAdmin()														
    {														
        $products = products::all();														
        return view('pageadmin.admin')->with(['products' => $products, 'sumSold' => count(bill_detail::all())]);														
    }														
	public function getAdminAdd()				
    {				
        return view('pageadmin.formAdd');				
    }				
    public function postAdminAdd(Request $request)							
    {							
        $product = new products();							
        if ($request->hasFile('inputImage')) {							
            $file = $request->file('inputImage');							
            $fileName = $file->getClientOriginalName();							
            $file->move('source/image/product', $fileName);							
        }							
        $file_name = null;							
        if ($request->file('inputImage') != null) {							
            $file_name = $request->file('inputImage')->getClientOriginalName();							
        }							
							
        $product->name = $request->inputName;							
        $product->image = $file_name;							
        $product->description = $request->inputDescription;							
        $product->unit_price = $request->inputPrice;							
        $product->promotion_price = $request->inputPromotionPrice;							
        $product->unit = $request->inputUnit;							
        $product->new = $request->inputNew;							
        $product->id_type = $request->inputType;							
        $product->save();							
        return $this->getIndexAdmin();							
    }		
    
    public function getAdminEdit($id)										
    {										
        $product = products::find($id);										
        return view('pageadmin.formEdit')->with('product', $product);										
    }	
    public function postAdminEdit(Request $request)							
    {							
        $id = $request -> editId;

        $product = new products();							
        if ($request->hasFile('editImage')) {							
            $file = $request->file('editImage');							
            $fileName = $file->getClientOriginalName();							
            $file->move('source/image/product', $fileName);							
        }							
        							
        if ($request->file('editImage') != null) {							
            $product->image = $fileName;							
        }							
							
        $product->name = $request->editName;														
        $product->description = $request->editDescription;							
        $product->unit_price = $request->editPrice;							
        $product->promotion_price = $request->editPromotionPrice;							
        $product->unit = $request->editUnit;							
        $product->new = $request->editNew;							
        $product->id_type = $request->editType;							
        $product->save();							
        return $this->getIndexAdmin();							
    }											
    public function postAdminDelete($id)
    {
        $product = products::find($id);
        $product->delete();
        return $this->getIndexAdmin();
    }

										


}
