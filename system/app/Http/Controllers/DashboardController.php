<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('user.status');
        $this->middleware('user.two.factor');
    }

    public function getHome(){
        $data = [];
        return view('dashboard',$data);
    }
}
