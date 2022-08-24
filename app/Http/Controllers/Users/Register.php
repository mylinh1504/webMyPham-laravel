<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function index(){
        return view('users/register',[
            'title'=>'Register User'
        ]);
    }
    public function store(){
        return 'hello';
    }
}
