<?php

namespace App\Security\Http\Requests\RbacTasks;

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
        'filter'=>'bail|sometimes|json|filter:task,taskKey,active,isSystem,idRbacRol',
        'query'=>'bail|sometimes',
    ];
    
    public $rulesFilters = [
        'idRbacRol'=>'sometimes|max:36|xss|exists:core.rbacRoles,id',
        'name'=>'sometimes|max:30|xss',
        'active'=>'nullable|xss|boolean',
        'isSystem'=>'nullable|xss|boolean',
        'task'=>'nullable|xss|max:255',
        'taskKey'=>'nullable|xss|max:255',
    ];
    
}
