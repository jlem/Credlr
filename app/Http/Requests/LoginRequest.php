<?php namespace Passgun\Http\Requests;

class LoginRequest extends Request
{
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Need email',
            'email.email' => 'Bad email',
            'password' => 'Need password'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
