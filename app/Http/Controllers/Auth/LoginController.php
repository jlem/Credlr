<?php namespace Passgun\Http\Controllers\Auth;

use Passgun\Http\Requests\LoginRequest;
use Passgun\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller {

    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $Request)
    {
        Auth::attempt($Request->only('email', 'password'));
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
