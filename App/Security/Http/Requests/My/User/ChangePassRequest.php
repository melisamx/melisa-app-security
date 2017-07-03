<?php

namespace App\Security\Http\Requests\My\User;

use Melisa\Laravel\Http\Requests\Generic;
use App\Security\Http\Controllers\Auth\PasswordPolice;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ChangePassRequest extends Generic
{
    use PasswordPolice;
    
    public function rules()
    {
        return [
            'password'=>$this->passwordValidation,
            'newPassword'=>$this->passwordValidation,
        ];
    }
    
    public function messages()
    {
        return [
            'password.regex'=>$this->messagePasswordValidation,
            'newPassword.regex'=>$this->messagePasswordValidation,
        ];
    }
    
}
