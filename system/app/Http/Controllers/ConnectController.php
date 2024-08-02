<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\SendCodeTwoFactor;
use Illuminate\Http\Request;
use Auth,Cookie,Mail;
class ConnectController extends Controller
{
    public function __Construct(){
        $this->middleware('guest')->except(['getLogout','getTwoFactor']);
    }

    public function getLogin(){
        return view('connect.login');
    }

    public function getTwoFactor(){
        $this->getSendCodeTwoFactor();
        return view('connect.two_factor');
    }

    public function getLogout(){
        Cookie::queue((Cookie::forget('browser_trusted')));
        Auth::logout();
        return redirect('/');
    }
    public function getSendCodeTwoFactor(){
        $code = rand(100001, 999999);
        $data = ['code' => $code,'name' => Auth::user()->name];
        $user = User::find(Auth::id());
        $user->auth_code = $code;
        $user->save();
        //return view('emails.SendCodeTwoFactor', $data);
        Mail::to(Auth::user()->email)->send(new SendCodeTwoFactor($data));
    }
}
