<?php

namespace App\Security\Http\Requests\Identities;

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
        'filter'=>'bail|sometimes|json|filter:idUser,display,displayEspecific,active,isDefault',
        'query'=>'bail|sometimes',
    ];
    
    public $rulesFilters = [
        'idUser'=>'required|max:36|xss|exists:core.users,id',
        'display'=>'sometimes|max:75|xss',
        'displayEspecific'=>'sometimes|max:75|xss',
        'active'=>'nullable|xss|boolean',
        'isDefault'=>'nullable|xss|boolean',
    ];
    
}
