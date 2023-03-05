<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginReguest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){

        $user = Auth::user();

        $admin = User::query()->find($user);


        return view('main.home.index', compact('admin'));
    }

    public function dop(){
        return view('main.home.adminOption');
    }
}
