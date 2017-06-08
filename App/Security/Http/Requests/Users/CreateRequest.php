<?php

namespace App\Security\Http\Requests\Users;

use Melisa\Laravel\Http\Requests\Generic;
use App\Security\Http\Controllers\Auth\PasswordPolice;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends Generic
{
    use PasswordPolice;
    
    public function rules()
    {
        return [
            'name'=>'required|xss|max:255|unique:users',
            'email'=>'required|xss|email|max:255|unique:users',
            'active'=>'required|xss|boolean',
            'password'=>$this->passwordValidation,
        ];
    }
    
    public function messages()
    {
        return [
            'password.regex'=>$this->messagePasswordValidation,
        ];
    }
    
}
