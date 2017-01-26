<?php namespace App\Security\Http\Requests\Scopes;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteRequest extends Generic
{
    
    protected $rules = [
        'id'=>'bail|required|numeric|xss|exists:scopes,id'        
    ];
    
}
