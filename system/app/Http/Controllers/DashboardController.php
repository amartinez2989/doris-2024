<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
    }

    public function getHome(){
        return "Hola mundo";
    }
}
