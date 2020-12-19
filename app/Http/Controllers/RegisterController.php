<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerCreate() {
        return view('user.register');
    }
    public function store(UserRequest $request){
//        $request->validate([
//            'name'=>'required|string|max',
//            'email'=>'required|email',
//            'password'=>'numeric',
//        ]);
      return $request->all();
    }
}
