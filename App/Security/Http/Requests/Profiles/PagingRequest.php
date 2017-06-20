<?php

namespace App\Security\Http\Requests\Profiles;

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
        'filter'=>'bail|sometimes|json|filter:name,active',
        'query'=>'bail|sometimes',
    ];
    
    public $rulesFilters = [
        'name'=>'sometimes|max:30|xss',
        'active'=>'nullable|xss|boolean',
    ];
    
}
