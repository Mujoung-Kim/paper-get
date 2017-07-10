<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        /*
         * 입력값 검증
         */
        $this->validate($request,[
            'name' => 'required|max:100',
            'email' => 'required|email|max:200|unique:users',
            'password' => 'required|confirmed|min:5',
        ]);


    }


}
