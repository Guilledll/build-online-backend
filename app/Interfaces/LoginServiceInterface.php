<?php

namespace App\Interfaces;

use App\Http\Requests\Auth\LoginRequest;

interface LoginServiceInterface
{
    public function login(LoginRequest $request): string;
}