<?php

namespace App\Security\Http\Requests\Scopes;

use Melisa\Laravel\Http\Requests\Generic;
use Melisa\Sanitizes\BeforeSanitize;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends Generic
{
    use BeforeSanitize;
    
    protected $rules = [
        'id'=>'bail|required|xss|numeric|unique:scopes',
        'name'=>'bail|required|alpha_dash|max:75|xss',
        'active'=>'bail|required|xss|boolean',        
    ];
    
    protected $sanitizes = [
        'active'=>'boolean'
    ];
    
}
