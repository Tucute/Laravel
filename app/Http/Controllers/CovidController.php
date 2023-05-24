<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function getData() {
        $reponse = Http::get('https://api.covid19api.com/summary');
        $data = $reponse ->json();
        $sortdata = collect($data['Countries']) -> sortByDesc('TotalConfirmed');
        return view('index') -> with('data', $sortdata);
    }
}