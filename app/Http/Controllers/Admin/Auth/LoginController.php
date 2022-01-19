<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(AdminLoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::guard('admin')->attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password'],
        ], $credentials['remember'] ?? null)) {

            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
