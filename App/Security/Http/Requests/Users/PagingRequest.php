<?php

namespace App\Security\Http\Requests\Users;

use Melisa\Laravel\Http\Requests\WithFilter;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingRequest extends WithFilter
{
    
    protected $rules = [
        'page'=>'required|numeric',
        'start'=>'required|numeric',
        'limit'=>'required|numeric',
        'filter'=>'bail|sometimes|json|filter:name,active,isGod,email,firstLogin,isSystem',
        'query'=>'bail|sometimes',
    ];
    
    public $rulesFilters = [
        'name'=>'sometimes|max:30|xss',
        'active'=>'nullable|xss|boolean',
        'isGod'=>'nullable|xss|boolean',
        'firstLogin'=>'nullable|xss|boolean',
        'isSystem'=>'nullable|xss|boolean',
        'email'=>'nullable|xss|email',
    ];
    
}
