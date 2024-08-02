<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,Cookie;
class ConnectController extends Controller
{
    public function __Construct(){
        $this->middleware('guest')->except(['getLogout','getTwoFactor']);
    }

    public function getLogin(){
        return view('connect.login');
    }

    public function getTwoFactor(){


    }

    public function getLogout(){
        Cookie::queue((Cookie::forget('browser_trusted')));
        Auth::logout();
        return redirect('/');
    }    
}
