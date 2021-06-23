<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class postAuthRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules() :array
    {        
        return [
            'email' => 'required|string|email',
            'password' => 'required|string|min:3',
        ];
    }

    public function messages() :array 
    {
        return [
            'password.required' => 'El campo password no puede estar vacio',
        ];
    }
}
