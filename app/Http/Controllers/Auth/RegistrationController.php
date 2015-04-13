<?php namespace Credlr\Http\Controllers\Auth;

use Credlr\Http\Requests\RegistrationRequest;
use Credlr\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller {

    public function showRegistrationForm()
    {
        return view('auth.login');
    }

    public function login(RegistrationRequest $Request)
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
