<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
/*
|-----User data Create
*/
    public function userCreate(){
        $data =[
            'name'=>'sumon',
            'email'=>'sumon@gmail.com',
            'password'=>'123456',
        ];
        User::create($data);
        return 'User create Successfully';
    }
/**
|-----All Data Show
*/
    public function allDataShow(){
       $allDataShow= User::get();
       dd($allDataShow);
    }
/**
|--------------------Middleware------------------------|
 */
    public function one(){
        return'this is a one';
    }
    public function two(){
        return'this is a two';
    }
    public function there(){
        return'this is a there';
    }

}
