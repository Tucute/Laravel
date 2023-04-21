<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function Area(Request $request) {
        $a = $request -> a ;
        $h = $request -> h ;
        $e1 = $request -> e1;
        $e2 = $request -> e2;
        $e3 = $request -> e3;
        $e4 = $request -> e4;
        $sum = ($a+$h)/2;
        return view('Shape') -> with(['areaAtriangle' => $sum] , ['areaQuadrangle' => ($e1+$e2+$e3+$e4)] );
    }
}
