<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthUserService {

    public function run(User $user){

        Auth::login($user);

    }

}
