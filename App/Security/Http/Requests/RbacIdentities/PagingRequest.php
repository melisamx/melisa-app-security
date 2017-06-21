<?php

namespace App\Security\Http\Requests\RbacIdentities;

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
        'filter'=>'bail|sometimes|json|filter:displayEspecific,active,isSystem,idRbacRol',
        'query'=>'bail|sometimes',
    ];
    
    public $rulesFilters = [
        'idRbacRol'=>'required|max:36|xss|exists:core.rbacRoles,id',
        'displayEspecific'=>'sometimes|max:75|xss',
        'active'=>'nullable|xss|boolean',
        'isSystem'=>'nullable|xss|boolean',
    ];
    
}
