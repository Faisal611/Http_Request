<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
/** Login Area*/
    public function login(){
        return view('auth.log');
    }
    public function postLogin(Request $request){
       $data = $request->only(['email','password']);
       if (Auth::attempt($data)){
           return redirect()->intended('/admin');
       }else{
           return redirect()->intended('login');
       }
    }

    public function admin(){
        return 'Successfully Admin';
    }
    public function dashboard(){
        return 'Successfully Dash Board';
    }

    public function logOut(){
        Auth::logout();
        return redirect()->intended('login');
    }

/** Login Area*/
/** register Area*/
    public function reg(){
        return view('auth.reg');
    }

    public function allview(Request $request){

        $data = $request->all();
        $data['password'] = Hash::make($request->get('password'));
            User::create($data);
            return 'Successfully Data Create';
    }
/** -------register Area--------------*/
/** -------image upload Area--------------*/
    public function upload(){
        return view('images.upload');
    }
    public function store (Request $request){
       $path = $request->file('upload')->store('images', 'public');
       return $path;
    }

    public function file(){
      echo  $url = asset(Storage::url('images/hF0VybIqmNN8NvKS89bcBV3NbgBllrMBoOcIqosz.jpg'));
       echo "<img src='$url'>";
    }
/** -------image upload Area--------------*/


}
