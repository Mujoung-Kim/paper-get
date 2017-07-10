<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        flash()->warning('Welcome Mory2');
        return view('layouts/app');
    }
}
