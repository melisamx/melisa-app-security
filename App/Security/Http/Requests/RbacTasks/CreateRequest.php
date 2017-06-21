<?php

namespace App\Security\Http\Requests\RbacTasks;

use Melisa\Laravel\Http\Requests\WithFilter;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends WithFilter
{
    
    protected $rules = [
        'idRbacRol'=>'required|xss|max:36|exists:core.rbacRoles,id',
        'idIdentity'=>'required|xss|max:36|exists:core.tasks,id',
        'active'=>'required|xss|boolean',
        'isSystem'=>'required|xss|boolean',
    ];
    
    public $rulesFilters = [];
    
}
