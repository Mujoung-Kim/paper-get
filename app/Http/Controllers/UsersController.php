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

        $user = \App\User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        auth()->login($user);
        flash(auth()->user()->name . '님 환영합니다 ');

        return redirect('home');

    }


}
