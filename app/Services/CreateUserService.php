<?php

namespace App\Services;

use App\Models\User;

class CreateUserService {

    public function run(array $attributes){

        return User::query()->create([
            'login' => $attributes['login'],
            'password' => bcrypt($attributes['password']),
            'phone' => $attributes['phone'],
            'mail' => $attributes['mail'],
            'admin' => "0",
        ]);

    }

}
