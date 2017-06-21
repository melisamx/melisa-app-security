<?php

namespace App\Security\Http\Requests\RbacRoles;

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
        'filter'=>'bail|sometimes|json|filter:role,active,isSystem',
        'query'=>'bail|sometimes',
    ];
    
    public $rulesFilters = [
        'role'=>'sometimes|max:30|xss',
        'active'=>'nullable|xss|boolean',
        'isSystem'=>'nullable|xss|boolean',
    ];
    
}
