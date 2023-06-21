<?php

namespace App\Http\Controllers;

use App\Models\user;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\View\Components\Alert;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Psy\Readline\Hoa\Console;

use function PHPUnit\Framework\once;

class UserController extends Controller
{
    public function getRegister() {
        return view('user.register');
    }
    public function postRegister(Request $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->Save();
        return $this->getLogin();
    }
    public function getLogin() {
        return view('user.login');
    }
    public function postLogin(Request $request) {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('pw')
        ];
        var_dump($login);
        if (Auth::attempt($login)) { 
            $user = Auth::user();
            Session::put('user',$user);
            echo '<script>alert("Đăng nhập thành công");window.location.assign("index");</script>' ;
        }
        else {
            echo '<script>alert("Đăng nhập thất bại");window.location.assign("login");</script>' ;
        }
        
    }
    public function Logout ()
    {
        Session::forget('user');
        Session::forget('cart');
        return redirect('/trangchu');
    }

}
