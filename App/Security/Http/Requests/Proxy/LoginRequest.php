<?php

namespace App\Security\Http\Requests\Proxy;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class LoginRequest extends Generic
{
    
    protected $rules = [
        'email'=>'required|email',
        'password'=>'required',
        'clientId'=>'required',
    ];   
    
    protected function validationData()
    {
        $this->merge([
            'clientId'=>$this->header('client_id')
        ]);
        
        return parent::validationData();
    }
    
}
