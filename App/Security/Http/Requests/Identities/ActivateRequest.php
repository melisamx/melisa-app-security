<?php

namespace App\Security\Http\Requests\Identities;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ActivateRequest extends Generic
{
    
    protected $rules = [
        'id'=>'required|size:36|xss|exists:core.identities,id',
    ];
    
}
