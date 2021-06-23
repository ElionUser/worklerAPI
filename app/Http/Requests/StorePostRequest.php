<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    protected $redirect = false; 
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name_post' => 'string|required',
            'description' => 'string|required',
            'img_post' => 'string|required',
            'user_id' => 'integer',
        ];
    }

    public function messages()
    {
        return [
            'name_post.required' => 'El campo titulo debe estar lleno',
            'name_post.string' => 'El valor del campo debe ser valido',
        ];
    }

}
