<?php

namespace App\Services;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;

class LoginService
{
    public function login(LoginRequest $request): string
    {
        $user = User::query()->firstWhere('email', '=', $request->validated());

        $token = $user->createToken('access_token')->plainTextToken;

        return $token;
    }
}