<?php

namespace App\Http\Controllers;

// Khai báo thư viện
use Illuminate\Http\Request;

class helloController extends Controller
{
    public function xinchao() {
        $title = 'Đây là giá sản phẩm';
        $price = '2000 VND';
        $describe = 'hàng ngon đẹp dễ xài';
        $arr = ['tieude' => $title , 'gia'=>$price, 'mota'=>$describe ];
        return view('test') -> with('mang', $arr);
    }
}
