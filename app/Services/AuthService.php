<?php

namespace App\Services; 

use App\Exceptions\LoginInvalidException;

class AuthService
{
    public function login(string $email, string $password)
    {
        $login = [
            'email'    => $email,
            'password' => $password,
        ];

        if (!$token = auth()->attempt($login)) {
            throw new LoginInvalidException();
        }

        return [
            'access_token' => $token,
            'token_type'   => 'Bearer',
        ];
    }

}
