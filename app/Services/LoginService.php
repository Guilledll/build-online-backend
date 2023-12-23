<?php

namespace App\Services;

use App\Http\Requests\Auth\LoginRequest;
use App\Interfaces\LoginServiceInterface;
use App\Models\User;

class LoginService implements LoginServiceInterface
{
    public function login(LoginRequest $request): string
    {
        $user = User::query()->firstWhere('email', '=', $request->validated());

        $token = $user->createToken('access_token')->plainTextToken;

        return $token;
    }
}