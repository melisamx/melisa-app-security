<?php

namespace App\Security\Http\Requests\RbacRoles;

use Melisa\Laravel\Http\Requests\WithFilter;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends WithFilter
{
    
    protected $rules = [
        'role'=>'required|xss|max:75|unique:rbacRoles',
        'description'=>'required|xss|max:100',
        'active'=>'required|xss|boolean',
        'isSystem'=>'required|xss|boolean',
    ];
    
    public $rulesFilters = [];
    
}
