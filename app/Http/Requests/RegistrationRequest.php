<?php namespace Credlr\Http\Requests;

use Credlr\Http\Requests\Request;

class RegistrationRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8'
		];
	}

	public function messages()
	{
		return [
			'name.required' => 'Please provide your name',
			'email.required' => 'A valid email is required',
			'email.email' => 'A valid email is required',
			'password.required' => 'Password should be at least 8 characters',
			'password.min' => 'Password should be at least 8 characters'
		];
	}

}
