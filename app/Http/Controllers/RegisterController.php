<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('main.register.index');
    }

    public function store(Request $request){
        
    }
}
