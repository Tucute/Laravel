<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function View() {
        return view('formValidate');
    }
    public function displayInfor(ValidateRequest $Request) {
        $user = [
            'name' => $Request -> name,
            'age' => $Request -> age,
            'date' => $Request -> date,
            'phone' => $Request -> phone,
            'web' => $Request -> web,
            'address' => $Request -> address,
        ];
        return view('formValidate') -> with('arrUser',$user);
    }
}
