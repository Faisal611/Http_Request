<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function createUser(Request $request){
        $request->session()->put('name','arafat');
        $request->session()->put('email','arafat@gmail.com');
        //2nd way
        Session::put('houseNo','123');
        // 3rd way
        session(['address'=>'1234/Dhaka']);
    }
    public function showUser(Request $request){
        echo $request->session()->get('name');
        echo '<br>';
        echo $request->session()->get('email');
        echo Session::get('houseNo');
    }
}
