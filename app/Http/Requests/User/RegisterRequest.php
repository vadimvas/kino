<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
  
    public function rules()
    {
        
        return [
            'name'=> ['required','string','max:255'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','min:4','confirmed']
        ];
    }
}
