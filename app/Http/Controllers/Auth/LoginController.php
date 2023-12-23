<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\LoginService;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function __construct(
        protected LoginService $loginService
    ) {
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $request->authenticate();

        $token = $this->loginService->login($request);

        return response()->json(['token' => $token]);
    }
}
