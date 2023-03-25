<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserService{
   
    public function userAuth($request, $validated){

        if ($auth = Auth::attempt($validated)) {

            $request->session();

            return $auth;

        }

    }



    public function userRegister($validated){

        $user = User::query()->create([
            'login' => $validated['login'],
            'password' => bcrypt($validated['password']),
            'phone' => $validated['phone'],
            'mail' => $validated['mail'],
            'admin' => "0",
        ]);

        $auth = Auth::login($user);

    }



    public function userLogout(){

        Auth::logout();

    }
    

}
