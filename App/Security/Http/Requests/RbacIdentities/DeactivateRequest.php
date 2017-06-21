<?php

namespace App\Security\Http\Requests\RbacIdentities;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeactivateRequest extends Generic
{
    
    protected $rules = [
        'id'=>'required|size:36|xss|exists:core.rbacIdentities,id',
    ];
    
}
