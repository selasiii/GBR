<?php

namespace App\Http\Responses;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Models\User;

class AuthResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        $user = $request->user();

        if ($user->hasRole(User::ROLE_ADMIN)) {
            return redirect()->intended('/admin/dashboard');
        } elseif ($user->hasRole(User::ROLE_AGENT)) {
            return redirect()->intended('/agent/dashboard');
        } else {
            return redirect()->intended('/dashboard');
        }
    }
}
